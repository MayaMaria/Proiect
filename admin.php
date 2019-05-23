<?php 
include 'phpfiles/showDataBase.php';
?>

<!DOCTYPE HTML>
<html>
<head>
<title> Admin Panel</title>
<link rel="stylesheet" type="text/css" href="adminOptions/styles/styles.css" />

</head>

<body>

<div id="header">
	<center>
		<img src="imagini/admin.png">
		<h1> Welcome to Admin Panel | M&A Insipiration</h1>
		<h2>Data available</h2>
	</center>
</div>

<div class="vertical-menu">
  <a class="active">Options</a>
  <a href="adminOptions/update.php">Update</a>
  <a href="adminOptions/delete.php">Delete</a>
  <a href="adminOptions/insert.php">Insert</a>
</div>
<br />

<center>

	<p>Suggestion table</p>
	<table>
		<tr>
			<th>id_suggestion</th>
			<th>title</th> 
			<th>gender</th>
			<th>description</th>
			<th>imagePath</th>
		</tr>
	<?php	showSuggestions();?>
	</table>


	<p class="white"> Recommendation table</p>
	<table>
		<tr>
				<th>id_recommendation</th>
				<th>name</th> 
				<th>description</th>
				<th>imagePath</th>
				<th>event</th>
				<th>season</th>
				<th>style</th>
				<th>color</th>
				<th>trends</th>
		</tr>
	<?php	showRecommendations();?>
	</table>


</center>
</body>


</html>
