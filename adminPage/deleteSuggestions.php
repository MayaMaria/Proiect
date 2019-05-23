<?php

require_once '../phpfiles/database_con.php';
mysqli_set_charset($conn,"utf8mb4");

if(isset($_POST['idS']))
{
	if(isset($_POST['deleteSuggestion'])){
		$id=$_POST['idS'];
		$sql="DELETE FROM suggestions WHERE id_suggestion='".$id."'";
		mysqli_query($conn, $sql);
		header("location:delete.php?Delete=Delete with success!");
	}
	else
		header("location:delete.php");
	
}
else
	header("location:delete.php");
?>