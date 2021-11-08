<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>


        <?php
        $p="p";
        require("mysql_functions.php");
        
				$sql="UPDATE user_med_donation SET med_validation_type= '".$p."' where med_id= '".$_REQUEST["fid"]."'";
                updateFromMySQL($sql);
				
				$sql="INSERT INTO process_med (volu_email,p_med_id) VALUES ('".$_REQUEST["active"]."','".$_REQUEST["fid"]."')";       
													loadintoMySQL($sql);
				
			?>										
					<button id="buttonone" onclick="window.location.href='adminprofile.php'"> Go to Home </button>
					<button id="buttonone" onclick="window.location.href='distributevolunteer.php'"> Go Back </button>
			
			    
		
</body>
</html>

<?php
}

else{
	header("Location:../login.html");
}
?>