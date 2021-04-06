<?php
	include('dbh.php');
	
	if (isset($_POST['register-button'])) {
		session_start();
		$userFirstName = $_POST['userFirstName'];
		$userMiddleName = $_POST['userMiddleName'];
		$userLastName = $_POST['userLastName'];
		$userEmail = $_POST['userEmail'];
		$userDateOfBirth = $_POST['userDateOfBirth'];
		$userContactNumber = $_POST['userContactNumber'];
		$userAddress = $_POST['userAddress'];
		$userName = $_POST['userName'];
		$userPassword = $_POST['userPassword'];
		$userPassword2 = $_POST['userPassword2'];
		
		// SELECTING FROM OUR DATABASE before we proceed TO INSERTING ANOTHER DATA
		$sql_username = "SELECT * FROM register WHERE userName='$userName';";
		$sql_useremail = "SELECT * FROM register WHERE userEmail='$userEmail';";
		
		
		// QUERYEING userName and userEmail TO OUR DATABASE
		$result_username = mysqli_query($conn, $sql_username);
		$result_useremail = mysqli_query($conn, $sql_useremail);
		
		
		// Storing to the variable $resultCheck of userName and userEmail
		$resultCheck = mysqli_num_rows($result_username);
		$resultCheck1 = mysqli_num_rows($result_useremail);

		
		// ERROR HANDLER
		if (empty($userFirstName) || empty($userMiddleName) || empty($userLastName) || empty($userEmail) || empty($userDateOfBirth) || empty($userContactNumber) || empty($userAddress) || empty($userName) || empty($userPassword)) {
			header("location: ../index.php?register=empty&first=$userFirstName&middle=$userMiddleName&last=$userLastName&birthdate=$userDateOfBirth&contactnumber=$userContactNumber&address=$userAddress");
		} else if (!preg_match("/^[a-zA-Z]*$/", $userFirstName)) {
			header("Location: ../index.php?registerfirst=char&middle=$userMiddleName&last=$userLastName&email=$userEmail&birthdate=$userDateOfBirth&contactnumber=$userContactNumber&address=$userAddress");
		} else if (!preg_match("/^[a-zA-Z]*$/", $userMiddleName)) {
			header("Location: ../index.php?registermiddle=char&first=$userFirstName&last=$userLastName&email=$userEmail&birthdate=$userDateOfBirth&contactnumber=$userContactNumber&address=$userAddress");
		} else if (!preg_match("/^[a-zA-Z]*$/", $userLastName)) {
			header("Location: ../index.php?registerlast=char&first=$userFirstName&middle=$userMiddleName&email=$userEmail&birthdate=$userDateOfBirth&contactnumber=$userContactNumber&address=$userAddress");
		} else if ($resultCheck > 0 && $resultCheck1 > 0 && ($userPassword !== $userPassword2)) { // BOTH EMAIL AND USERNAME AND PASSWORD HAS ERROR
			header("location: ../index.php?userandemailandpassword=taken&first=$userFirstName&middle=$userMiddleName&last=$userLastName&birthdate=$userDateOfBirth&contactnumber=$userContactNumber&address=$userAddress");
		} else if ($resultCheck > 0 && $resultCheck1 > 0) {								// USERNAME AND EMAIL ERROR
			header("location: ../index.php?userandemail=taken&first=$userFirstName&middle=$userMiddleName&last=$userLastName&birthdate=$userDateOfBirth&contactnumber=$userContactNumber&address=$userAddress");
		} else if ($resultCheck > 0 && ($userPassword !== $userPassword2)) {			// USERNAME AND PASSWORD ERROR
			header("location: ../index.php?userandpassword=taken&first=$userFirstName&middle=$userMiddleName&last=$userLastName&birthdate=$userDateOfBirth&contactnumber=$userContactNumber&address=$userAddress");
		} else if ($resultCheck1 > 0 && ($userPassword !== $userPassword2)) {			// EMAIL AND PASSWORD ERROR
			header("location: ../index.php?passwordandemail=taken&first=$userFirstName&middle=$userMiddleName&last=$userLastName&birthdate=$userDateOfBirth&contactnumber=$userContactNumber&address=$userAddress");
		} else if ($resultCheck > 0) {											// USERNAME ALREADY EXIST
			header("location: ../index.php?registerusername=taken&first=$userFirstName&middle=$userMiddleName&last=$userLastName&email=$userEmail&birthdate=$userDateOfBirth&contactnumber=$userContactNumber&address=$userAddress");
		} else if ($resultCheck1 > 0) {											// EMAIL ALREADY EXIST
			header("location: ../index.php?useremail=taken&first=$userFirstName&middle=$userMiddleName&last=$userLastName&birthdate=$userDateOfBirth&contactnumber=$userContactNumber&address=$userAddress");
		} else if ($userPassword !== $userPassword2) {							// REPEAT PASSWORD DID NOT MATCH
			header("location: ../index.php?repeatpassword=notmatch&first=$userFirstName&middle=$userMiddleName&last=$userLastName&birthdate=$userDateOfBirth&contactnumber=$userContactNumber&address=$userAddress");
		} else {  // PROCEED HANDLER
			$sql = "INSERT INTO register (userFirstName, userMiddleName, userLastName, userEmail, userDateOfBirth, userContactNumber, userAddress, userName, userPassword) 
									values
								('$userFirstName', '$userMiddleName', '$userLastName', '$userEmail', '$userDateOfBirth', '$userContactNumber', '$userAddress', '$userName', '$userPassword');";



			$result = mysqli_query($conn, $sql);

			
			$sql_select = "SELECT * FROM register WHERE userName='$userName' and userPassword='$userPassword';";
			$sql_select_result = mysqli_query($conn, $sql_select);
			$sql_resultCheck = mysqli_num_rows($sql_select_result); 
			
			$column = mysqli_fetch_assoc($sql_select_result); // fetching the column of my table to variable $column and then storing it on function $_SESSION
			
			
			
				if ($sql_resultCheck > 0) { 
			
				
				$_SESSION['id']=$column['id'];
				$_SESSION['firstname'] = $column['userFirstName'];
				$_SESSION['middlename'] = $column['userMiddleName'];
				$_SESSION['lastname'] = $column['userLastName'];
				$_SESSION['email'] = $column['userEmail'];
				$_SESSION['dateofbirth'] = $column['userDateOfBirth'];
				$_SESSION['contactnumber'] = $column['userContactNumber'];
				$_SESSION['address'] = $column['userAddress'];
				
				$_SESSION['username'] = $userName;
				$_SESSION['userpassword'] = $userPassword;
				header("location: ../home.php?register=success");
				
				}
			
	
			}
		
		
		
	}
	
	

 ?>
 
