<!DOCTYPE html>
<html>
<head>
	<title>form login</title>
</head>
<body>
<?php
include 'header.php';
?>
	<center><h1>Login</h1></center><br>
	<form action="hal1.php" method="post">
		<center>Username: <input type="text" name="nama"><br><br></center>
		<center>Password: <input type="password" name="pass"><br><br></center>
		<center><input type="submit" value="kirim"></center>
	</form>
</body>
</html>
<?php
include 'footer.php';
?>