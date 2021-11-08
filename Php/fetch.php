<?php
$data=array();
require("mysql_functions.php");
$sql="select * from user_profile where user_email= '".$_GET["uname"]."'";

loadFromMySQL($sql);
foreach($data as $v){
	
	echo "This Email already exist. Use a different Email ID";
	
}

	
//print_r($data);
?>

