<?php

	require_once '../phpfiles/database_con.php';
	mysqli_set_charset($conn,"utf8mb4");
	
	if(isset($_POST['title']))
		$title=$_POST['title'];
	
	if(isset($_POST['gender']))
		$gender=$_POST['gender'];
	
	if(isset($_POST['description']))
		$desc=$_POST['description'];

	if(isset($_POST['imagePath']))
		$imagePath=$_POST['imagePath'];
	
	
	if(isset($_POST['idS'])){
		
		$id=$_POST['idS'];
		if(isset($_POST['update']) && !empty($title) && !empty($gender) && !empty($desc) && !empty($imagePath))
		{
			$sql="UPDATE suggestions SET title='".$title."',gender='".$gender."',description='".$desc."',imagePath='".$imagePath."' WHERE id_suggestion='".$id."'";
			mysqli_query($conn, $sql);
			header("location:update.php?UpdateCompletAll=Update with success!");
			
		}
		if(isset($_POST['updateTitle']) && !empty($title))
		{
			$sql="UPDATE suggestions SET title='".$title."' WHERE id_suggestion='".$id."'";
			mysqli_query($conn, $sql);
			header("location:update.php?UpdateCompletT=Update with success!");
		}
		
		if(isset($_POST['updateGender']) && !empty($gender))
		{
			$sql="UPDATE suggestions SET gender='".$gender."' WHERE id_suggestion='".$id."'";
			mysqli_query($conn, $sql);
			header("location:update.php?UpdateCompletG=Update with success!");
		}
		
		if(isset($_POST['updateDesc'])  && !empty($desc))
		{
			$sql="UPDATE suggestions SET description='".$desc."' WHERE id_suggestion='".$id."'";
			mysqli_query($conn, $sql);
			header("location:update.php?UpdateCompletD=Update with success!");
		}
		
		if(isset($_POST['updateImage']) && !empty($imagePath))
		{
			$sql="UPDATE suggestions SET imagePath='".$imagePath."'  WHERE id_suggestion='".$id."'";
			mysqli_query($conn, $sql);
			header("location:update.php?UpdateCompletI=Update with success!");
		}
		
		header("location:update.php");
	}
	else
		header("location:update.php");
		

?>