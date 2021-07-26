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
    <h1>ホーム</h1>
    <!-- <form action="https://back.easable.jp/easable-back/app/controller/login.php">
        <label>サーバ作成</label>
        <input type="submit" name="create_server" value="作成">
    </form>
    <form action="https://back.easable.jp/easable-back/app/controller/login.php">
        <label>機能作成</label>
        <input type="submit" name="create_function" value="作成">
    </form> -->

    <form action="https://back.easable.jp/easable-back/app/controller/home_action.php" method="post">
        <label>サーバ作成</label>
        <input type="submit" name="create_server" value="作成">
        <label>機能作成</label>
        <input type="submit" name="create_function" value="作成">
    </form>
</body>
</html>