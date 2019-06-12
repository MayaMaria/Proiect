<?php
include '../phpfiles/showDataBase.php';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles/styles.css" />
<title>Update</title>
</head>

<body>

<div class="top">
<h1>Update Page</h1>
</div>

<div class="vertical-menu">
  <a class="active" href="admin.php">Home</a>
  <a href="#">Update</a>
  <a href="delete.php">Delete</a>
  <a href="insert.php">Insert</a>
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
				 
				<input type="text" name="title" placeholder="Title"><br />
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
	</div>
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

<hr>
	<div>
		<p>Update Recommendation</p>
		<form  method="POST" action="updateRecommendation.php"> 
				<select id="typesN" name="idR">
					<option disabled="disabled" selected="selected">
							Select id
					 </option>
					<?php listIdR();?>
              </select> <br /><br />
				<input type="text" name="nameR" placeholder="Name"><br />
				<input type="submit" name="updateNameR" value="Update"><br /><br />
				<?php 
					if(@$_GET['UpdateCompletN']==true)
					{
							echo "<p style='background-color:green; color:white;'>".$_GET['UpdateCompletN']."</p>";
					}
				?>
				 <input type="text" name="descriptionR" placeholder="Description"><br />
				 <input type="submit" name="updateDescR" value="Update"><br /><br />
				 
				 <?php 
					if(@$_GET['UpdateCompletDr']==true)
					{
							echo "<p style='background-color:green; color:white;'>".$_GET['UpdateCompletDr']."</p>";
					}
				?>
				 
				 <input type="text" name="imagePathR" placeholder="ImagePath"><br />
				<input type="submit" name="updateImageR" value="Update"><br /><br /> <br />
				<?php 
					if(@$_GET['UpdateCompletIr']==true)
					{
							echo "<p style='background-color:green; color:white;'>".$_GET['UpdateCompletIr']."</p>";
					}
				?>
				 
				 <input type="text" name="genderR" placeholder="Gender"><br />
				 <input type="submit" name="updateGenderR" value="Update"><br /><br />
				 <?php 
					if(@$_GET['UpdateCompletGender']==true)
					{
							echo "<p style='background-color:green; color:white;'>".$_GET['UpdateCompletGender']."</p>";
					}
				?>
				 
				  <input type="text" name="event" placeholder="Event"><br />
				 <input type="submit" name="updateEvent" value="Update"><br /><br />
				 <?php 
					if(@$_GET['UpdateCompletEvent']==true)
					{
							echo "<p style='background-color:green; color:white;'>".$_GET['UpdateCompletEvent']."</p>";
					}
				?>
				 
				  <input type="text" name="season" placeholder="Season"><br />
				 <input type="submit" name="updateSeason" value="Update"><br /><br />
				 <?php 
					if(@$_GET['UpdateCompletSeason']==true)
					{
							echo "<p style='background-color:green; color:white;'>".$_GET['UpdateCompletSeason']."</p>";
					}
				?>
				 
				  <input type="text" name="style" placeholder="Style"><br />
				 <input type="submit" name="updateStyle" value="Update"><br /><br />
				 <?php 
					if(@$_GET['UpdateCompletStyle']==true)
					{
							echo "<p style='background-color:green; color:white;'>".$_GET['UpdateCompletStyle']."</p>";
					}
				?>
				 
				  <input type="text" name="brand" placeholder="Brand"><br />
				 <input type="submit" name="updateBrand" value="Update"><br /><br />
				 <?php 
					if(@$_GET['UpdateCompletBrand']==true)
					{
							echo "<p style='background-color:green; color:white;'>".$_GET['UpdateCompletBrand']."</p>";
					}
				?>
				 
				  <input type="text" name="color" placeholder="Color"><br />
				 <input type="submit" name="updateColor" value="Update"><br /><br />
				 
				 <?php 
					if(@$_GET['UpdateCompletColor']==true)
					{
							echo "<p style='background-color:green; color:white;'>".$_GET['UpdateCompletColor']."</p>";
					}
				?>
				  <input type="text" name="trend" placeholder="Trend"><br />
				 <input type="submit" name="updateTrend" value="Update"><br /><br />
				 <?php 
					if(@$_GET['UpdateCompletTrend']==true)
					{
							echo "<p style='background-color:green; color:white;'>".$_GET['UpdateCompletTrend']."</p>";
					}
				?>
				
				<input type="submit" name="updateR" value="UpdateALL"><br />
				<?php 
				if(@$_GET['UpdateCompletAllR']==true)
				{
						echo "<p style='background-color:green; color:white;'>".$_GET['UpdateCompletAllR']."</p>";
				}
			?>
				
			</form>
	</div>
	<br /> <br />
	
	<hr>
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
	
	<br />
	<br />
</body>


</html>
