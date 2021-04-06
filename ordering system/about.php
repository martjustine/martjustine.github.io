<?php 

session_start();
include ('includes/dbh.php');



?>


<!DOCTYPE html>
<html>
<head>
<title>home page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<style>

/*mother nav
centering the navigation bar
*/
.home-navigator {
	display: flex;
}

/*child nav*/
.home-navigator ul {
	margin: auto;
}

.home-navigator li {
	display: inline-block;
	margin: 0 15px;
	font-size: 30px;
	font-family: calibri;
}

.home-navigator a {
	color: black;
}

.home-navigator a:hover {
	color: white;
}

.home-content-box {
	display: flex;
	min-height: 500px;
}

.home-content-box-child {
	margin: auto;
}

.home-content-box-child li{
	display: inline-block;
	margin: 0 30px;
}

.footer-right {
	float: right;
}

.footer-left {
	float: left;
	line-height: 1.6;
}


</style>


	<div class="homepage-container">

		<a href="includes/logout.inc.php" style="float: right; font-size: 20px; background-color: #2b034d; line-height: 30px; padding: 10px; border-radius: 15% 0% 15% 0%;">Log-out</a>
		
		<h1 style="font-size: 75px; color: white;"><sup><img src="logo.png" style="height: 100px; width: 100px; float: left;"></sup> About </h1>
		
		<div class="userName" style="font-size: 65px; margin-left: 75px; color: #ebe70e; letter-spacing: 3px; text-transform: uppercase;">
														
		</div>
		
		<!--<hr>-->
		<br>
		<br>
		
		<div class="home-navigator">
			<ul>
				<a href="home.php"><li><sub><img src="home.png" style="height: 50px; width: 50px;"></sub>Home</li></a><span style="border-style: solid; border-width: 2px;"></span>
				<a href="about.php"><li><sub><img src="about.png" style="height: 50px; width: 50px;"></sub>About</li></a><span style="border-style: solid; border-width: 2px;"></span>
				<a href="homepage.php"><li><sub><img src="personaldetails.png" style="height: 50px; width: 50px;"></sub>Personal Details</li></a>
			</ul>
		</div>
		
		
		<div class="home-content-box">
	
		<div class="home-content-box-child">
		<ul>
			<li style="height: 250px; width: 250px; overflow: auto; box-shadow: 5px 10px 8px 5px black; color: white; font-family: brush script mt;">
				<div style="display: flex; height: 100%;">
					<div style="margin: auto;">
					<h1 class="read"></h1>
					</div>
				</div>
			</li>
			<li style="background: rgba(0,0,0,0.3); height: 250px; width: 250px; overflow: auto; box-shadow: 5px 10px 8px 5px black; color: white; font-family: brush script mt;">
				<div style="display: flex; height: 100%;">
					<div style="margin: auto;">
					<h1 class="read">WRITE</h1>
					</div>
				</div>
			</li>
			<li style="background: rgba(0,0,0,0.3); height: 250px; width: 250px; overflow: auto; box-shadow: 5px 10px 8px 5px black; color: white; font-family: brush script mt;">
				<div style="display: flex; height: 100%;">
					<div style="margin: auto;">
					<h1 class="read">CREATE</h1>
					</div>
				</div>
			</li>
		</ul>
		</div>
	
	</div>
	
	<div class="home-content-box">
	
		<div class="home-content-box-child">
		<ul>
			<li style="background: rgba(0,0,0,0.3); height: 250px; width: 250px; overflow: auto; box-shadow: 5px 10px 8px 5px black; color: white; font-family: brush script mt;">
				<div style="display: flex; height: 100%;">
					<div style="margin: auto;">
					<h1 class="read">READ</h1>
					</div>
				</div>
			</li>
			<li style="background: rgba(0,0,0,0.3); height: 250px; width: 250px; overflow: auto; box-shadow: 5px 10px 8px 5px black; color: white; font-family: brush script mt;">
				<div style="display: flex; height: 100%;">
					<div style="margin: auto;">
					<h1 class="read">WRITE</h1>
					</div>
				</div>
			</li>
			<li style="background: rgba(0,0,0,0.3); height: 250px; width: 250px; overflow: auto; box-shadow: 5px 10px 8px 5px black; color: white; font-family: brush script mt;">
				<div style="display: flex; height: 100%;">
					<div style="margin: auto;">
					<h1 class="read">CREATE</h1>
					</div>
				</div>
			</li>
		</ul>
		</div>
	
	</div> <!-- end of content -->
		
	
	
	<!-- $sql = "SELECT * FROM register;";
	$result = mysqli_query($conn, $sql);
	
	$row = mysqli_fetch_assoc($result);
	
	//print_r($row);
	
	
	echo "FIRST NAME: "  . "<br>";
	echo "MIDDLE NAME: " . "<br>";
	echo "LAST NAME: " . "<br>";
	
	?> 
	
	
		
	
		$sql = "SELECT userFirstName, userMiddleName FROM register;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if ($resultCheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row['userFirstName'] . "<br>";
			}
		}
		
	-->
	
	</div> 
	
	

</body>
</html>