const { spawn } = require('child_process');
const http = require('http');

const wpContentPath = __dirname + '/../wp-content';

// Step 1: Run npx @wp-now/wp-now@latest start --blueprint=./blueprint.json
const childProcess = spawn('npx', ['@wp-now/wp-now@latest', 'start', '--blueprint=./blueprint.json'], {
    shell: true,
    cwd: wpContentPath,
    env: process.env
});

// Step 2: Stream stdout until it says "Server running at (.+)"
childProcess.stdout.on('data', async (data) => {
    const output = data.toString();
    console.log(output);
    
    if (output.includes('Server running at')) {
        // Step 3: Request the server URL/sitemap.xml
        const serverUrl = output.match(/Server running at (.+)/)[1];
        const sitemap = await fetchSitemap(serverUrl);
        console.log(sitemap);
    }
});

function fetchSitemap(serverUrl) {
    return new Promise(resolve => {
        http.get(`${serverUrl}/plugins/wp-docs-plugin/sitemap.xml`, (response) => {
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