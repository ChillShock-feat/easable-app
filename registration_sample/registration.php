<?php
if (empty($_GET['urltoken'])) {
    $error;
} else {
    //TODO:SQLインジェクション攻撃対策をする
    //code
    $json = file_get_contents("http://153.127.26.73/easable-back/app/controller/signup.php?urltoken={$_GET['urltoken']}");
    $result = json_decode($json, true)['result'];
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        fieldset {
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <?php
    if ($result === 'OK') {
    ?>
        <form action="http://153.127.26.73/easable-back/app/controller/regist_user.php" method="post">
            <label>名前</label>
            <input type="text" name="name" id="name">
            <!-- <fieldset>
            <label>生年月日</label>
            <input type="number" name="year" id="year" size="8" maxlength="4">
            年
            <input type="number" name="month" id="month" size="4" maxlength="2">
            月
            <input type="number" name="day" id="day" size="4" maxlength="2">
            日
        </fieldset> -->
            <label>パスワード</label>
            <input type="password" name="password" id="password" maxlength="30">
            <input type="submit" name="submit" value="送信">
            <input type="hidden" name="urltoken" value="<?= $_GET['urltoken'] ?>">
        </form>
    <?php
    }
    ?>
</body>

</html>