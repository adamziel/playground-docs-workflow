Welcome to Blueprints for the WordPress Playgound

<a href="https://wordpress.github.io/wordpress-playground/blueprints-api/">Here's a list of what all is possible with blueprints</a>
- TODO: Update doc for "everything you can do with Playground"
- https://github.com/WordPress/wordpress-playground/issues/1094

<hr />

<h2>How to run blueprints?</h2>

Blueprints are used to configure a website at <strong>initial setup</strong>, not to modify an existing website. If you want to destroy your beautiful sandcastle, read more about <a href="./RESET-PLAYGROUND.md">resetting Playground environments.</a>

There are a couple of ways to "re-run" blueprints, but in general, they are meant to be run on a fresh WordPress environment.

There are a couple of ways to run blueprints: 
- Go to the blueprint previewer
- <a href="./wp-now.md">Use <code>wp-now</code></a> to run your blueprint locally
- Copy/paste your blueprint into the playground.net URL bar

<hr />

<h3>Functionality and limitations</h3>

Essentially, most anything you can do in WordPress or PHP can be automated via a blueprint. If you find a limitation or a feature you'd like to see, please open up an issue in the <a href="https://github.com/WordPress/playground-tools/issues">Playground Tools</a> repo.

When reporting issues please use the various issue starter templates!

Blueprints API is in <a href="https://wordpress.github.io/wordpress-playground/blueprints-api/">V1</a>, which is written in TypeScript. Work is in progress to create a new version that will be written in PHP.

<hr />

<h2>Gotchas!</h2>

Blueprints are meant to be run on a fresh WordPress environment. If you have already run a blueprint on the same environment, you will need to reset the environment before running the blueprint again.

In <code>wp-now</code>, you can reset the environment by running <code>wp-now --reset</code>

<strong>Note:</strong> This will delete all the data in the environment. Use carefully.

<hr />

<h2>Blueprint tools</h2>

<h3>Blueprint <code>schema</code></h3>

Blueprint schema is probably the most important tool for building blueprints. It defines the structure of the blueprint and the available options. The schema is used to validate the blueprint and provide a user-friendly interface for creating blueprints.

Including the <a href="./examples/blueprint-schema.json">blueprint schema</a> at the top of your blueprint will give access to code completion and validation in your code editor.

<hr />

<h3><code>wp-now</code></h3>

<code>wp-now</code> is a command-line tool that allows you to run blueprints locally. It is a great way to test your blueprints before running them in the WordPress Playground. The package serves as a standalone WordPress installation with some idiosyncracies...

Learn more about <code>wp-now</code>

<hr />

<h3>VS Code Extension</h3>

<hr />

<h2>Migrations</h2>

Migrations are a way to move a WordPress website from one server to another. This can be for demonstration purposes, testing, or to move a website from a local environment to a live server.

Please see the <a href="./migrating.md">Migrations docs</a> for more info

<h5>Migration methods</h5>

<ul>
<li>import from a  <a href="https://wordpress.github.io/wordpress-playground/blueprints-api/steps#ImportWxrStep">WXR file</a> (WordPress eXtended RSS - an XML file format)</li>
<li>import from <a href="https://github.com/WordPress/blueprints-library/issues/90">WP-CLI</a></li>
<li>migrate <a href="./wp-content/html-pages/migrate-database-and-files.md">database and files</a></li>
</ul>

<hr />

<h2>Resources</h2>

<ul>
<li><a href="https://github.com/WordPress/blueprints-library/issues/64">Blueprints onboarding documentation #64</a></li>
<li><a href="https://wordpress.github.io/wordpress-playground/blueprints-api/">Blueprints API</a></li>
</ul>

<hr />

<h2>Examples</h2>

<a href="./EXAMPLES.md">See blueprint examples</a>
<a href="./OPTIONS.md">Working with blueprint options</a>
<a href="https://wordpress.github.io/wordpress-playground/blueprint-previewer/">Blueprint Previewer</a>
<a href="#">Create a blueprint from a website</a>

<hr />

<h2>Using the filesystem</h2>

This was auto generated. Needs improvement

Playground files are found in the <code>/home/user/.wp-now</code> directory. This directory is mounted to the <code>/var/www/html</code> directory in the WordPress container. This means that you can access the files in the Playground by navigating to <code>/var/www/html</code> in the WordPress container.

<hr />

<h2>Playground Tools for Blueprints</h2>

<ul>
<li>VS Code extension - best for basic testing and plugin development</li>
<li>Data persistence between Playground instances as described <a href="">here</a></li>
</ul>

<hr />

<h2>Testing in Playground</h2>

<ul>
<li><a href="playground/testing-a-plugin.md">Testing a plugin in Playground</a>  </li>
</ul>

<hr />

<h2>Known limitations</h2>

<ul>
<li>Blueprints do not work with <code>wp-now</code> or the VS Code extension</li>
<li>Sometimes it's necessary to open a new window and copy/paste your blueprint URL into the URL bar to run it</li>
<li>GitHub caches pages and is tough to cache bust - blueprint files may not update immediately</li>
<li>Formatting and sharing blueprints can be difficult, here's a tool for that </li>
</ul>

<hr />

<h6>TODO</h6>

<h2>Features requested</h2>

Check out the <a href="./roadmap.md">roadmap</a> for more information on what's coming up next.

Everything listed in the <a href="https://github.com/WordPress/blueprints-library/issues/64">Blueprints library issue</a>

<h4>Links to add and address</h4>

<a href="https://github.com/WordPress/wordpress-playground/issues/217">Tracking: Redesign Documentation</a>

<h3>How to:</h3>

<ul>
<li>[ ] Showcase my plugin or theme (live demos on .org)</li>
<li>[ ] Control the embedded website</li>
<li>[ ] provide interactive code snippets</li>
<li>[ ] preview pull requests from my repo</li>
<li>[ ] development environment without Apache or MySQL: <code>wp-now</code> vs. <a href="./playground-tools/vs-code-extension.md">VS Code Extension</a></li>
<li>[ ] Contributing to the Playground</li>
</ul>