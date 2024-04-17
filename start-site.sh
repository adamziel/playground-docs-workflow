#!/bin/bash

cd wp-content
ps aux | grep wp-now | awk '{print $2}' | xargs kill -9
npx @wp-now/wp-now@latest start --reset --blueprint=./blueprint-wp-now.json
 
