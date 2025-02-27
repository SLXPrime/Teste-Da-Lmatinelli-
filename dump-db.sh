DUMP-FILE="./database/dump.sql"

./vendor/bin/sail exec mysql mysqldump -u root -p"password" --all-databases > ./database/dump.sql

git add "database/dump.sql"

echo "📌 Dump do banco salvo e adicionado ao commit!"