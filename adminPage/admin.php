<?php 
include '../phpfiles/showDataBase.php';
?>

<!DOCTYPE HTML>
<html>
<head>
<title> Admin Panel</title>
<link rel="stylesheet" type="text/css" href="styles/styles.css" />

</head>

<body>

<div id="header">
	<center>
		<img src="../imagini/admin.png" id="gif">
		<h1> Welcome to Admin Panel | M&A Insipiration</h1>
		<img src="../imagini/admingif.gif">
	</center>
</div>

<div class="vertical-menu">
	<a href="../phpfiles/logout.php?logout">Logout</a>
  <a class="active">Options</a>
  <a href="update.php">Update</a>
  <a href="delete.php">Delete</a>
  <a href="insert.php">Insert</a>
</div>
<br />
</body>


</html>
