<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>my webpage</title>
</head>
<body>
	
	
	<div class="row-outer">
	
		<div class="column1" style="background-image:url();background-repeat:no-repeat; background-size:cover;">
			
			
		<h2 class="column1-header" style="font-family: times new roman;">Welcome To My We<span style="color: #07edf5;">bp</span>age</h2>
		

		<span style="font-size: 24px; font-family: calibri;">Project by : </span><span style="font-size: 24px; color: white; font-weight: bold; font-family: calibri;">Mart Justine Bermejo<span style="color: black;">&trade;</span></span>
		
		<p style="font-family: calibri; font-size: 24px; text-align: center; text-transform: capitalize;">
		Push your self <br><span style="font-style: italic; color: white; font-size: 24px; font-family: calibri;">because</span><br>
		no one else is going to do it for you.</p>

		
		<p style="text-align: center; text-transform: capitalize; font-size: 24px; font-family: calibri; color: white;">Thank you for visiting my webpage, This page is for educational purposes only</p>

		
			<div class="login-form-outer-index">
				<div class="login-form-inner-index">
					<div class="background-inner-index">
			<form action="includes/login.inc.php" method="POST">
				<h2 class="h2-user-login">Sign In</h2><div class="user-logo-outer"><img src="userlogo.png" class="userlogo"></div>
				
				<div style="color: #4dff4d;">
				<?php  // SUCCCESSFULLY UPDATED PROFILE AND CHANGEPASSWORD
					$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					if (strpos($fullUrl, "update=success") == true) {
						echo "SUCCESSFULLY UPDATED! please relog-in to see the updated details thank you..";
					} else if (strpos($fullUrl, "changepassword=success") == true) {
						echo "SUCCESSFULLY CHANGEPASSWORD";
					}
				?>
				</div>
					<div class="login-errorhandler"> <!-- PHP CODES NG ERROR HANDLER NA NASA LOGIN.INC.PHP -->
					<?php
						$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // FUNCTION PARA MABASA YUNG NASA URL FIELD
						
						if (strpos($fullUrl, "login=empty") == true) { // CHECHECK NATEN SA URL KUNG MAY STRING NA "LOGIN=EMPTY malalaman naten if walang laman yung mga fields"
								echo "please input username and password";
						} else if (strpos($fullUrl, "login=invalid") == true) { // CHECHECK NATEN SA URL KUNG MAY STRING NA "LOGIN=EMPTY malalaman naten if walang records sa database naten"
								echo "invalid username or password";
						}
					?>
					</div>
				<input class="log-in" type="text" name="userName" placeholder="Username" >
				<input class="log-in" type="password" name="userPassword" placeholder="Password" >
				<div class="log-in-btn"><input class="log-in-button" type="submit" value ="LOG-IN" name="log-in-button"></div>

				
			</form>
					
					</div>
				</div>
			</div>
			
			
		</div> <!-- end of column1 -->
		
		<div class="column2" style="background-image:url();background-repeat:no-repeat; background-size:cover;">
	
			<div class="register-form-outer">
				<div class="register-form-inner">
					<div class="background-inner">
		<form action="includes/register.inc.php" method="POST">
	
		<h2 class="h2-user-register">Sign Up</h2><p class="p-user-register">Get Started with your free account</p>
		
		<div class="register-success-notification">
		<?php
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			
			if (strpos($fullUrl, "register=success") == true) {
				echo "You Are Now Registered!";
			}
		?>
		</div>
		
		<div class="register-errorhandler"> <!-- ERROR HANDLER -->
		<?php
		
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // FUNCTION PARA MABASA YUNG NASA URL FIELD
			
			if (strpos($fullUrl, "register=empty") == true) { // CHECHECK NATEN SA URL KUNG MAY STRING NA "REGISTER=EMPTY"
				echo "please fill out all the information below";
			}
	
		?> <!-- PHP CODES NG ERROR HANDLER NA NASA REGISTER.INC.PHP -->
		</div>
		<?php 
			//firstname
			if(isset($_GET['first'])){
				$first = $_GET['first'];
				echo '<br><input class="register-input" type="text" name="userFirstName" placeholder="First Name" value="'.$first.'"><br>';
			} else {
				echo '<br><input class="register-input" type="text" name="userFirstName" placeholder="First Name" ><br>';
			}
			//middlename
			if(isset($_GET['middle'])){
				$middle = $_GET['middle'];
				echo '<br><input class="register-input" type="text" name="userMiddleName" placeholder="Middle Name" value="'.$middle.'"><br>';
			} else {
				echo '<br><input class="register-input" type="text" name="userMiddleName" placeholder="Middle Name" ><br>';
			}
			//lastname
			if(isset($_GET['last'])){
				$last = $_GET['last'];
				echo '<br><input class="register-input" type="text" name="userLastName" placeholder="Last Name" value="'.$last.'"><br>';
			} else {
				echo '<br><input class="register-input" type="text" name="userLastName" placeholder="Last Name" ><br>';
			}
			//emailaddress
			if(isset($_GET['email'])){
				$email = $_GET['email'];
				echo '<br><input class="register-input" type="email" name="userEmail" placeholder="Email Address" value="'.$email.'"><br>';
			} else {
				echo '<br><input class="register-input" type="email" name="userEmail" placeholder="Email Address" ><br>';
			}
			//dateofbirth
			if(isset($_GET['birthdate'])){
				$birthdate = $_GET['birthdate'];
				echo '<br><input class="register-input" type="text" name="userDateOfBirth" placeholder="Date of Birth (january/01/2000)" value="'.$birthdate.'"><br>';
			} else {
				echo '<br><input class="register-input" type="text" name="userDateOfBirth" placeholder="Date of Birth (january/01/2000)" ><br>';
			}
			//contactnumber
			if(isset($_GET['contactnumber'])){
				$contactnumber = $_GET['contactnumber'];
				echo '<br><input class="register-input" type="text" name="userContactNumber" placeholder="Contact Number" value="'.$contactnumber.'"><br>';
			} else {
				echo '<br><input class="register-input" type="text" name="userContactNumber" placeholder="Contact Number" ><br>';
			}
			//address
			if(isset($_GET['address'])){
				$address = $_GET['address'];
				echo '	<br><input class="register-input" class="userAddress" type="text" name="userAddress" placeholder="Address" value="'.$address.'"><br>';
			} else {
				echo '	<br><input class="register-input" class="userAddress" type="text" name="userAddress" placeholder="Address" ><br>';
			}
			//userName
			if(isset($_GET['username'])){
				$username = $_GET['username'];
				echo '<br><input class="register-input" type="text" name="userName" placeholder="Username" value="'.$username.'"><br>';
			} else {
				echo '<br><input class="register-input" type="text" name="userName" placeholder="Username" ><br>';
			}
		?>
		
		
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
			} else if (strpos($fullUrl, "registerfirst=char") == true) {
				echo "firstname invalid characters";
			} else if (strpos($fullUrl, "registermiddle=char") == true) {
				echo "middlename invalid characters";
			} else if (strpos($fullUrl, "registerlast=char") == true) {
				echo "lastname invalid characters";
			}
		?>
		</div>
		<div class="register-errorhandler">
		<?php
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 			// FUNCTION PARA MABASA YUNG NASA URL FIELD
			
			if (strpos($fullUrl, "registerusername=taken") == true) { 						// ***CHECHECK NATEN SA URL KUNG MAY STRING NA "username=taken"
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
			
	
		</div> <!-- end of column2 -->
		
	</div> <!-- end of column 1 and column2 container -->
	

		
</body>
</html>