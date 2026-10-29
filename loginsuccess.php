<?php
	session_start();
	if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']==false){
		header("location:index.php");
	}
?>
<!DOCTYPE HTML>
<html>
<body>
<h3> You have logged in successfully!</h3>
<p><a href="logout.php">Log Out and Go Back</a></p>
</body>
</html>