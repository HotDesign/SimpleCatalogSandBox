#!/bin/bash

mkdir app/cache app/logs app/db
sudo setfacl -R -m u:www-data:rwx -m u:marian0:rwx app/cache app/logs
sudo setfacl -dR -m u:www-data:rwx -m u:marian0:rwx app/cache app/logs
