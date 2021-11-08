<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	?>
<!DOCTYPE html>
<html>
<head>
<title>Show Donated Medicine</title>
<link rel="stylesheet" type="text/css" href="../css/userprofilestyle.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
    <style>
	.bgimage{
	background:rgba(0, 0, 0, 0.3) url('../bbb.jpg');
	}
</style>
</head>
<body>

<div class="bgimage">

    <div class="menu">
      
      <div class="leftmenu">
        <h4> Refresh Meds </h4>
      </div>

      <div class="rightmenu">
        <ul>
		
          
          <li><a href="userprofile.php"> DONATE</a></li>
          <li><a id="fisrtlist"> SHOW DONATION</a></li>
          <li><a a href="showuserprofile.php">PROFILE</a></li>
          <li><a href="usersettings.php">SETTINGS</a></li>
          <li><a href="logout.php"> LOGOUT </a></li>
        </ul>
      </div>

    </div>
	
	   
		
		
		
	    <div class="hometext">
		<h2> You have not donated yet </h2><br><br>
		
		<button id="buttonone" onclick="window.location.href='showdonation.php'"> Go Back </button>
		
		</div>
													
		
		
		
        
		 
		 
</div>
</body>
</html>

<?php
}

else{
	header("Location:../login.html");
}
?>