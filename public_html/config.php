<?php

ob_start();

$dbcon = mysqli_connect('localhost', 'jamesvit_admin', '29hmtwubc08') or die('Server Connection Error');
mysqli_select_db($dbcon, 'jamesvitalywebblog');

if($dbcon->connect_errno){
	die('Connect Error: '. $dbcon-connect_errno);
}







?>