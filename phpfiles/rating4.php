<?php
require 'database_con.php';
$sql = "SELECT * FROM ratings WHERE id_suggestion='50'";
$result = mysqli_query($conn, $sql);
	
while($row = mysqli_fetch_assoc($result)) {
  $rating1 = $row["rating1"];
	$rating2 = $row["rating2"];
	$rating3 = $row["rating3"];
	$rating4 = $row["rating4"];
	$rating5 = $row["rating5"];
}
		
if(isset($_POST['stars1'])) {
	$rating = $_POST['stars1'];
	if($rating == 1) {
		$rating1 = $rating1+1;
		$sql1 = "UPDATE ratings SET rating1=".$rating1." WHERE id_suggestion='50'";
		mysqli_query($conn, $sql1);
	}
	
	if($rating == 2) {
		$rating2 = $rating2+1;
		$sql2 = "UPDATE ratings SET rating2=".$rating2." WHERE id_suggestion='50'";
		mysqli_query($conn, $sql2);
	}
	if($rating == 3) {
		$rating3 = $rating3+1;	
		$sql3 = "UPDATE ratings SET rating3=".$rating3." WHERE id_suggestion='50'";
		mysqli_query($conn, $sql3);
	}
	if($rating == 4) {
		$rating4 = $rating4+1;
		$sql3 = "UPDATE ratings SET rating4=".$rating4." WHERE id_suggestion='50'";
		mysqli_query($conn, $sql3);
	}
	if($rating == 5){
		$rating5 = $rating5+1;
		
		$sql3 = "UPDATE ratings SET rating5=".$rating5." WHERE id_suggestion='50'";
		mysqli_query($conn, $sql3);
	}	
}

header("location:../hunting.php?Rating1=".$rating1." ");
header("location:../hunting.php?Rating2=".$rating2." ");
header("location:../hunting.php?Rating3=".$rating3." ");
header("location:../hunting.php?Rating4=".$rating4." ");
header("location:../hunting.php?Rating5=".$rating5." ");



$sql = "SELECT * FROM ratings WHERE id_suggestion='54'";
$result = mysqli_query($conn, $sql);
	
while($row = mysqli_fetch_assoc($result)) {
  $rating1 = $row["rating1"];
	$rating2 = $row["rating2"];
	$rating3 = $row["rating3"];
	$rating4 = $row["rating4"];
	$rating5 = $row["rating5"];
}
		
if(isset($_POST['stars2'])) {
	$rating = $_POST['stars2'];
	if($rating == 1) {
		$rating1 = $rating1+1;
		$sql1 = "UPDATE ratings SET rating1=".$rating1." WHERE id_suggestion='54'";
		mysqli_query($conn, $sql1);
	}
	
	if($rating == 2) {
		$rating2 = $rating2+1;
		$sql2 = "UPDATE ratings SET rating2=".$rating2." WHERE id_suggestion='54'";
		mysqli_query($conn, $sql2);
	}
	if($rating == 3) {
		$rating3 = $rating3+1;	
		$sql3 = "UPDATE ratings SET rating3=".$rating3." WHERE id_suggestion='54'";
		mysqli_query($conn, $sql3);
	}
	if($rating == 4) {
		$rating4 = $rating4+1;
		$sql3 = "UPDATE ratings SET rating4=".$rating4." WHERE id_suggestion='54'";
		mysqli_query($conn, $sql3);
	}
	if($rating == 5){
		$rating5 = $rating5+1;
		
		$sql3 = "UPDATE ratings SET rating5=".$rating5." WHERE id_suggestion='54'";
		mysqli_query($conn, $sql3);
	}	
}

header("location:../summerMen.php?Rating1=".$rating1." ");
header("location:../summerMen.php?Rating2=".$rating2." ");
header("location:../summerMen.php?Rating3=".$rating3." ");
header("location:../summerMen.php?Rating4=".$rating4." ");
header("location:../summerMen.php?Rating5=".$rating5." ");






?>