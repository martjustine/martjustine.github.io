<?php

session_start();

 ?>

<html>
<head>
<title>you are now registered!</title>
</head>
<body>

<style>
	a {
		text-decoration: none;
	}
</style>

	<h1>you are now registered!</h1>
	
	<h2><?php 
	echo "FIRST NAME: " . $_SESSION['userFirstName'] . "<br>";
	echo "MIDDLE NAME: " . $_SESSION['userMiddleName'] . "<br>";
	echo "LAST NAME: " . $_SESSION['userLastName']. "<br>"; 
	echo "username: " . $_SESSION['userName'];
	?></h2>
	
	
	<a href="includes/logout.inc.php">Log-out</a><br><br>
	<a href="index.php">log-in</a>

</body>
</html>