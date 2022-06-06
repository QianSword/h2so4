<?php 
$groups=array("0.系统用户","1.管理员组","2.开发者组","3.超级版主","4.特邀用户","5.普通用户");

$avatar_src="../system/images/avatar/8647.png";
$u_nme="无德称老";
$cash_lv="2108/8";
$gid=5;
$gp=$groups[$gid];
$registerID=53777;

$fans=8;
$fansto=1;

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8 />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="">
        <meta http-equiv="description" content="" />
		<title>用户 - 查看详情</title>
        <link rel="stylesheet" href="../system/css/user.css" />
	</head>

	<body>
		<div class="content">
            <div class="me_indx">
            <div class="avatar">
            <img src=<?php echo json_encode($avatar_src);?> alt="头像" title="用户头像" />
            </div>
            <div>
            <ul>
                <li class="active_li">基本信息</li>
                <li>更改头像</li>
            </ul>
            </div>
            </div>
            <div class="info">
                <div class="menu">
                </div>
                <div class="msg">
                    <div class="msg_l">
                    <p>用户名：<?php echo $u_nme;?></p><br><br>
                    <p>积分/等级：<?php echo $cash_lv;?></p><br><br>
                    <p>关注人数：<?php echo $fansto;?></p><br><br>
                    <p>被关注数：<?php echo $fans;?></p><br>
                    </div>
                    <div class="msg_l">
                    <p>属组：<?php echo $gp;?></p><br><br>
                    <p>注册ID：<?php echo $registerID;?></p><br><br>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>