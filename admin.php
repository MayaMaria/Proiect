<?php 
include 'phpfiles/showDataBase.php';
?>

<!DOCTYPE HTML>
<html>
<head>
<style>
.vertical-menu {
  width: 200px; /* Set a width if you like */
}

.vertical-menu a {
  background-color: #eee; /* Grey background color */
  color: black; /* Black text color */
  display: block; /* Make the links appear below each other */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove underline from links */
}

.vertical-menu a:hover {
  background-color: #ccc; /* Dark grey background on mouse-over */
}

.vertical-menu a.active {
  background-color: red; /* Add a green color to the "active/current" link */
  color: white;
}
table, th, td {
  border: 1px solid black;
  font-size:10px;
}
</style>

</head>

<body>

<div class="vertical-menu">
  <a class="active">Options</a>
  <a href="adminOptions/update.php">Update</a>
  <a href="adminOptions/delete.php">Delete</a>
  <a href="adminOptions/insert.php">Insert</a>
</div>
<br />
<p>Suggestion table</p>
<table>
<?php	showSuggestions();?>
</table>


<p>Recommendation table</p>
<table>
<?php	showRecommendations();?>
</table>
</body>


</html>
