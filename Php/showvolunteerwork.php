<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	?>
<!DOCTYPE html>
<html>
<head>
<title>Show Work</title>
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
		
          
          <li><a href="volunteerprofile.php"> HOME</a></li>
          <li><a id="fisrtlist"> SHOW DONATION</a></li>
          <li><a a href="showvolunteerprofile.php">PROFILE</a></li>
          <li><a href="volunteersettings.php">SETTINGS</a></li>
          <li><a href="logout.php"> LOGOUT </a></li>
        </ul>
      </div>

    </div>
	
	   <?php
	    
	    require("mysql_functions.php");
        $sql="select * from process_med where volu_email= '".$_SESSION["name"]."' ";
        loadFromMySQL($sql);
		if (empty($data)) {
        ?>
		
		
		
	    <div class="hometext">
		<h2> You have no work </h2><br><br>
		
		<button id="buttonone" onclick="window.location.href='volunteerprofile.php'"> Go HOME </button>
		
		</div>
													
		
		
		<?php
        }
		else{
			
			
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
				
				$data1=array();
                //require("mysql_functions.php");

 
    
             $sql="select * from user_med_donation where med_id= '".$v["p_med_id"]."' ";
             loadFromVolunteerMySQLV($sql);
				foreach($data1 as $u)
				{
					?>
					<tr>

                    <th><p style="color:white"><?php echo $u["med_name"]; ?></p></th>
                    <th><p style="color:white"><?php echo $u["med_type"]; ?></p></th>
                    <th><p style="color:white"><?php echo $u["med_quantity"]; ?></p></th>
                    <th><p style="color:white"><?php echo $u["med_quantity_a"]; ?></p></th>
                    <th><p style="color:white"><?php echo $u["med_ddate"]; ?></p></th>
                    <th><p style="color:white"><?php echo $u["med_edate"]; ?></p></th>
                    <th><p style="color:white"><?php echo $u["med_location"]; ?></p></th>
                    <th><img src="<?php echo $u["med_pic"]; ?>" style="width:50px;height:50px;"></th>
					
				    </tr>
					<?php
					
				}
			}
			?>
			</table>
			<p style="text-align:center">
			<button id="buttonone" onclick="window.location.href='donework.php'"> DONE </button>
			<button id="buttonone" onclick="window.location.href='cencelwork.php'"> CANCEL </button></p>
			<?php
			
			
			
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