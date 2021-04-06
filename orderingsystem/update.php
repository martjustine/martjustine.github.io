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
				<h2>UPDATE DETAILS</h2>
	<form action="includes/update.inc.php" method="post">
		First Name: <br><input type="name" name="FirstName" value="<?php echo $_SESSION['firstname'] ?>"><br>
		Middle Name: <br><input type="name" name="MiddleName" value="<?php echo $_SESSION['middlename'] ?>"><br>
		Last Name: <br><input type="name" name="LastName" value="<?php echo $_SESSION['lastname'] ?>"><br>
		Email: <br><input type="name" name="Email" value="<?php echo $_SESSION['email'] ?>"><br>
		Date Of Birth: <br><input type="name" name="DateOfBirth" value="<?php echo $_SESSION['dateofbirth'] ?>"><br>
		Contact Number: <br><input type="name" name="ContactNumber" value="<?php echo $_SESSION['contactnumber'] ?>"><br>
		Address: <br><input type="name" name="Address" value="<?php echo $_SESSION['address'] ?>"><br><br>
	
		<div style="color: red;">
		<?php
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			
			if (strpos($fullUrl, "update=invalid") == true) {		// IF THE USERNAME AND PASSWORD DIDNT MATCH
				echo "invalid username or password";
			} else if (strpos($fullUrl, "update=empty") == true) {
				echo "username and password is required!";
			}
		?>
		</div>
		<br>
		<br>
		<!-- <span style="color: red; font-size: 15px; font-weight: bold; font-family: verdana;">*please enter username and password to update your profile..</span><br> -->
		<input style="background-image: linear-gradient(red, yellow); padding: 7px; width: 150px; font-weight: bold;" type="submit" value="Update" name="update">
	</form>
	</div>


</body>
</html>