<?php 
	
	include('dbh.php');
	session_start();

	if (isset($_POST['update'])) {
		
		$id = $_SESSION['id'];
		
		$userPassword = $_POST['userPassword'];
		$newPassword = $_POST['newPassword'];
		$repeatnewPassword = $_POST['repeatnewPassword'];
		

		/*$sql_userName = "SELECT * FROM register WHERE userName='$userName';"; // USERNAME querying
		$sql_userName_result = mysqli_query($conn, $sql_userName);
		$sql_userName_resultCheck = mysqli_num_rows($sql_userName_result);
		
		$sql_userEmail = "SELECT * FROM register WHERE userEmail='$userEmail';"; // USER-EMAIL querying
		$sql_userEmail_result = mysqli_query($conn, $sql_userEmail);
		$sql_userEmail_resultCheck = mysqli_num_rows($sql_userEmail_result);*/
		
		$sql_userPassword = "SELECT * FROM register WHERE id='$id';"; // USERPASSWORD querying
		$sql_userPassword_result = mysqli_query($conn, $sql_userPassword);
		$sql_userPassword_resultCheck = mysqli_num_rows($sql_userPassword_result);
		
		// ERROR HANDLER
		if (empty($userPassword) || empty($newPassword) || empty($repeatnewPassword)) {
			header("location: ../changepassword.php?changepassword=empty");
		} else if ($newPassword !== $repeatnewPassword) {
			header("Location: ../changepassword.php?repeatnewPassword=invalid");
		} else if (!$sql_userPassword_resultCheck > 0) {					// INVALID USERPASSWORD
			header("location: ../changepassword.php?changepassworduserPassword=invalid");
		} else {  // PROCEED HANDLER
				$sql = "SELECT * FROM register WHERE id='$id' and userPassword='$userPassword';";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
			
				if ($resultCheck > 0) {
					$sql_password = "UPDATE register SET userPassword='$newPassword' WHERE id='$id';";
					mysqli_query($conn, $sql_password);
					header("location: ../index.php?changepassword=success");
				} else {
					header("location: ../changepassword.php?changepassword=invalid");
				}
			
			}	
		
		
		
		
		
		
	}


?>