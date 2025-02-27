DUMP-FILE="database/dump.sql"

./vendor/bin/sail exec mysql mysqldump -u root -p"password" --all-databases > backup.sql