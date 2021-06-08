<?php
$json = file_get_contents("http://153.127.26.73/easable-back/app/controller/show_database.php");
echo json_decode($json, true);
