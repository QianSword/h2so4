<?php
define('IN_XSS_PLATFORM',true);

//定义绝对路径等常量
defined('SYS_PATH') || define('SYS_PATH', rtrim(str_replace('\\', '/', realpath(__DIR__ . '/../../')), '/') . '/');

//需要强制开启debug模式时请将false改为true以开启
defined('MODE_DEBUG') || define('MODE_DEBUG', false);

require SYS_PATH . "system/sql/sql_main.php";
require SYS_PATH . "system/functions/router.php";
function StartView(){
    echo "Hello,World.";
}



function ViewHead(){
    /*三大首页head标签*/
    echo '
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="公式" />
        <meta name="description" content="BBS 公式" />
        <meta name="generator" content="H2SO4 Version 0.1-alpha" />
        <meta name="author" content="H2SO4 Team" />
        <meta name="copyright" content="2019-2022 H2SO4 (C)All Rights Resevered." />
        <base href="http://127.0.0.1/" />
        <title>Math is difficult</title>
        <link rel="stylesheet" href="system/css/index.css" />
        <link rel="stylesheet" href="system/css/style.css" />
        <script src="system/js/script.js" type="text/javascript"></script>
        </head>';

}

function IndxAlert(){
    echo '<a href="important.html"><div class="indx_alert">[警告测试]关于首页警告信息的测试</div></a>';
}

function ViewFooter(){
    echo '
    <div class="footer">
        <div class="footer_inner">
        <p>©&nbsp;Copyright 2021 qiansword.com&nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved.&nbsp;&nbsp;&nbsp;&nbsp;Powered By H2SO4</p><br>
        <p><a href="https://www.beian.miit.gov.cn/">陕ICP备19011924号-1</a>
            <a>|&nbsp;&nbsp;<img src="system/images/gabeian.jpg" />陕公网安备11032803234112&nbsp;&nbsp;|&nbsp;&nbsp;增值电信业务经营许可证：陕B1.B2-19014112</a></p><br>
        <p>友情链接：&nbsp;&nbsp;待定</p>
        </div>
    </div>';
}
?>