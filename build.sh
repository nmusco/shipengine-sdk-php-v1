#!/bin/sh
openapi-generator generate -g php -c config.yaml --http-user-agent "nmusco/shipengine-sdk-php-v1" -i openapi.yaml
for file in lib/Models/*.php
do
	sed "-i" "" "-e" 's/\\Nmusco\\ShipEngine\\v1\\Models\\\\Nmusco\\ShipEngine\\v1\\Models\\/\\Nmusco\\ShipEngine\\v1\\Models\\/g' "$file"
	sed "-i" "" "-e" 's/\\Nmusco\\ShipEngine\\v1\\Models\\\\DateTime/\\DateTime/g' "$file"
done
