#!/bin/bash

rm -rf output
mkdir -p output
bunx @wp-playground/cli@latest \
    run-blueprint \
    --mount=./wp-content/plugins/wp-docs-plugin:/wordpress/wp-content/plugins/wp-docs-plugin \
    --mount=./wp-content/plugins/export-static-site:/wordpress/wp-content/plugins/export-static-site \
    --mount=./wp-content/html-pages:/wordpress/wp-content/html-pages \
    --mount=./wp-content/uploads:/wordpress/wp-content/uploads \
    --mount=./wp-content/themes/playground-docs:/wordpress/wp-content/themes/playground-docs \
    --mount=./output:/output \
    --blueprint=./blueprint-static-site.json

cd output
unzip export.zip
rm export.zip
