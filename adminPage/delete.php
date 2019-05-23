<?php
include '../phpfiles/showDataBase.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>

<body>

<div class="top">
<h1>Delete Page</h1>
</div>

<div class="vertical-menu">
  <a class="active" href="admin.php">Home</a>
  <a href="update.php">Update</a>
  <a href="#">Delete</a>
  <a href="insert.php">Insert</a>
</div>

<div>
		<p>Delete Suggestion</p>
		<form  method="POST" action="deleteSuggestions.php"> 
				 <select id="types" name="idS">
					<option disabled="disabled" selected="selected">
							Select id
					 </option>
					<?php listIdS();?>
				</select> <br /><br />
				
				<input type="submit" name="deleteSuggestion" value="Delete"><br /><br />
				<?php 
					if(@$_GET['Delete']==true)
					{
							echo "<p style='background-color:red; color:white;'>".$_GET['Delete']."</p>";
					}
				?>
		</form>
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

</div>

<hr><hr>

<div>
		<p>Delete Recommendation</p>
		<form  method="POST" action="deleteRec.php"> 
				 <select id="types" name="idR">
					<option disabled="disabled" selected="selected">
							Select id
					 </option>
					<?php listIdR();?>
				</select> <br /><br />
				
				<input type="submit" name="deleteRecommendation" value="Delete"><br /><br />
				<?php 
					if(@$_GET['DeleteR']==true)
					{
							echo "<p style='background-color:red; color:white;'>".$_GET['DeleteR']."</p>";
					}
				?>
		</form>
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
				<?php showRecommendations();?>
		</table>
</div>



</body>


</html>