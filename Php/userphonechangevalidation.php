

<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	?>
<!DOCTYPE html>
<html>
<head>
       <title>Warning</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

<style>
.hometxt{
    width: 100%;
    margin-top: 185px;
    text-transform: uppercase;
    text-align: center;
    color: white;
}
.hometxt h2 {
    font-size: 30px;
    font-family: 'Open Sans', sans-serif;
}
</style>		  
</head>
<body>


        <?php
        $data=array();
         //$_REQUEST["pass"]
		$pass=md5($_REQUEST["pass"]);
		$type="user";
        $type="user";
        require("mysql_functions.php");
        $sql="select * from user_profile where user_email= '".$_SESSION["name"]."' ";
        loadFromMySQL($sql);
		
		foreach($data as $v){
		    if($v["user_pass"]==$pass && $v["user_type"]==$type)
        	{
				$sql="UPDATE user_profile SET user_phone= '".$_REQUEST["phone"]."' where user_email= '".$_SESSION["name"]."'";
                updateFromMySQL($sql);
				header('Location:usersettings.php');
			}
            else{
				?>
				<div class="bgimage">
					<br>
					<br>
					<br><br>
					<div class="hometxt">								
					<h2> Wrong Password Try Again  </h2>
					
					<button id="buttonone" onclick="window.location.href='usersettings.php'"> Go to Settings </button>
					<button id="buttonone" onclick="window.location.href='userphonechange.php'"> Go Back </button>
			
			        </div>
													
				</div>
				
				<?php
				//header('Location:userphonechange.php');
            }				
	    }
        ?>
		

</body>
</html>
<?php
}

else{
	header("Location:../login.html");
}
?>

