#!/bin/sh
# author Jarosław Brzychcy <info@skrypnet.pl>

docker run --rm --network host --user $(id -u):$(id -g) -v $(pwd):/app -e "PHPUNIT_RESULT_CACHE=app/.phpunit.result.cache" \
-t php:7.2-alpine3.8 app/vendor/bin/phpunit -c app/phpunit.xml --testsuite Unit "$@"
