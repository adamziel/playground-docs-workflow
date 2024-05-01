## WordPress Playground for Documenters

This is an attempt to create a buildless Documentation Contributor Workflow that uses WordPress Playground to:

* Fetch the latest version of the documentation from the repository.
* Edit documentation in a browser-based editor.
* Preview the changes in real-time.
* Submit the changes as a pull request.
* Provide a live preview of the documentation PR.

[<kbd> <br>Browse the Documentation<br> </kbd>](https://adamziel.github.io/playground-docs-workflow/).

## How to edit the documentation?

### In WordPress Playground

Click here to try it:

[<kbd> <br>Edit the Documentation<br> </kbd>](https://playground.wordpress.net/?gh-ensure-auth=yes&ghexport-repo-url=https%3A%2F%2Fgithub.com%2Fadamziel%2Fplayground-docs-workflow&ghexport-content-type=custom-paths&ghexport-path=plugins/wp-docs-plugin&ghexport-path=plugins/export-static-site&ghexport-path=themes/playground-docs&ghexport-path=html-pages&ghexport-path=uploads&ghexport-commit-message=Documentation+update&ghexport-playground-root=/wordpress/wp-content&ghexport-repo-root=/wp-content&blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fadamziel%2Fplayground-docs-workflow%2Ftrunk%2Fblueprint-browser.json&ghexport-pr-action=create&ghexport-allow-include-zip=no).

It should load the doc pages from the `html-pages` directory and the media attachments from `uploads`. This video demonstrates it:

https://github.com/adamziel/playground-docs-workflow/assets/205419/5d06d8b8-cd9f-4cec-a8c6-e73d66e82159

### Locally

To start a local server with the documentation site, run:
    
```bash
bash start-server.sh
```

You'll need node.js and npm installed.

Once you're done editing the documentation, commit your changes as follows:

```bash
git add wp-content
git commit -a
```

And then submit a Pull Request to the repository.

## How to edit the site theme?

Adjust the site as needed in the site editor and then use the preinstalled [create-block-theme](https://github.com/WordPress/create-block-theme/) plugin to [save the theme updates](https://github.com/WordPress/create-block-theme/?tab=readme-ov-file#how-to-use-the-plugin) and propose them as a PR.

## Remaining work

- [ ] Put preview links in the GitHub PRs
