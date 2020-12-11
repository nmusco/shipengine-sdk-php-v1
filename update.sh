#!/bin/sh
rm -f openapi.yaml
wget https://github.com/ShipEngine/shipengine-openapi/raw/master/openapi.yaml
./build.sh
