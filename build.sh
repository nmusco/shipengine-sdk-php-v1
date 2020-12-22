#!/bin/sh
perl -i -p0e 's/        default_value:\n          type: string\n          minLength: 1/        default_value:\n          type: string\n          nullable: true/igs' "openapi.yaml"
perl -i -p0e 's/          minLength: 1\n          nullable: true/          nullable: true/igs' "openapi.yaml"
sed "-i" "" "-e" 's/    rate estimate:/    rate_estimate:/g' "openapi.yaml"
openapi-generator generate -g php -c config.yaml --http-user-agent "nmusco/shipengine-sdk-php-v1" -i openapi.yaml
sed "-i" "" "-e" 's/\\\\Nmusco\\ShipEngine\\v1\\Models\\\\/\\\\Nmusco\\\\ShipEngine\\\\v1\\\\Models\\\\/g' "lib/ObjectSerializer.php"
sed "-i" "" "-e" 's/\\\\Nmusco\\ShipEngine\\v1\\\\/\\\\Nmusco\\\\ShipEngine\\\\v1\\\\/g' "lib/ObjectSerializer.php"
./git_push.sh