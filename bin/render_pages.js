const { spawn } = require('child_process');
const http = require('http');
const fs = require('fs');

const wpContentPath = __dirname + '/../wp-content';

// Step 1: Run npx @wp-now/wp-now@latest start --blueprint=./blueprint.json
const childProcess = spawn('npx', ['@wp-now/wp-now@latest', 'start', '--blueprint=./blueprint-static-site.json', '--reset'], {
    shell: true,
    cwd: wpContentPath,
    env: process.env
});

// Kill child process when the parent exits
process.on('exit', () => {
    childProcess.kill();
});

// Step 2: Stream stdout until it says "Server running at (.+)"
childProcess.stdout.on('data', async (data) => {
    const output = data.toString();
    console.log(output);
    
    if (!output.includes('Server running at')) {
        return;
    }
    
    const serverUrl = output.match(/Server running at (.+)/)[1];
    await generateStaticSite(serverUrl);
});

async function generateStaticSite(serverUrl) {
    // Step 3: Create directory "../static-site" if it doesn't exist
    const staticSitePath = __dirname + '/../static-site';
    if (!fs.existsSync(staticSitePath)) {
        fs.mkdirSync(staticSitePath);
    }

    // Step 4: Fetch and save each page as HTML file
    const pagesJson = await fetchUrl(`${serverUrl}/wp-content/pages.json`);
    return;
    const pages = JSON.parse(pagesJson);
    for (const page of pages) {
        const url = `${serverUrl}${page.url}`;
        const html = await fetchUrl(url);
        const filename = page.url === '/' ? 'index' : page.url.replace(/\//g, '');
        const filePath = `${staticSitePath}${filename}.html`;
        fs.writeFileSync(filePath, html);
    }
    childProcess.kill();
}

function fetchUrl(url) {
    return new Promise(resolve => {
        http.get(url, (response) => {
            let responseData = '';
        
            response.on('data', (chunk) => {
                responseData += chunk;
            });
        
            response.on('end', () => {
                resolve(responseData);
            });
        });
    });
}
