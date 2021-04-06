<?php

include('dbh.php');
session_start();

	if (isset($_POST['update'])) {
		
		$username = $_SESSION['username'];
		$id = $_SESSION['id'];
	
		$firstName = $_POST['FirstName'];
		$middlename = $_POST['MiddleName'];
		$lastname = $_POST['LastName'];
		$email = $_POST['Email'];
		$dateofbirth = $_POST['DateOfBirth'];
		$contactnumber = $_POST['ContactNumber'];
		$address = $_POST['Address'];
	

				
		
			
			
			
			 // PROCEED IF THE USERNAME AND PASSWORD EXIST/CORRECT
				// UPDATING THE PREVIOUS DETAILS
				$sql = "UPDATE register SET userFirstName='$firstName',
											userMiddleName='$middlename',
											userLastName='$lastname',
											userEmail='$email',
											userDateOfBirth='$dateofbirth',
											userContactNumber='$contactnumber',
											userAddress='$address'
				WHERE id = '$id';";
				
				$sql_result = mysqli_query($conn, $sql);
				
				
				// SELECTING THE UPDATED DETAILS
				$sql_select = "SELECT * FROM register WHERE userName='$username';";
				$sql_query = mysqli_query($conn, $sql_select);
				
				$sql_num_rows = mysqli_num_rows($sql_query);
				$column = mysqli_fetch_assoc($sql_query);
				
				if ($sql_num_rows > 0) {
				$_SESSION['firstname'] = $column['userFirstName'];
				$_SESSION['middlename'] = $column['userMiddleName'];
				$_SESSION['lastname'] = $column['userLastName'];
				$_SESSION['email'] = $column['userEmail'];
				$_SESSION['dateofbirth'] = $column['userDateOfBirth'];
				$_SESSION['contactnumber'] = $column['userContactNumber'];
				$_SESSION['address'] = $column['userAddress'];
				header("location: ../homepage.php?update=success");
				}
				
			// else {							// ***DONT PROCEED*** IF THE USERNAME AND PASSWORD IS INVALID
			
			}
			
			
		
		
		
	
	

?>