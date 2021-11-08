<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	?>
<!DOCTYPE html>
<html>
<head>
<title>Donate Medicine</title>
<link rel="stylesheet" type="text/css" href="../css/med.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

</head>
<body>

<script src="../Javascript/addmed.js">

</script>

<div class="bgimage">

    <div class="menu">
      
      <div class="leftmenu">
        <h4> Refresh Meds </h4>
      </div>

      <div class="rightmenu">
        <ul>
		
          
          <li><a id="fisrtlist"> DONATE</a></li>
          <li><a href="showdonation.php"> SHOW DONATION</a></li>
          <li><a href="showuserprofile.php">PROFILE</a></li>
          <li><a href="usersettings.php">SETTINGS</a></li>
          <li><a href="logout.php"> LOGOUT </a></li>
        </ul>
      </div>

    </div>
	    
		<div class="profile-box">
		<form method="post" enctype="multipart/form-data" action="addmedvalidation.php" name="fm">
 	
        <table class="center">     
            <tr>
              <td>
			  
                <p>Medicine Name*</p>
                <input type="text" name="fname" placeholder="Enter Name Of Medicine">
				<p id="fnameErr" style="color:red;font-size:13px"></p>
				
              </td>
            </tr>
      
            <tr>
              <td>
			  
                <p>>Medicine Type*</p><br>
                <input type="radio" name="type" value="Tablet"> Tablet
                <input type="radio" name="type" value="Capsule"> Capsule
                <input type="radio" name="type" value="Syrup"> Syrup 
				<p id="ftypeErr" style="color:red;font-size:13px"></p>
              </td>
            </tr>
      
            <tr>
              <td>
			    <br>
                <p>Quantity*</p>
				<input type="text" name="quantity" placeholder="Enter Medicine Quantity"><br>
                
				<p id="quantityErr" style="color:red;font-size:13px"></p>
              </td>
            </tr>
      
            <tr>
              <td>
			    <br>
                <h2 style="color:white">Expiry Date*</h2>
                <input type="date" name="edate">
				<p id="expiryErr" style="color:red;font-size:13px"></p>
              </td>
            </tr>
			
			
			
			<tr>
              <td>
			  
                <p>Location*</p>
                <input type="text" name="location" placeholder="Enter Location">
				<p id="locationErr" style="color:red;font-size:13px"></p>
              </td>
            </tr>
			
			<tr>
              <td>
			  
                <p>Picture Of Medicine</p><br>
                <input type="file" name="fileToUpload">
              </td>
            </tr>
			
            
                       
            <tr>
              <td>
			  
                
                <p style="text-align:center">
                <input type="submit" name="submit" onclick="return check_validation();" value="Submit">
                </p>
              </td>
            </tr>
			
			
			
		</table>
		</form>
		
		         <p style="text-align:center">
		         <button id="buttonone" onclick="window.location.href='userprofile.php'"> Cancel </button>
				 </p>
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









          
          
          
         