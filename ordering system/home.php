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
	display: grid;
	grid-template-columns: auto auto;
	width: 400px;
	margin: 0 auto;
	font-size: 30px;
}

/*child nav*/


.home-navigator li {
	display: inline-block;
	margin: auto;
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
	display: grid;
	grid-column-gap: 50px;
	grid-template-columns: auto auto auto;
	min-height: 500px;
}

.home-content-box-child {
	margin: auto;
}

.footer-grid-handler {
	display: grid;
	grid-template-columns: 80% 15%;
}

.footer-right {
	
}

.box1 {
	position: relative;
	animation-name: box1;
	animation-duration: 4s;
}

@keyframes box1 {
	0%   {left:-100%; top:0px;}
	25%  {left:0px; top:0px;}
	50%  {left:0px; top:0px;}
	75%  {left:0px; top:0px;}
	100% {left:0px; top:0px;}
}

.box2 {
	position: relative;
	animation-name: box2;
	animation-duration: 4s;
}

@keyframes box2 {
	0%   {left:0px; top:-100%;}
	25%  {left:0px; top:0px;}
	50%  {left:0px; top:0px;}
	75%  {left:0px; top:0px;}
	100% {left:0px; top:0px;}
}

.box3 {
	position: relative;
	animation-name: box3;
	animation-duration: 4s;
}

@keyframes box3 {
	0%   {right:-100%; top:0px;}
	25%  {right:0px; top:0px;}
	50%  {right:0px; top:0px;}
	75%  {right:0px; top:0px;}
	100% {right:0px; top:0px;}
}

</style>


	<div class="homepage-container">

		<a href="includes/logout.inc.php" style="float: right; font-size: 20px; background-color: #2b034d; line-height: 30px; padding: 10px; border-radius: 15% 0% 15% 0%;">Log-out</a>
		
		<h1 style="font-size: 75px; color: white;"><sup><img src="logo.png" style="height: 100px; width: 100px; float: left;"></sup> HomePage  </h1>
		
		<div class="userName" style="font-size: 65px; margin-left: 75px; color: #ebe70e; letter-spacing: 3px; text-transform: uppercase;">
															
		</div>
		
		<!--<hr>-->
		<br>
		<br>
		
		<div style="color: #4dff4d; font-size: 25px;">
		<?php
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			
			if (strpos($fullUrl, "register=success") == true) {		// IF THE USERNAME AND PASSWORD DIDNT MATCH
				echo "Welcome, you already registered";
			}
		?>
		</div>
		<br>
		<br>
		
			<div class="home-navigator">
				
				
				<div>	
					<a href="home.php"><div><img src="home.png" style="height: 50px; width: 50px;"><sup>Home</sup></div></a>
				</div>
				<div>
					<a href="homepage.php"><div><img src="personaldetails.png" style="height: 50px; width: 50px;"><sup>Personal Details</sup></div></a>
				</div>
				
				
			</div>
	
		<div style="display: flex;"><!--mother div-->
			<div style="margin: auto;"><!--child div-->
			<h1 style="font-family: verdana;"></h1>
			</div>
		</div>
	
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
	
	<div class="home-content-box">
	
		
		
		<div class="home-content-box-child">
			<div class="box1" style="background: rgba(0,0,0,0.3); height: 250px; width: 250px; overflow: auto; box-shadow: 5px 10px 8px 5px black; color: white; font-family: brush script mt;">
				<div style="display: flex; height: 100%;">
					<div style="margin: auto;">
					<h1>READ</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="home-content-box-child">
			<div class="box2" style="background: rgba(0,0,0,0.3); height: 250px; width: 250px; overflow: auto; box-shadow: 5px 10px 8px 5px black; color: white; font-family: brush script mt;">
				<div style="display: flex; height: 100%;">
					<div style="margin: auto;">
					<h1>WRITE</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="home-content-box-child">
			<div class="box3" style="background: rgba(0,0,0,0.3); height: 250px; width: 250px; overflow: auto; box-shadow: 5px 10px 8px 5px black; color: white; font-family: brush script mt;">
				<div style="display: flex; height: 100%;">
					<div style="margin: auto;">
					<h1>CREATE</h1>
					</div>
				</div>
			</div>
		</div>
		
		
	
	
	</div> <!-- end of content -->
	
	<div class="footer-grid-handler">
	
		<div class="footer-left">
		
			<p style="font-size: 20px; font-family: calibri; font-style: italic; color: white;">contact me at</p>
			<p style="font-size: 20px; font-family: calibri; font-style: italic; color: white;">martjustinebermejo@gmail.com</p>
		
		</div>
	
		<div class="footer-right">
			<div><p style="font-size: 20px; font-family: calibri; font-style: italic; color: white;">&copyMartJustineBermejo2020</p></div>
			
		</div>
		
		
	</div>
	
	
	
	</div> 
	
	
	
	
	

</body>
</html>