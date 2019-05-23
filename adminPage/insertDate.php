<?php 

require_once '../phpfiles/database_con.php';
mysqli_set_charset($conn,"utf8mb4");

if(isset($_POST['insertS']))
{
	$title=$_POST['title'];
	$gender=$_POST['gender'];
	$desc=$_POST['description'];
	$imagePath=$_POST['imagePath'];
	$sql="INSERT INTO suggestions (title,gender,description,imagePath) VALUES ('".$title."','".$gender."','".$desc."','".$imagePath."')";
	mysqli_query($conn, $sql);
	header("location:insert.php?InsertS=Insert suggestion with success!");	
}
else
{
	if(isset($_POST['insertR']))
	{
		$name=$_POST['nameR'];
		$gender=$_POST['genderR'];
		$desc=$_POST['descriptionR'];
		$imagePath=$_POST['imagePathR'];
		$event=$_POST['event'];
		$style=$_POST['style'];
		$color=$_POST['color'];
		$trend=$_POST['trend'];
		$season=$_POST['season'];
		$brand=$_POST['brand'];
		$sql="INSERT INTO recommendation  (name,description,imagePath,gender,event,season,style,brand,color,trends) VALUES ('".$name."','".$desc."','".$imagePath."','".$gender."','".$event."','".$season."','".$style."','".$brand."','".$color."','".$trend."')";  
		mysqli_query($conn, $sql);
		header("location:insert.php?InsertR=Insert  recommendation with success!");	
	}	
	else 
	header("location:insert.php");	

}
	
?>