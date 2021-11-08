<?php
$data=array();
$p ="active";
require("mysql_functions.php");
$sql="UPDATE volunteer_profile SET v_status= '".$p."' where v_email= '".$_GET["email"]."' ";
                updateFromMySQL($sql);

echo $sql;


	
//print_r($data);
?>

