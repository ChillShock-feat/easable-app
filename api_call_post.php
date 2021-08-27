<?php
// 文字コード設定
header('Content-Type: text/html; charset=UTF-8');
//CROS対策
header('Access-Control-Allow-Origin: *');

$url = 'https://back.easable.jp/easable-back/app/user/api.php';
$data = [];

// $apiに送るsqlデータ。
$data['select'] = "SELECT * FROM user";


// $data['update'] = "UPDATE user set name='ex1' where id = 2";

// 送信データをURLエンコード。
$data = http_build_query($data, "", "&");

// これを指定しないと動かない
$header = [
    "Content-Type: application/x-www-form-urlencoded",
    "Content-Length: " . strlen($data)
];
// 送信の準備(ストリームを作る)
$options = [
    'http' => [
        'method' => 'POST',
        'header' => implode("\r\n", $header),
        'content' => $data
    ]
];

$context = stream_context_create($options);

$data = file_get_contents($url, false, $context);

// if($data->status == "200") {
//     print json_encode($data, JSON_PRETTY_PRINT);    
// }


// if(isset($data)){
//     echo json_encode($data,JSON_PRETTY_PRINT);
// }else{
//     echo json_encode(["error"]);
// }

echo $data;
