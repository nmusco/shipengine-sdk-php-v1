#!/bin/sh
sed "-i" "" "-e" 's/    rate estimate:/    rate_estimate:/g' "openapi.yaml"
openapi-generator generate -g php -c config.yaml --http-user-agent "nmusco/shipengine-sdk-php-v1" -i openapi.yaml
sed "-i" "" "-e" 's/\\\\Nmusco\\ShipEngine\\v1\\Models\\\\/\\\\Nmusco\\\\ShipEngine\\\\v1\\\\Models\\\\/g' "lib/ObjectSerializer.php"
sed "-i" "" "-e" 's/\\\\Nmusco\\ShipEngine\\v1\\\\/\\\\Nmusco\\\\ShipEngine\\\\v1\\\\/g' "lib/ObjectSerializer.php"
./git_push.sh