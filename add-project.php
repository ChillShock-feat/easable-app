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
    <title>easable - プロジェクト追加</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/add-project.css">

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
                                    <p><?php echo $server_value['server_name']; ?></p>
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
            <section class="nav__project">
                <div class="nav__project__box nav-toggle">
                    <svg class="nav__project__box__img rotate-triangle" width="14" height="6" viewBox="0 0 14 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.00219 5.82497L1.07318 0.425033L13.1937 0.728192L7.00219 5.82497Z" fill="#ffffff" />
                    </svg>
                    <p>プロジェクト1</p>
                </div>
                <form action="add_server.php" method='GET'>
                    <div class="nav__project__serverlist show-list">
                        <div class="nav__project__serverlist__server">
                            <span></span>
                            <p>サーバー1</p>
                        </div>
                        <div class="nav__project__serverlist__server">
                            <span></span>
                            <p>サーバー2</p>
                        </div>
                        <div class="nav__project__serverlist__server">
                            <span></span>
                            <p>サーバー3</p>
                        </div>
                        <div class="nav__project__serverlist__newserver">
                            <button>
                                <span><img src="img/plus.svg" alt="プラスアイコン"></span>
                                &nbsp;新規サーバー作成
                            </button>
                        </div>
                        <input name='project_id' value='1' hidden />
                </form>
            </section>
            <section class="nav__project">
                <div class="nav__project__box nav-toggle">
                    <svg class="nav__project__box__img rotate-triangle" width="14" height="6" viewBox="0 0 14 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.00219 5.82497L1.07318 0.425033L13.1937 0.728192L7.00219 5.82497Z" fill="#ffffff" />
                    </svg>
                    <p>プロジェクト2</p>
                </div>
                <form action="add_server.php" method='GET'>
                    <div class="nav__project__serverlist show-list">
                        <div class="nav__project__serverlist__server">
                            <span></span>
                            <p>サーバー1</p>
                        </div>
                        <div class="nav__project__serverlist__server">
                            <span></span>
                            <p>サーバー2</p>
                        </div>
                        <div class="nav__project__serverlist__server">
                            <span></span>
                            <p>サーバー3</p>
                        </div>
                        <div class="nav__project__serverlist__newserver">
                            <button>
                                <span><img src="img/plus.svg" alt="プラスアイコン"></span>
                                &nbsp;新規サーバー作成
                            </button>
                        </div>
                        <input name='project_id' value='2' hidden />
                </form>
            </section>
            <section class="nav__project">
                <div class="nav__project__box nav-toggle">
                    <svg class="nav__project__box__img rotate-triangle" width="14" height="6" viewBox="0 0 14 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.00219 5.82497L1.07318 0.425033L13.1937 0.728192L7.00219 5.82497Z" fill="#ffffff" />
                    </svg>
                    <p>プロジェクト3</p>
                </div>
                <form action="add_server.php" method='GET'>
                    <div class="nav__project__serverlist show-list">
                        <div class="nav__project__serverlist__server">
                            <span></span>
                            <p>サーバー1</p>
                        </div>
                        <div class="nav__project__serverlist__server">
                            <span></span>
                            <p>サーバー2</p>
                        </div>
                        <div class="nav__project__serverlist__server">
                            <span></span>
                            <p>サーバー3</p>
                        </div>
                        <div class="nav__project__serverlist__newserver">
                            <button>
                                <span><img src="img/plus.svg" alt="プラスアイコン"></span>
                                &nbsp;新規サーバー作成
                            </button>
                        </div>
                        <input name='project_id' value='3' hidden />
                </form>
            </section>
        </nav>
        <main class="newproject">
            <div class="newproject__box">
                <div class="newproject__box__cross">
                    <img src="img/cross.svg" alt="罰印アイコン">
                </div>
                <div class="newproject__box__circle"></div>
                <h1>新規プロジェクトをつくる</h1>
                <p class="newproject__box__word">新規プロジェクトに使用する名前を登録して下さい</p>
                <form action="https://back.easable.jp/easable-back/app/controller/create_project.php" method="post" class="newproject__box__projectdata">
                    <div class="newproject__box__projectdata__name">
                        <label>プロジェクト名</label>
                        <input type="text" name="project_name" size="100" id="projectname-1">
                    </div>
                    <div class="newproject__box__projectdata__name" id="addserver-parent">
                        <label>サーバー名</label>
                        <input type="text" name="server_name" id="servername-1">
                    </div>
                    <!-- <div class="newproject__box__projectdata__addserver" id="addserver">＋ サーバーを追加する</div> -->
                    <input type="submit" name="submit" value="プロジェクト作成" class="newproject__box__projectdata__submit">
                </form>
            </div>
        </main>
    </div>
    <script src="js/nav.js"></script>
    <!-- <script src="js/add-project.js"></script> -->
</body>

</html>