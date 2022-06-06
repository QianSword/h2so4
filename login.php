<?php 
require "system/functions/base.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>登录 - 欢迎您</title>
    <link rel="stylesheet" href="system/css/login.css" />
    <link rel="stylesheet" href="system/fa6.1/css/all.min.css" />
    <?php if($_POST["uid"] == 'root') echo '<script>alert("禁止本类用户直接登陆系统")</script>'; ?>
    <script src="system/js/login.js"></script>
</head>

<body>
	<div class="login">
    	<div class="hd2"><?php echo '用&nbsp;户&nbsp;登&nbsp;陆' ?></div>
        <div class="incont">
        <form method="post" action="login.php" >
            <div>
            <i class="fa fa-user"></i>
            <input type="text" name="uid" placeholder="用户名"/>
            </div>
            <div>
            <i class="fa fa-lock"></i>
            <input type="password" name="pwd" placeholder="密码"/>
         	</div>
            <input type="submit" class="button" value="登录" />
            <div class="note" id="forgot" onclick="alert('\u795e\u4ed9\u96be\u6551\uff01');">
                <a href="#">忘记密码?</a>
            </div>
            <div class="note">
                <a href="system/register.php">注册</a>
            </div>
        </form>
        </div>
    </div>
    <div id="particles-js">
        <canvas class="particles-js-canvas-el"></canvas>
    </div>
    <script src="system/js/loginbg.js"></script>
</body>
</html>