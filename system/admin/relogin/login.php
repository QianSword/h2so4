<?php
define("IN_XSS_PLATFORM", true);

require_once("functions.php");

//设置httponly
ini_set("session.cookie_httponly", 1);
session_start();


//判断是否登陆
if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] === true) {
    header("Location: admin.php");
    exit();
}


/*
生成密码

php -r '$salt="!KTMdg#^^I6Z!deIVR#SgpAI6qTN7oVl";$key="你的密码";$key=md5($salt.$key.$salt);$key=md5($salt.$key.$salt);$key=md5($salt.$key.$salt);echo $key;'

*/
function checkPassword($p) {
    if (isset($_POST['firesunCheck']) && isset($_SESSION['firesunCheck']) && $_SESSION['firesunCheck'] != "" && $_POST['firesunCheck'] === $_SESSION['firesunCheck']) {
        //改了这个盐记得改login.js里的，两个要一致
        $salt = "!KTMdg#^^I6Z!deIVR#SgpAI6qTN7oVl";
        $key  = PASS;
        $key  = md5($salt . $key . $_SESSION['firesunCheck'] . $salt);
        $key  = md5($salt . $key . $_SESSION['firesunCheck'] . $salt);
        $key  = md5($salt . $key . $_SESSION['firesunCheck'] . $salt);
        return $key === $p;
    }
    return false;
}

//生成挑战应答的随机值
function generate_password($length = 32) {
    $chars    = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = "";
    for ($i = 0; $i < $length; $i++)
        $password .= $chars[mt_rand(0, strlen($chars) - 1)];
    return $password;
}
?>

<html>
    <head>
        <meta charset="utf-8" />
		<title>控制台 - 操作确认</title>
		<link rel="stylesheet" href='static/css/font-awesome.min.css' type="text/css" >
		<link rel="stylesheet" href="static/css/login.css" type="text/css" />
		
        <script type="text/javascript" src="static/js/jquery.min.js" ></script>
        <script type="text/javascript" src="static/js/login.min.js" ></script>
		<?php
if ($is_pass_wrong)
    echo '<script type="text/javascript" src="static/js/pass_is_wrong.js" ></script>';
?>
    </head>
    
    <body>
        <div id="loginform">
			
            <div id="mainlogin">
                <h1>控制台 - 操作确认</h1>
                <form action="" method="post">
                    <input type="password" placeholder="password" id="password" name="password" required="required">
					<input id="firesunCheck" type="hidden" name="firesunCheck" value=<?php
$firesunCheck             = generate_password(32);
$_SESSION['firesunCheck'] = $firesunCheck;
echo json_encode($_SESSION['firesunCheck']);
?> />
                    
					<button type="submit" id="submit" disabled="disabled">
                        <i class="fa fa-arrow-right">
                        </i>
                    </button>
					
                </form>
                <div id="note">
                    <a href="#">
                        忘记密码?
                    </a>
                </div>
            </div>
        </div>
    </body>

</html>