<?php 

session_start();
include ('includes/dbh.php');



?>


<!DOCTYPE html>
<html>
<head>
<title>home page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<style>

/*mother nav
centering the navigation bar
*/
.home-navigator {
	display: grid;
	grid-template-columns: auto auto;
	width: 400px;
	margin: 0 auto;
	font-size: 30px;
	font-family: calibri;
}

/*child nav*/
.home-navigator li {
	display: inline-block;
	margin: auto;
	font-size: 30px;
	font-family: calibri;
}

.home-navigator a {
	color: black;
}

.home-navigator a:hover {
	color: white;
}

</style>


	<div class="homepage-container">

		<a href="includes/logout.inc.php" style="float: right; font-size: 20px; background-color: #2b034d; line-height: 30px; padding: 10px; border-radius: 15% 0% 15% 0%;">Log-out</a>
		
		<h1 style="font-size: 75px; color: white;"> <sup><img src="logo.png" style="height: 100px; width: 100px; float: left;"></sup> Welcome </h1>
		
		<div class="userName" style="font-size: 65px; margin-left: 75px; color: #ebe70e; letter-spacing: 3px; text-transform: capitalize;">
															<?php echo $_SESSION['username'] . "<br>" . "<br>";?>
		</div>
		
		<!--<hr>-->
		<br>
		<br>
			<div class="home-navigator">
				
				
				<div>	
					<a href="home.php"><div><img src="home.png" style="height: 50px; width: 50px;"><sup>Home</sup></div></a>
				</div>
				<div>
					<a href="homepage.php"><div><img src="personaldetails.png" style="height: 50px; width: 50px;"><sup>Personal Details</sup></div></a>
				</div>
				
				
			</div>
		
		<div style="color: #4dff4d; font-size: 25px;">
		<?php
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			
			if (strpos($fullUrl, "update=success") == true) {
				echo "updated successfully!";
			}
		?>
		</div>
		
		<div style="clear: both;">
		<?php echo $_SESSION['id']; ?>
		</div>
		
		<div style="font-size: 26px; line-height: 50px;">
																
		<!-- <span style="font-weight: bold; font-size: 32px; color: white; font-family: calibri;">First Name :</span> -->		
		<fieldset style="width: 100%; clear:both;">
		<legend style="font-family: calibri; font-size: 40px;">Personal Details</legend>
		<span style="font-weight: bold; font-size: 32px; color: white; font-family: calibri;">First Name : </span><span style="color: #ebe70e;"><?php echo $_SESSION['firstname'] . "<br>"; ?></span>
		<span style="font-weight: bold; font-size: 32px; color: white; font-family: calibri;">Middle Name :</span> 			<span style="color: #ebe70e; font-family: calibri;"><?php echo $_SESSION['middlename'] . "<br>"; ?></span>
		<span style="font-weight: bold; font-size: 32px; color: white; font-family: calibri;">Last Name :</span>			<span style="color: #ebe70e; font-family: calibri;"><?php echo $_SESSION['lastname'] . "<br>"; ?></span>
		<span style="font-weight: bold; font-size: 32px; color: white; font-family: calibri;">Email :</span> 				<span style="color: #ebe70e; font-family: calibri;"><?php echo $_SESSION['email'] . "<br>"; ?></span>
		<span style="font-weight: bold; font-size: 32px; color: white; font-family: calibri;">Date of Birth :</span> 		<span style="color: #ebe70e; font-family: calibri;"><?php echo $_SESSION['dateofbirth'] . "<br>"; ?></span>
		<span style="font-weight: bold; font-size: 32px; color: white; font-family: calibri;">Contact Number :</span> 		<span style="color: #ebe70e; font-family: calibri;"><?php echo $_SESSION['contactnumber'] . "<br>"; ?></span>
		<span style="font-weight: bold; font-size: 32px; color: white; font-family: calibri;">Address :</span>				<span style="color: #ebe70e; font-family: calibri;"><?php echo $_SESSION['address'] . "<br>";?></span>
		
		</fieldset><!-- <span style="color: #ebe70e;"><?php echo $_SESSION['firstname'] . "<br>"; ?></span>-->
		
		<br>
		
		<a style= "font-size: 20px; background-color: #2b034d; padding: 10px; border-radius: 15% 0% 15% 0%; float: right;" href="update.php">Update Profile</a><br><br><br>
		<a style= "font-size: 20px; background-color: #2b034d; padding: 10px; border-radius: 15% 0% 15% 0%; float: right; margin-top: -50px;" href="changepassword.php">Change Password</a>
		
		</div>
		<br>
		<br>
		<br>
		
	
	<!-- $sql = "SELECT * FROM register;";
	$result = mysqli_query($conn, $sql);
	
	$row = mysqli_fetch_assoc($result);
	
	//print_r($row);
	
	
	echo "FIRST NAME: "  . "<br>";
	echo "MIDDLE NAME: " . "<br>";
	echo "LAST NAME: " . "<br>";
	
	?> 
	
	
		
	
		$sql = "SELECT userFirstName, userMiddleName FROM register;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if ($resultCheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row['userFirstName'] . "<br>";
			}
		}
		
	-->
	
	</div> 
	


</body>
</html>