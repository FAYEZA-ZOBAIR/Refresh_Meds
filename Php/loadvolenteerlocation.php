<?php
$data=array();
$p ="active";
require("mysql_functions.php");
$sql="select * from volunteer_profile where v_email= '".$_REQUEST["vid"]."' ";
                
loadFromMySQL($sql);
	foreach($data as $v){
		$c=(int)$v["v_location"];
		$data2=array();
		$sql="select tha_name from thana where tha_id= '".$c."' ";
        loadFroLocation($sql);
		foreach($data2 as $u)
		{
		
		   echo $u["tha_name"]; 
		  
          
          	
		   
		}
	}
	
//print_r($data);
?>

