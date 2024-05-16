#!/bin/bash

docker run \
  -v $(pwd):/data \
  -w /data \
  --rm \
  -i -t php:8.3-cli \
   ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests
