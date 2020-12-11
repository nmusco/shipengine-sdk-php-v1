#!/bin/sh
openapi-generator generate -g php -c config.json --http-user-agent "nmusco/shipengine-sdk-php-v1" -i openapi.yaml