<?php

	require_once '../phpfiles/database_con.php';
	mysqli_set_charset($conn,"utf8mb4");
	
	if(isset($_POST['nameR']))
		$name=$_POST['nameR'];
	
	if(isset($_POST['genderR']))
		$gender=$_POST['genderR'];
	
	if(isset($_POST['descriptionR']))
		$desc=$_POST['descriptionR'];

	if(isset($_POST['imagePathR']))
		$imagePath=$_POST['imagePathR'];
	
	if(isset($_POST['event']))
		$event=$_POST['event'];
	
	if(isset($_POST['style']))
		$style=$_POST['style'];
	
	if(isset($_POST['color']))
		$color=$_POST['color'];
	
	if(isset($_POST['trend']))
		$trend=$_POST['trend'];
	
	if(isset($_POST['season']))
		$season=$_POST['season'];
	
	if(isset($_POST['brand']))
		$brand=$_POST['brand'];
	
	
	if(isset($_POST['idR'])){	
		$id=$_POST['idR'];
		if(isset($_POST['updateR']) && !empty($name) && !empty($gender) && !empty($desc) && !empty($imagePath) &&  !empty($event) &&  !empty($style) &&  !empty($color) 
			&&  !empty($trend) &&  !empty($season) &&  !empty($brand))
		{
			$sql="UPDATE recommendation SET name='".$name."',description='".$desc."',imagePath='".$imagePath."',gender='".$gender."',event='".$event."',season='".$season."',style='".$style."',brand='".$brand."',color='".$color."',trends='".$trend."' WHERE id_recommendation='".$id."'";
			mysqli_query($conn, $sql);
			header("location:update.php?UpdateCompletAllR=Update with success!");
			
		}
		if(isset($_POST['updateNameR']) && !empty($name))
		{
			$sql="UPDATE recommendation  SET name='".$name."' WHERE  id_recommendation='".$id."'";
			mysqli_query($conn, $sql);
			header("location:update.php?UpdateCompletN=Update with success!");
		}
		
		if(isset($_POST['updateGenderR']) && !empty($gender))
		{
			$sql="UPDATE recommendation SET gender='".$gender."' WHERE id_recommendation='".$id."'";
			mysqli_query($conn, $sql);
			header("location:update.php?UpdateCompletGender=Update with success!");
		}
		
		if(isset($_POST['updateDescR'])  && !empty($desc))
		{
			$sql="UPDATE recommendation SET description='".$desc."' WHERE id_recommendation='".$id."'";
			mysqli_query($conn, $sql);
			header("location:update.php?UpdateCompletDr=Update with success!");
		}
		
		if(isset($_POST['updateImageR']) && !empty($imagePath))
		{
			$sql="UPDATE recommendation SET imagePath='".$imagePath."' WHERE id_recommendation='".$id."'";
			mysqli_query($conn, $sql);
			header("location:update.php?UpdateCompletIr=Update with success!");
		}
		
		if(isset($_POST['updateEvent']) && !empty($event))
		{
			$sql="UPDATE recommendation SET event='".$event."' WHERE id_recommendation='".$id."'";
			mysqli_query($conn, $sql);
			header("location:update.php?UpdateCompletEvent=Update with success!");
		}
		if(isset($_POST['updateStyle']) && !empty($style))
		{
			$sql="UPDATE recommendation SET style='".$style."' WHERE id_recommendation='".$id."'";
			mysqli_query($conn, $sql);
			header("location:update.php?UpdateCompletStyle=Update with success!");
		}
		
		if(isset($_POST['updateSeason']) && !empty($season))
		{
			$sql="UPDATE recommendation SET season='".$season."' WHERE id_recommendation='".$id."'";
			mysqli_query($conn, $sql);
			header("location:update.php?UpdateCompletSeason=Update with success!");
		}
		
		
		if(isset($_POST['updateBrand']) && !empty($brand))
		{
			$sql="UPDATE recommendation SET brand='".$brand."' WHERE id_recommendation='".$id."'";
			mysqli_query($conn, $sql);
			header("location:update.php?UpdateCompletBrand=Update with success!");
		}
		
		if(isset($_POST['updateColor']) && !empty($color))
		{
			$sql="UPDATE recommendation SET color='".$color."' WHERE id_recommendation='".$id."'";
			mysqli_query($conn, $sql);
			header("location:update.php?UpdateCompletColor=Update with success!");
		}
		
		if(isset($_POST['updateTrend']) && !empty($trend))
		{
			$sql="UPDATE recommendation SET trends='".$trend."' WHERE id_recommendation='".$id."'";
			mysqli_query($conn, $sql);
			header("location:update.php?UpdateCompletTrend=Update with success!");
		}
	}
	else
		header("location:update.php");
		

?>