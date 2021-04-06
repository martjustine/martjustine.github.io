<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>my webpage</title>
</head>
<body>
	<div class="header-outer">
		<div class="header-inner">
			<ul>
				<a href="index.php"><li class="log-account">log-in</li></a>
			</ul>
		</div>
	</div>
	
	<div class="register-form-outer">
		<div class="register-form-inner">
			<div class="background-inner">
		<form action="includes/register.inc.php" method="POST">
	
		<h2 class="h2-user-register">Sign Up</h2><p class="p-user-register">Get Started with your free account</p>
		
		<div class="register-errorhandler"> <!-- ERROR HANDLER -->
		<?php
		
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // FUNCTION PARA MABASA YUNG NASA URL FIELD
			
			if (strpos($fullUrl, "register=empty") == true) { // CHECHECK NATEN SA URL KUNG MAY STRING NA "REGISTER=EMPTY"
				echo "please fill out all the information below";
			}
	
		?> <!-- PHP CODES NG ERROR HANDLER NA NASA REGISTER.INC.PHP -->
		</div>
		<br><input class="register-input" type="text" name="userFirstName" placeholder="First Name" ><br>
		<br><input class="register-input" type="text" name="userMiddleName" placeholder="Middle Name" ><br>
		<br><input class="register-input" type="text" name="userLastName" placeholder="Last Name" ><br>
		<br><input class="register-input" type="text" name="userEmail" placeholder="Email Address" ><br>
		<div class="register-errorhandler">
		<?php
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 			// FUNCTION PARA MABASA YUNG NASA URL FIELD
			
			if (strpos($fullUrl, "useremail=taken") == true) { 						// ***CHECHECK NATEN SA URL KUNG MAY STRING NA "useremail=taken"
				echo "email already used";
			} else if (strpos($fullUrl, "userandemail=taken") == true) { 			// USER AND EMAIL ERROR
				echo "email already used";
			} else if (strpos($fullUrl, "passwordandemail=taken") == true) { 		// EMAIL AND PASSWORD ERROR
				echo "email already used";
			} else if (strpos($fullUrl, "userandemailandpassword=taken") == true) { // USER AND EMAIL AND PASSWORD ERROR
				echo "email already used";
			}
		?>
		</div>
		<br><input class="register-input" type="text" name="userDateOfBirth" placeholder="Date of Birth (january/01/2000)" ><br>
		<br><input class="register-input" type="text" name="userContactNumber" placeholder="Contact Number" ><br>
		<br><input class="register-input" class="userAddress" type="text" name="userAddress" placeholder="Address" ><br>
		<br><input class="register-input" type="text" name="userName" placeholder="Username" ><br>
		<div class="register-errorhandler">
		<?php
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 			// FUNCTION PARA MABASA YUNG NASA URL FIELD
			
			if (strpos($fullUrl, "username=taken") == true) { 						// ***CHECHECK NATEN SA URL KUNG MAY STRING NA "username=taken"
				echo "username already taken";
			} else if (strpos($fullUrl, "userandemail=taken") == true) { 			// USERNAME AND EMAIL ERROR
				echo "username already taken";
			} else if (strpos($fullUrl, "userandpassword=taken") == true) { 		// USERNAME AND PASSWORD ERROR
				echo "username already taken";
			} else if (strpos($fullUrl, "userandemailandpassword=taken") == true) { // USERNAME AND EMAIL AND PASSWORD ERROR
				echo "username already taken";
			}
		?>
		</div>
		<br><input class="register-input" type="password" name="userPassword" placeholder="Password" ><br>
		<div class="register-errorhandler">
		<?php
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				
			if (strpos($fullUrl, "repeatpassword=notmatch") == true) { 				// ***PASSWORD NOT MATCH/ERROR
					echo "Password not match";
			} else if (strpos($fullUrl, "passwordandemail=taken") == true) {				// PASSWORD AND EMAIL ERROR
					echo "Password not match";
			} else if (strpos($fullUrl, "userandpassword=taken") == true) {				// PASSWORD AND USER ERROR
					echo "Password not match";
			} else if (strpos($fullUrl, "userandemailandpassword=taken") == true) { // PASSWORD AND USER AND EMAIL ERROR
					echo "Password not match";
			}
		?>
		</div>
		<br><input class="register-input" type="password" name="userPassword2" placeholder="Repeat Password" ><br>
					<br><div class="register-btn"><input class="register-button" type="submit" value="register" name="register-button"></div>
					<br>
					<br>
		</form>
		
			</div>
		</div>
	</div>
	<hr class="hr-footer">
	
	<div class="footer-outer">
		<div class="footer-inner">
			<h4>Contact us</h4>
			<p>09676732607</p>
			<p>martjustinebermejo@gmail.com</p>
		</div>
	</div>
	
</body>
</html>