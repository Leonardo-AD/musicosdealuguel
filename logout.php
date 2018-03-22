<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Logout</title>
</head>
<body>
	<?php
	session_start();
	unset($_SESSION['user']);
	header('location: index.html');
	?>
</body>
</html>