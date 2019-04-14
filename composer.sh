#!/bin/sh
# author Jarosław Brzychcy <jaroslaw.brzychcy@enp.pl>

docker run --rm --network host --user $(id -u):$(id -g) -it -v $(pwd):/app composer:latest "$@"
