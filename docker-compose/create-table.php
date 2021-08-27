<?php

$database_name = '';

$create_table_sql = '';

// docker run -d --name mysql --platform linux/x86_64 -e MYSQL_ROOT_PASSWORD=password -p 3306:3306 mysql:5.7

$create_db = <<<EOT
#!/bin/sh
docker exec -it {mysqlのコンテナのID OR 名前} mysql -u root -p{パスワードを書く} -e"create database {$database_name}"
docker exec -it {mysqlのコンテナのID OR 名前} mysql -u root -p{パスワードを書く}　{database_name} -e"create database easable"
EOT;


file_put_contents('create_data.sh',$create_db,LOCK_EX);
file_put_contents('create_database.sql',$create_table_sql);

sleep(2);

exec('sh create_data.sh');