<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="https://back.easable.jp/easable-back/app/user/user_controller.php" method="post">
        <label>table1</label>
        <input type="radio" name="table_name" value="table1"/>
        <label>table2</label>
        <input type="radio" name="table_name" value="table2"/>
        <label>table3</label>
        <input type="radio" name="table_name" value="table3"/><br/>
        <label>名前 : </label>
        <input type="checkbox" name="name" /><br/>
        <label>年齢 : </label>
        <input type="checkbox" name="old" /><br/>
        <label>パスワード : </label>
        <input type="checkbox" name="password" /><br/>
        <input type="submit" name="insert" value="追加"/>
        <input type="submit" name="delete" value="削除"/>
        <input type="submit" name="update" value="更新"/>
        <input type="submit" name="select" value="選択"/>

        <!-- <br/><label>条件</label>
        <label>名前</label>
        <input type="radio" name="judge" value="名前"/>
        <label>年齢</label>
        <input type="radio" name="judge" value="年齢"/> -->
    </form>
</body>
</html>