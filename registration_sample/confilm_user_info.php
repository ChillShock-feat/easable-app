<?php
 $name = $_POST['name'];
 $password = $_POST['password'];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        li{
            list-style: none;
        }
    </style>
</head>

<body>
    <?php
    if($_POST['submit']){
    ?>
    <form action="http://10.200.2.169/easable-back/app/controller/regist_user.php" method="post">
        <ul>
            <li>
                <div class="">名前</div>
                <div class=""><?php echo $_POST['name'] ?></div>
                <input type="hidden" name="name" value="<?php echo $name ?>" />
            </li>
            <li>
                <div class="">パスワード</div>
                <div class=""><?php echo $_POST['password'] ?></div>
                <input type="hidden" name="password" value="<?php echo $password ?>" />
            </li>
            <li>
                <input type="hidden" name="urltoken" value="<?= $_POST['urltoken'] ?>" />
            </li>
            <li>
            <input type="submit" name="submit" value="送信" />
            </li>
        </ul>
    </form>
    <?php
    }
    ?>
</body>
</html>