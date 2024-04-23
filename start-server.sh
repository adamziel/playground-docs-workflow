#!/bin/bash

bun --config=/Users/cloudnik/.bunfig.toml /Users/cloudnik/www/Automattic/core/plugins/playground/packages/playground/cli/src/cli.ts start --mount=./wp-content/plugins/wp-docs-plugin:/wordpress/wp-content/plugins/wp-docs-plugin --mount=./wp-content/html-pages:/wordpress/wp-content/html-pages --mount=./wp-content/uploads:/wordpress/wp-content/uploads --mount=./wp-content/themes/playground-docs:/wordpress/wp-content/themes/playground-docs --blueprint=./wp-content/blueprint-wp-now.json --wp=6.5

