#!/bin/bash

docker run \
  -v $(pwd):/data \
  -w /data \
  --rm \
  -i -t composer \
  composer install --prefer-dist
