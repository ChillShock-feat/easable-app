<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
    <div class="signin">
        <h1 class="signin__title">ログイン</h1>
        <p class="signin__subtitle">Sign in</p>
        <form action="https://back.easable.jp/easable-back/app/controller/signin.php" method="post" class="signin__form">
            <label class="signin__form__title">メールアドレス</label><br>
            <input type="email" name="email" id="email" class="signin__form__textarea"><br>
            <label class="signin__form__title">パスワード</label><br>
            <input type="password" name="password" id="password" class="signin__form__textarea"><br>
            <a href="#" class="signin__form__forget">パスワードをお忘れですか？</a>
            <input type="submit" name="submit" value="ログイン" class="signin__form__submit">
        </form>
    </div>
</body>
</html>