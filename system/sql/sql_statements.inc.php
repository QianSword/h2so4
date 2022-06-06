<?php
if(!defined('IN_XSS_PLATFORM')){
	exit('Access Denied!');
}


$ddl = array('CREATE','DROP','ALTER');
$dml = array('SELECT','INSERT','UPDATE','DELETE');
$dcl = array('COMMIT','ROLLBACK','GRANT','REVOKE');

function sql_create(){
	global $ddl,$dml,$dcl;

	$table = "product";
	$inst = "id=1";
	$sql = $dml[0] . ' * FROM ' . $table . ' WHERE ' . $inst . ';';
	return $sql;
}


?>