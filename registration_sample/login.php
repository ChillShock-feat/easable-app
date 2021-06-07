<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="http://10.200.2.169/easable-back/app/controller/login.php" method="post">
        <label for="email">email</label>
        <input type="email" name='email' id='email'>
        <label for="password">パスワード</label>
        <input type="password" name="password" id="password" maxlength="30">
        <input type="submit" name="submit" value="送信">
    </form>
</body>

</html>