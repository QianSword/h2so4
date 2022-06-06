<?php 
if(!defined('IN_XSS_PLATFORM')){
	exit('Access Denied!');
}

require SYS_PATH . 'system/sql/sql_main.php';

function CheckPower($act){
    /*判断管理员是否有操作权限*/

    /*判断身份*/
    $atok = $_COOKIE['usrTok'];
    if($atok == "root" || $atok == "admin"){
        return true;
    }

}

?>