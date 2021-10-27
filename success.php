<?php
session_start();
require_once 'getbackdata.php';
$back_handle = new GetBackData();
$sql['select'] = 'SELECT url FROM server where project_id = ' . $_GET['project_id'] . ' ORDER BY created_at DESC LIMIT 1';
$data = $back_handle->getData($sql);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type='text'] {
            width: 500px;
        }
    </style>
</head>

<body>
    <h1>新しいプロジェクトが作成されました。</h1>
    <input type="text" value="<?php echo $data[0]['url']; ?>" disabled />
    <p>
        <a href="index.php">ホームに戻る</a>
    </p>
</body>

</html>