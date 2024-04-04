#!/bin/bash

rm -rf wp-content/themes/twentytwentyfour
cd wp-content
timeout 20s npx @wp-now/wp-now@latest start --blueprint=./blueprint.json
cd ..
