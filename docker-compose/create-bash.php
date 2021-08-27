<?php
$bash_name = 'shell.sh';

$doker_compose_text = <<<EOT
version: '2'

services:
    web1:
      image: nginx:latest
      container_name: 'app1'
      environment:
        VIRTUAL_HOST: app1.chillshock.easable.jp
        LETSENCRYPT_HOST: app1.chillshock.easable.jp
        LETSENCRYPT_EMAIL: test@easable.jp
      restart: always
      volumes:
        - ./app1-server:/usr/share/nginx/html
      network_mode: bridge

networks:
  default:
    external:
      name: common_link
EOT;

$bash_text = <<<EOT
#!/bin/sh

touch docker-compose.yaml

cp docker-compose.txt docker-compose.yaml

docker-compose up -d

rm -rf docker-compose.txt
rm -rf docker-compose.yaml
rm -rf shell.sh

EOT;

file_put_contents($bash_name, $bash_text, LOCK_EX);
file_put_contents('docker-compose.txt', $doker_compose_text, LOCK_EX);

sleep(2);

exec('sh shell.sh');

//1.フォルダの権限を777にする
//2.sudoなしでdockerを使えるようにするためにグループにapacheユーザを追加 https://t-salad.com/docker-sudo/
//3.shellでsudoを無しで使えるようにする https://tom-rc.hatenablog.com/entry/2015/03/17/213545