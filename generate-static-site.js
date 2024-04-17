/**
 * Static Site Generator for wp-now
 * 
 * How does it work?
 * 1. The JavaScript crawler requests /logout/ to, well, log out.
 * 2. The /sitemap/ endpoint returns a list of all Posts with post_type=page and their URLs
 * 3. A JavaScript crawler requests each of those pages and writes the rendered HTML to the out directory
 * 4. All full-qualified site URLs are replaced with an absolute path
 * 5. The JavaScript crawler sends a request to /zip-wp-files/ to create wp.zip with wp-includes and wp-content inside (without PHP files)
 * 6. The JavaScript crawler unzips wp.zip in the out directory, shipping the missing static assets
 * 
 * It's weird process – that's because of wp-now's limitations.
 * @ee https://github.com/WordPress/playground-tools/issues/238
 */

const { exec } = require('child_process');
const fs = require('fs');

const outdir = process.argv[2] || __dirname + '/out';
const PATH_PREFIX = process.env.PATH_PREFIX || '/';

console.log(`Generating static site with ${PATH_PREFIX} prefix to: ${outdir}`);
// Run the start-site.sh script
const startSiteProcess = exec('bash start-site.sh');

// Listen for the output of the script
startSiteProcess.stdout.on('data', (data) => {
    const output = data.toString();
    process.stdout.write(output);

    // Check if the output contains the "Server running at" message
    if (output.includes('Server running at')) {
        // Extract the URL from the output
        const urlMatch = output.match(/Server running at (.+)/);
        const url = urlMatch[1];

        // Render the static site
        renderStaticSite(url).finally(() => {
            // Kill the start-site.sh script
            console.log('Done!');
            startSiteProcess.kill(9);
            process.exit(0);
        });
    } 
});

async function renderStaticSite(siteUrl) {
    // @TODO: Prevent wp-now from forcefully logging the user in
    await fetch(`${siteUrl}/logout/`);
    const sitemap = await fetch(`${siteUrl}/sitemap/`).then((response) => response.json());
    for (const { url, title, isFrontPage } of sitemap) {
        let page = await fetch(`${url}`).then((response) => response.text());
        let filePath = `${outdir}${url.replace(siteUrl, '')}`;
        let fileDir = '', fileName = '';
        if (filePath.endsWith('/')) {
            fileName = 'index.html';
            fileDir = filePath;
        } else {
            fileDir = filePath.substring(0, filePath.lastIndexOf('/'));
            fileName = filePath.substring(filePath.lastIndexOf('/') + 1) + '.html';
        }

        // Create the directory if it doesn't exist
        if (!fs.existsSync(fileDir)) {
            fs.mkdirSync(fileDir, { recursive: true });
        }

        // Write the page content to a file
        page = normalizeUrls(page, siteUrl, PATH_PREFIX);
        fs.writeFileSync(`${fileDir}/${fileName}`, page);

        if (isFrontPage) {
            fs.writeFileSync(`${outdir}/index.html`, `<!DOCTYPE html><script>window.location.href = ${JSON.stringify(url.replace(siteUrl, PATH_PREFIX).replace('//', '/'))};</script>`);
        }
    }

    // @TODO: Share the filesystem instead of going through zips.
    //        For example, support explicit mountpoints.
    await fetch(`${siteUrl}/zip-wp-files/`);
    await new Promise((resolve, reject) => {
        exec(`unzip -o ./wp-content/wp.zip -d ${outdir}`, (error, stdout, stderr) => {
            if (error) {
                console.error('Error unzipping wp.zip:', error);
                reject(error);
            } else {
                console.log('wp.zip unzipped successfully');
                resolve();
            }
        });
    });
}

function normalizeUrls(html, siteUrl, targetUrl) {
    if (!targetUrl.endsWith('/')) {
        targetUrl += '/';
    }
    if (!siteUrl.endsWith('/')) {
        siteUrl += '/';
    }
    html = html.replaceAll(siteUrl, targetUrl);
    html = html.replace('//localhost', '');
    return html;
}

// Handle any errors from the start-site.sh script
startSiteProcess.on('error', (error) => {
    console.error('Error running start-site.sh:', error);
});
