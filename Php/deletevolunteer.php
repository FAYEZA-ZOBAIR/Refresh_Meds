<?php
$data=array();
$p ="active";
require("mysql_functions.php");
$sql="DELETE FROM volunteer_profile where v_email= '".$_GET["email"]."' ";
                updateFromMySQL($sql);
echo $sql;


	
?>

