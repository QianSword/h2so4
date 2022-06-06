<?php 
require "functions/base.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>H2SO4 - 新用户注册</title>
    <base href="http://127.0.0.1/" />
    <link rel="stylesheet" href="system/css/login.css" />
    <link rel="stylesheet" href="system/fa6.1/css/all.min.css" />
    <link rel="stylesheet" href="system/css/register.css" />
    <?php if($_POST["uid"] == 'root') echo '<script>alert("禁止本类用户直接登陆系统")</script>'; ?>
    <script src="system/js/login.js"></script>
</head>

<body>
	<div class="login">
    	<div class="hd2"><?php echo '新&nbsp;用&nbsp;户&nbsp;注&nbsp;册'; ?></div>
        <div class="incont">
        <form method="post" action="system/register.php" >
            <div>
            <i class="fa fa-user"></i>
            <input type="text" name="uid" placeholder="用户名" />
            </div>
            <div>
            <i class="fa fa-key"></i>
            <input type="password" name="pwd" placeholder="密码" />
         	</div>
            <div>
            <i class="fa fa-lock"></i>
            <input type="password" placeholder="确认密码" />
            </div>
            <div>
            <i class="fa fa-link"></i>
            <input type="text" name="invitation" placeholder="注册邀请码" />
            </div>
            <div>
            <input type="checkbox" name="confirm" />
            <span>注册即表示您同意<a href="#">服务协议</a></span>
            </div>
            <input type="submit" class="button" value="注册" />
        </form>
        </div>
    </div>
    <div id="particles-js">
        <canvas class="particles-js-canvas-el"></canvas>
    </div>
    <script src="system/js/loginbg.js"></script>
</body>
</html>