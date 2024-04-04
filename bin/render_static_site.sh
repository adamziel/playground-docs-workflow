#!/bin/bash

cd wp-content
npx @wp-now/wp-now@latest start --blueprint=./blueprint.json

cd ..
npx diy-pwa build
