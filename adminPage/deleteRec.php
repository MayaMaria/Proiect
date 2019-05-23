<?php

require_once '../phpfiles/database_con.php';
mysqli_set_charset($conn,"utf8mb4");

if(isset($_POST['idR']))
{
	if(isset($_POST['deleteRecommendation'])){
		$id=$_POST['idR'];
		$sql="DELETE FROM recommendation WHERE id_recommendation='".$id."'";
		mysqli_query($conn, $sql);
		header("location:delete.php?DeleteR=Delete with success!");
	}
	else
		header("location:delete.php");
	
}
else
	header("location:delete.php");
?>