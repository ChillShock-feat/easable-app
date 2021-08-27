<?php

class DockerShell{
    public function create_shell($project_name,$server_name,$user_id){
        $server = $server_name.$user_id;

        $doker_compose_text= <<<EOT
        version: '2'

                services:
                    web{$project_name}:
                    image: nginx:latest
                    container_name: 'app{$server}'
                    environment:
                        VIRTUAL_HOST: app{$server}.chillshock.easable.jp
                        LETSENCRYPT_HOST: app{$server}.chillshock.easable.jp
                        LETSENCRYPT_EMAIL: test@easable.jp
                    restart: always
                    volumes:
                        - ./app{$server}-server:/usr/share/nginx/html
                    network_mode: bridge

                networks:
                default:
                    external:
                    name: common_link
        EOT;

        $bash_text= <<<EOT
        #!/bin/sh

        touch docker-compose.yaml

        cp docker-compose.txt docker-compose.yaml

        docker-compose up -d

        rm -rf docker-compose.txt
        rm -rf docker-compose.yaml
        rm -rf shell.sh
EOT;

        file_put_contents('shell.sh',$bash_text,LOCK_EX);
        file_put_contents('docker-compose.txt',$doker_compose_text,LOCK_EX);
    }
}