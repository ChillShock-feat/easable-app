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

    <div class="tab_wrap">
	<input id="tab1" type="radio" name="tab_btn" checked>プロジェクト1
	<input id="tab2" type="radio" name="tab_btn">プロジェクト2
	<input id="tab3" type="radio" name="tab_btn">プロジェクト3

	<div class="tab_area">
		<label class="tab1_label" for="tab1">tab1</label>
		<label class="tab2_label" for="tab2">tab2</label>
		<label class="tab3_label" for="tab3">tab3</label>
	</div>
	<div class="panel_area">
		<div id="panel1" class="tab_panel">
			<p>panel1</p>
		</div>
		<div id="panel2" class="tab_panel">
			<p>panel2</p>
		</div>
		<div id="panel3" class="tab_panel">
			<p>panel3</p>
		</div>
	</div>
</div>

    <form action="https://back.easable.jp/easable-back/app/controller/home_action.php" method="post">
        <label>サーバ作成</label>
        <input type="submit" name="create_server" value="作成">
        <label>機能作成</label>
        <input type="submit" name="create_function" value="作成">
    </form>
</body>
</html>