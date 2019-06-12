<?php
include '../phpfiles/showDataBase.php';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles/styles.css" />
<title>Insert</title>
</head>

<body>

<div class="top">
<h1>Insert Page</h1>
</div>

<div class="vertical-menu">
  <a class="active" href="admin.php">Home</a>
  <a href="update.php">Update</a>
  <a href="delete.php">Delete</a>
  <a href="#">Insert</a>
</div>


<div>

	<p>Insert Suggestion</p>
		<form  method="POST" action="insertDate.php"> 
				<input type="text" name="title" placeholder="Title" required /><br /><br />
				 <input type="text" name="gender" placeholder="Gender" required /><br /><br/>
				 <input type="text" name="description" placeholder="Description" required /><br /><br />
				<input type="text" name="imagePath" placeholder="imagePath"><br /> <br />
				<input type="submit" name="insertS" value="Insert"><br />
			</form>
			<?php 
				if(@$_GET['InsertS']==true)
				{
						echo "<p style='background-color:purple; color:white;'>".$_GET['InsertS']."</p>";
				}
			?>
			
			<hr>
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

<hr><hr>
</div>

<div>
		<p>Insert recommendation</p>
		<form  method="POST" action="insertDate.php"> 
				<input type="text" name="nameR" placeholder="Name" required><br /><br />
				 <input type="text" name="descriptionR" placeholder="Description" required><br /><br />
				 <input type="text" name="imagePathR" placeholder="ImagePath" required><br /><br />
				 <input type="text" name="genderR" placeholder="Gender" required><br /><br />
				  <input type="text" name="event" placeholder="Event" required><br /><br />
				  <input type="text" name="season" placeholder="Season" required><br /><br />
				  <input type="text" name="style" placeholder="Style" required><br /><br />
				  <input type="text" name="brand" placeholder="Brand" required><br /><br />
				  <input type="text" name="color" placeholder="Color" required><br /><br />
				  <input type="text" name="trend" placeholder="Trend" required><br /><br />
				
				<input type="submit" name="insertR" value="Insert"><br />
				<?php 
					if(@$_GET['InsertR']==true)
					{
							echo "<p style='background-color:purple; color:white;'>".$_GET['InsertR']."</p>";
					}
				?>	
				
		</form>
		<br /><br />
		<hr><hr>
			<p> Recommendation table</p>
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
</div>

</body>


</html>