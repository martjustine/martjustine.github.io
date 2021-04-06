<?php

session_start();
include("includes/dbh.php");
	
?>

<html>
<head>
<title>Update Profile</title>
</head>
<body style="background-image: url(column1.jpg); background-repeat: no-repeat; backgroun-size: cover;">

<style>

input {
	padding: 5px 5px 3px 3px;
	margin: 5px;
}

</style>

	<a style="text-decoration: none; font-size: 20px; background-color: #2b034d; padding: 10px; border-radius: 15% 0% 15% 0%; color: white;" href="homepage.php">back</a>
	<br>
	<br>

	<div style="text-align: center;">
			<h2>CHANGE PASSWORD</h2>
	<form action="includes/changepassword.inc.php" method="post">
		<!-- USERNAME: 		<br><input type="text" name="userName"><br>
		<div style="color: red;">
		<?php  
					$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					if (strpos($fullUrl, "changepassworduserName=invalid") == true) { // username
						echo "Invalid Username" . "<br>";
					} else if (strpos($fullUrl, "changepasswordUEP=invalid") == true) { // username , email and password
						echo "Invalid Username" . "<br>";
					} else if (strpos($fullUrl, "changepasswordUE=invalid") == true) {			// username and email
						echo "Invalid Username" . "<br>";
					} else if (strpos($fullUrl, "changepasswordUP=invalid") == true) {				// username and password
						echo "Invalid Username" . "<br>";
					}
		?>
		</div>
		
		EMAIL:			<br><input type="text" name="userEmail"><br>
		<div style="color: red;">
		<?php  
					$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					if (strpos($fullUrl, "changepassworduserEmail=invalid") == true) { // useremail
						echo "Invalid Email" . "<br>";
					} else if (strpos($fullUrl, "changepasswordUEP=invalid") == true) { // username , email and password
						echo "Invalid Email" . "<br>";
					} else if (strpos($fullUrl, "changepasswordUE=invalid") == true) {			// email and username
						echo "Invalid Email" . "<br>";
					} else if (strpos($fullUrl, "changepasswordEP=invalid") == true) {			// email and password
						echo "Invalid Email" . "<br>";
					} 
		?> -->
	
		
		OLD PASSWORD: 	<br><input type="password" name="userPassword"><br>
		<div style="color: red;">
		<?php  
					$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					if (strpos($fullUrl, "changepassworduserPassword=invalid") == true) { // userpassword
						echo "Invalid Password" . "<br>";
					} else if (strpos($fullUrl, "changepasswordUEP=invalid") == true) { // username , email and password
						echo "Invalid Password" . "<br>";
					} else if (strpos($fullUrl, "changepasswordUP=invalid") == true) {			// password and username
						echo "Invalid Password" . "<br>";
					} else if (strpos($fullUrl, "changepasswordEP=invalid") == true) {			// password and email
						echo "Invalid Password" . "<br>";
					}
		?>
		</div>
		
		NEW PASSWORD: 			<br><input type="password" name="newPassword"><br><br>
		REPEAT-NEW PASSWORD: 	<br><input type="password" name="repeatnewPassword"><br><br>
		<input style="background-image: linear-gradient(red, yellow); padding: 7px; width: 150px; font-weight: bold;" type="submit" value="Change" name="update">
	</form>
	</div>
		<div style="text-align: center; color: red;">
	<?php
		$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		
		if (strpos($fullUrl, "changepassword=invalid") == true) {
			echo "invalid username or email or oldpassword";
		} else if (strpos($fullUrl, "changepassword=empty") == true) {
			echo "need to fill out all field";
		} else if (strpos($fullUrl, "repeatnewPassword=invalid") == true) {
			echo "invalid repeat password!";
		}
	?>
		</div>
		
	</div>

</body>
</html>