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
    <h1>機能デモ</h1>
    <h2>名前、パスワードを登録する</h2>
    <form action="https://back.easable.jp/easable-back/app/controller/.php" method="post">
        <label>名前</label>
        <input type="text" name="name" id="name">
        <label>パスワード</label>
        <input type="password" name="password" id="password">
    </form>
</body>
</html>