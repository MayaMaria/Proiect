
<!DOCTYPE HTML>
<html>
<head>
<style>
.vertical-menu {
  width: 200px; 
}

.vertical-menu a {
  background-color: #eee; 
  color: black; 
  display: block; 
  padding: 12px; 
  text-decoration: none; 
}

.vertical-menu a:hover {
  background-color: #ccc; 
}

.vertical-menu a.active {
  background-color: red; 
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
  <a href="#">Update</a>
  <a href="adminOptions/delete.php">Delete</a>
  <a href="adminOptions/insert.php">Insert</a>
</div>
<div>
	<p>Update Suggestions</p>
	<form  method="POST" action=""> 
			 <input type="text" name="id" placeholder="Id"><br /><br />
			<input type="text" name="title" placeholder="title"><br />
			<input type="submit" name="updateTitle" value="Update"><br /><br />
			 <input type="text" name="gender" placeholder="Gender"><br />
			 <input type="submit" name="updateGender" value="Update"><br /><br />
			 <input type="text" name="description" placeholder="Description"><br />
			 <input type="submit" name="updateDesc" value="Update"><br /><br />
			<input type="text" name="imagePath" placeholder="imagePath"><br />
			<input type="submit" name="updateImage" value="Update"><br /><br /> <br />
			
			<input type="submit" name="update" value="UpdateALL"><br />
		</form>
<div>



</body>


</html>
