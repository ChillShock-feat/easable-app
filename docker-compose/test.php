<?php
require_once 'docker_shell.php';

$dockerHandle = new DockerShell();

$server_name = $_POST['sever_name'];
$user_id = $_POST['user_name'];
$project_name = $_POST['project_name'];

// $dockerHandle->create_shell($project_name,$server_name,$user_id);
$dockerHandle->create_shell('1','2','3');

sleep(2);

exec('sh shell.sh');

echo(['status'=>'200']);