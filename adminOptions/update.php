<?php
include '../phpfiles/showDataBase.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>

<body>

<center><h1>Update Page</h1></center>

<div class="vertical-menu">
  <a class="active">Options</a>
  <a href="#">Update</a>
  <a href="adminOptions/delete.php">Delete</a>
  <a href="adminOptions/insert.php">Insert</a>
</div>


	<div>
		<p>Update Suggestions</p>
		<form  method="POST" action="updateSuggestions.php"> 
				 <select id="types" name="idS">
					<option disabled="disabled" selected="selected">
							Select id
					 </option>
					<?php listIdS();?>
				</select> <br /><br />
				 
				<input type="text" name="title" placeholder="title"><br />
				<input type="submit" name="updateTitle" value="Update"><br /><br />
				<?php 
					if(@$_GET['UpdateCompletT']==true)
					{
						echo "<p style='background-color:green; color:white;'>".$_GET['UpdateCompletT']."</p>";
					}
				?>
				 <input type="text" name="gender" placeholder="Gender"><br />
				 <input type="submit" name="updateGender" value="Update"><br /><br />
				<?php 
					if(@$_GET['UpdateCompletG']==true)
					{
							echo "<p style='background-color:green; color:white;'>".$_GET['UpdateCompletG']."</p>";
					}
				?>
				 <input type="text" name="description" placeholder="Description"><br />
				 <input type="submit" name="updateDesc" value="Update"><br /><br />
				<?php 
					if(@$_GET['UpdateCompletD']==true)
					{
							echo "<p style='background-color:green; color:white;'>".$_GET['UpdateCompletD']."</p>";
					}
				?>
				<input type="text" name="imagePath" placeholder="imagePath"><br />
				<input type="submit" name="updateImage" value="Update"><br /><br /> <br />
				<?php 
					if(@$_GET['UpdateCompletI']==true)
					{
							echo "<p style='background-color:green; color:white;'>".$_GET['UpdateCompletI']."</p>";
					}
				?>
				
				<input type="submit" name="update" value="UpdateALL"><br />
			</form>
			<?php 
				if(@$_GET['UpdateCompletAll']==true)
				{
						echo "<p style='background-color:green; color:white;'>".$_GET['UpdateCompletAll']."</p>";
				}
			?>
	<div>
<hr><hr>
	<div>
		<p>Update Recommendations</p>
		<form  method="POST" action="updateRecommendation.php"> 
				<select id="types" name="subjects">
					<option disabled="disabled" selected="selected">
							Select id
					 </option>
					<?php listIdR();?>
              </select> <br /><br />
				<input type="text" name="nameR" placeholder="Name"><br />
				<input type="submit" name="updateNameR" value="Update"><br /><br />
				
				 <input type="text" name="descriptionR" placeholder="Description"><br />
				 <input type="submit" name="updateDescR" value="Update"><br /><br />
				 
				 <input type="text" name="imagePathR" placeholder="imagePath"><br />
				<input type="submit" name="updateImageR" value="Update"><br /><br /> <br />
				 
				 <input type="text" name="genderR" placeholder="Gender"><br />
				 <input type="submit" name="updateGenderR" value="Update"><br /><br />
				 
				  <input type="text" name="event" placeholder="Event"><br />
				 <input type="submit" name="updateEvent" value="Update"><br /><br />
				 
				  <input type="text" name="season" placeholder="Season"><br />
				 <input type="submit" name="updateSeason" value="Update"><br /><br />
				 
				  <input type="text" name="style" placeholder="Style"><br />
				 <input type="submit" name="updateStyle" value="Update"><br /><br />
				 
				  <input type="text" name="brand" placeholder="Brand"><br />
				 <input type="submit" name="updateBrand" value="Update"><br /><br />
				 
				  <input type="text" name="color" placeholder="Color"><br />
				 <input type="submit" name="updateColor" value="Update"><br /><br />
				 
				  <input type="text" name="trends" placeholder="Trend"><br />
				 <input type="submit" name="updateTrend" value="Update"><br /><br />
				
				<input type="submit" name="updateR" value="UpdateALL"><br />
			</form>
	<div>

	
</body>


</html>
