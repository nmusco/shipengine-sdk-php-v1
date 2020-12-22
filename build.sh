#!/bin/sh
openapi-generator generate -g php -c config.yaml --http-user-agent "nmusco/shipengine-sdk-php-v1" -i openapi.yaml
sed "-i" "" "-e" 's/\\\\Nmusco\\ShipEngine\\v1\\Models\\\\/\\\\Nmusco\\\\ShipEngine\\\\v1\\\\Models\\\\/g' "lib/ObjectSerializer.php"
sed "-i" "" "-e" 's/\\\\Nmusco\\ShipEngine\\v1\\\\/\\\\Nmusco\\\\ShipEngine\\\\v1\\\\/g' "lib/ObjectSerializer.php"
# for file in lib/Models/*.php
# do
# 	sed "-i" "" "-e" 's/\\Nmusco\\ShipEngine\\v1\\Models\\\\Nmusco\\ShipEngine\\v1\\Models\\/\\Nmusco\\ShipEngine\\v1\\Models\\/g' "$file"
# 	sed "-i" "" "-e" 's/\\Nmusco\\ShipEngine\\v1\\Models\\\\DateTime/\\DateTime/g' "$file"
# done

# for file in lib/Api/*.php
# do
# 	sed "-i" "" "-e" 's/\\Nmusco\\ShipEngine\\v1\\Models\\\\Nmusco\\ShipEngine\\v1\\Models\\/\\Nmusco\\ShipEngine\\v1\\Models\\/g' "$file"
# 	sed "-i" "" "-e" 's/\\Nmusco\\ShipEngine\\v1\\Models\\\\DateTime/\\DateTime/g' "$file"
# done
./git_push.sh