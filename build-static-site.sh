#!/bin/bash

mkdir -p output
bun \
    --config=/Users/cloudnik/.bunfig.toml \
    ../playground/packages/playground/cli/src/cli.ts \
    run-blueprint \
    --mount=./wp-content/plugins/wp-docs-plugin:/wordpress/wp-content/plugins/wp-docs-plugin \
    --mount=./wp-content/plugins/export-static-site:/wordpress/wp-content/plugins/export-static-site \
    --mount=./wp-content/html-pages:/wordpress/wp-content/html-pages \
    --mount=./wp-content/uploads:/wordpress/wp-content/uploads \
    --mount=./wp-content/themes/playground-docs:/wordpress/wp-content/themes/playground-docs \
    --mount=./output:/output \
    --blueprint=./wp-content/blueprint-static-site.json \
    --wp=6.5 \
    --php=8.0 \
