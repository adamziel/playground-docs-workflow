## WordPress Playground for Documenters

This is an attempt to create a buildless Documentation Contributor Workflow that uses WordPress Playground to:

* Fetch the latest version of the documentation from the repository.
* Edit documentation in a browser-based editor.
* Preview the changes in real-time.
* Submit the changes as a pull request.
* Provide a live preview of the documentation PR.

[<kbd> <br>Edit the Documentation<br> </kbd>](https://playground.wordpress.net/?gh-ensure-auth=yes&ghexport-repo-url=https%3A%2F%2Fgithub.com%2Fadamziel%2Fplayground-docs-workflow&ghexport-content-type=custom-paths&ghexport-path=plugins/wp-docs-plugin&ghexport-path=html-pages&ghexport-path=uploads&ghexport-path=blueprint.json&ghexport-commit-message=Documentation+update&ghexport-playground-root=/wordpress/wp-content&ghexport-repo-root=/wp-content&blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fadamziel%2Fplayground-docs-workflow%2Ftrunk%2Fwp-content%2Fblueprint.json&ghexport-pr-action=create&ghexport-allow-include-zip=no).

It should load the doc pages from the `html-pages` directory and the media attachments from `uploads`.

## Remaining work

- [ ] Render a static documentation site to serve on GitHub pages. Currently the doc pages can be edited and previewed in Playground, but they are not rendered as a static site yet.
- [ ] Put preview links in the GitHub PRs
