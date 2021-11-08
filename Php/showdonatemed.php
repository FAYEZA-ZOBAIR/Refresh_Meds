<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	?>
<!DOCTYPE html>
<html>
<head>
<title>Show Donate Medicine</title>
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
	
	   <?php
	    $total=0;
		$a=1;
	    require("mysql_functions.php");
        $sql="select * from user_med_donation where user_email= '".$_SESSION["name"]."' ";
        loadFromMySQL($sql);
		if (empty($data)) {
        ?>
		
		
		
	    <div class="hometext">
		<h2> You have not donated yet </h2><br><br>
		
		<button id="buttonone" onclick="window.location.href='showdonation.php'"> Go Back </button>
		
		</div>
													
		
		
		<?php
        }
		else{
			
			$u="r";
			?>
			<br>
			<br>
			<table border=1  class="center">
            <tr>
			    <th>Medicine Name</th>
				<th>Medicine Type</th> 
				<th>Quantity</th> 
				<th>Quantity Type</th> 
				<th>Donation Date</th> 
				<th>Expiry Date</th> 
				<th>Location</th>
				<th>Picture</th>
    
            </tr>
			<?php
			foreach($data as $v)
			{
				
				
				if($v["med_validation_type"]==$u){
					$total=$total+$a;
					?>
					<tr>

                    <th><p style="color:white"><?php echo $v["med_name"]; ?></p></th>
                    <th><p style="color:white"><?php echo $v["med_type"]; ?></p></th>
                    <th><p style="color:white"><?php echo $v["med_quantity"]; ?></p></th>
                    <th><p style="color:white"><?php echo $v["med_quantity_a"]; ?></p></th>
                    <th><p style="color:white"><?php echo $v["med_ddate"]; ?></p></th>
                    <th><p style="color:white"><?php echo $v["med_edate"]; ?></p></th>
                    <th><p style="color:white"><?php echo $v["med_location"]; ?></p></th>
                    <th><img src="<?php echo $v["med_pic"]; ?>" style="width:50px;height:50px;"></th>
					
				    </tr>
					<?php
					
				}
			}
			?>
			</table>
			<?php
			
			if($total==0)
			{
				header('Location: notyet.php');
				
			}
			
		}
	   
	   ?>
	
        
		 
		 
</div>
</body>
</html>

<?php
}

else{
	header("Location:../login.html");
}
?>