<?php
	
	session_start();
	include('dbh.php');
	
	if (isset($_POST['log-in-button'])) {
	
		$userName = $_POST['userName'];
		$userPassword = $_POST['userPassword'];
	
		if (empty(userName) || empty($userPassword)) {
			header("location: ../index.php?login=empty");
		} else {
			$sql = "SELECT * FROM register WHERE userName='$userName' and userPassword='$userPassword';";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result); // pang check to kung nag exist yung $username and $password
			
			$column = mysqli_fetch_assoc($result); // ilalagay neto yung value ng bawat column sa variable na $column //$column ARRAY
		
			//$column = mysqli_fetch_array($result);
			
			// VALUE TO NG BAWAT COLUMN SA USERNAME AND PASSWORD NA NILOG IN MO
			
			$_SESSION['id']=$column['id'];
			$_SESSION['firstname'] = $column['userFirstName'];
			$_SESSION['middlename'] = $column['userMiddleName'];
			$_SESSION['lastname'] = $column['userLastName'];
			$_SESSION['email'] = $column['userEmail'];
			$_SESSION['dateofbirth'] = $column['userDateOfBirth'];
			$_SESSION['contactnumber'] = $column['userContactNumber'];
			$_SESSION['address'] = $column['userAddress'];
			
			
			/* $_SESSION['firstname'] = $column[1];
			$_SESSION['middlename'] = $column[2];
			$_SESSION['lastname'] = $column[3];
			$_SESSION['email'] = $column[4];
			$_SESSION['dateofbirth'] = $column[5];
			$_SESSION['contactnumber'] = $column[6];
			$_SESSION['address'] = $column[7]; */

			if ($resultCheck > 0) {
					$_SESSION['username'] = $userName;
					header("location: ../home.php?login=success");
			}  else {
					header("location: ../index.php?login=invalid");
				}
		
			}
		
	
	
	
	}
	

	
 ?>