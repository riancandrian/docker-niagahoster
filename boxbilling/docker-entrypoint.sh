#!/bin/bash
set -e

# import db
# php import_db.php

echo 'status' | timeout 2s mysql -h localhost -P 3306 -u root -proot boxbilling || echo "Give up! I cant access MySQL server!"

exec "$@"