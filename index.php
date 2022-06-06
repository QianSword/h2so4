<?php 
require "system/functions/base.php";
?>

<!doctype html>
<html>
<?php ViewHead();?>

<body>
    <div class="header">
        <!---->
        <div style="padding-top:5px;">
            <div class="icon">
                <a href="http://www.qiansword.com"><img src="system/images/icon.png" alt="QianSword" /></a>
            </div>
            <div class="menu">
                <ul>
                    <li class="active">首页</li>
                    <li><a href="section">版块</a></li>
                    <li><a href="world">世界</a></li>
                </ul>
            </div>
            <div class="indx_usr">
                <a href="login.php">登陆</a>
            </div>
        </div>
    </div>
    <div class="indx_main">
        <?php IndxAlert(); ?>
        <div class="cont_idx">
<!--        <table>
            <tbody>
                <tr>
                    <td>888</td>
                    <td>99999</td>
                </tr>
            </tbody>
        </table>-->
        </div>
    </div>
    <?php ViewFooter();?>
</body>

</html>