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
    <h1>ログイン</h1>
    <form action="https://back.easable.jp/easable-back/app/controller/login.php" method="post">
        <label>メールアドレス</label>
        <input type="text" name="email" id="email">
        <label>パスワード</label>
        <input type="password" name="password" id="password" maxlength="30">
        <input type="submit" name="submit" value="ログイン">
    </form>
</body>
</html>