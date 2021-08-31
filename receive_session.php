<?php
//セッションはバック側だけでしか登録できていないので一度ここを通ってフロント側にセッションを登録させる
session_start();
$_SESSION['user']['name'] = $_GET['name'];
$_SESSION['user']['email'] = $_GET['email'];
$_SESSION['user']['id'] = $_GET['id'];

header('Location:./index.php');