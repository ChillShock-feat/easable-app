<?php
session_start();
require_once 'getbackdata.php';
$back_handle = new GetBackData();
$sql['select'] = 'SELECT * FROM project where user_id = ' . $_SESSION['user']['id'];
$data = $back_handle->getData($sql);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>easable - home</title>
</head>

<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav__title">
                <p>プロジェクトリスト</p>
                <a href="#">編集</a>
            </div>
            <?php
            foreach ($data as $value) {
            ?>
                <section class="nav__project">
                    <div class="nav__project__box nav-toggle">
                        <svg class="nav__project__box__img rotate-triangle" width="14" height="6" viewBox="0 0 14 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.00219 5.82497L1.07318 0.425033L13.1937 0.728192L7.00219 5.82497Z" fill="#ffffff" />
                        </svg>
                        <p><?php echo $value['project_name']; ?></p>
                    </div>
                    <form action="add_server.php" method='GET'>
                        <div class="nav__project__serverlist show-list">
                            <?php
                            $sql['select'] = "SELECT * FROM server WHERE project_id = " . $value['id'];
                            $server = $back_handle->getData($sql);
                            foreach ($server as $server_value) {
                            ?>
                                <div class="nav__project__serverlist__server">
                                    <span></span>
                                    <p class="server_link_container">
                                        <a href="<?php echo $server_value['url'];?>" class="server_link" target="_blank" rel="noopener noreferrer">
                                            <?php echo $server_value['server_name']; ?><img src="img/link.svg" alt="リンク">
                                        </a>
                                    </p>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="nav__project__serverlist__newserver">
                                <button>
                                    <span><img src="img/plus.svg" alt="プラスアイコン"></span>
                                    &nbsp;新規サーバー作成
                                </button>
                            </div>
                            <input name='project_id' value='<?php echo $value['id']; ?>' hidden />
                    </form>
                </section>
            <?php
            }
            ?>
        </nav>
        <main class="database">
            <section class="database__navarea">
                <section class="database__navarea__nav">
                    <div class="database__navarea__nav__link change-content">データベース</div>
                    <div class="database__navarea__nav__link change-content">ファイルアップロード</div>
                    <div class="database__navarea__nav__link change-content">サーバー詳細</div>
                </section>
                <section class="database__navarea__subnav">
                    <a href="#" class="database__navarea__subnav__link">設計</a>
                    <a href="#" class="database__navarea__subnav__link">使い方</a>
                </section>
            </section>
            <div class="database__border-x"></div>
            <section class="database__content show-content">
                <h1>データベースA</h1>
                <p class="database__content__servername">サーバー1</p>
                <div class="database__content__tablewrap">
                    <a href="#" class="database__content__tablewrap__tablelist">
                        <img src="img/tablelist-big.svg" alt="テーブルリストアイコン">
                        <p class="database__content__tablewrap__tablelist__name">テーブルリスト</p>
                    </a>
                    <div class="database__content__tablewrap__background">
                        <a href="#" class="database__content__tablewrap__background__tablelist-small">
                            <img src="img/tablelist-small.svg" alt="テーブル追加アイコン">
                            <p class="database__content__tablewrap__background__tablelist-small__name">テーブル追加</p>
                        </a>
                    </div>
                    <div class="database__content__tablewrap__background">
                        <a href="#" class="database__content__tablewrap__background__tablelist-small">
                            <img src="img/tablelist-small.svg" alt="データベース編集アイコン">
                            <p class="database__content__tablewrap__background__tablelist-small__name">データベース編集</p>
                        </a>
                    </div>
                </div>
            </section>
            <section class="database__content show-content">
                <h1>ファイルアップロード</h1>
                <form action="https://back.easable.jp/easable-back/app/controller/file_upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="file" accept="*">
                    <input type="submit" class='file_upload_button' value="ファイルアップロード">
                </form>
            </section>
            <section class="database__content show-content">
                <h1>サーバー詳細</h1>
            </section>
        </main>
    </div>
    <script src="js/nav.js"></script>
    <script src="js/index.js"></script>
</body>

</html>