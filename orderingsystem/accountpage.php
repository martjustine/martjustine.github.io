<?php
	include_once "includes/dbh.php";
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>my webpage</title>
</head>
<body>
	
	<h1>Your Account Profile</h1>
	
	
	
	<?php
	
		$sql = "SELECT * FROM register;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		
		if($resultCheck > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo "First Name: ";
				echo $row['userFirstName'];
				echo "<br>";
				echo "Middle Name: ";
				echo $row['userMiddleName'];
				echo "<br>";
				echo "Last Name: ";
				echo $row['userLastName'];
				echo "<br>";
			}
		}
		

	?>


</body>
</html>