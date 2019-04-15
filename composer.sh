#!/bin/sh
# author Jarosław Brzychcy <info@skrypnet.pl>

docker run --rm --network host --user $(id -u):$(id -g) -it -v $(pwd):/app composer:latest "$@"
