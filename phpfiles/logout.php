<?php
	session_start();
	if(isset($_GET['logout']))
	{
		//sesiunea este distrusa la logout
		session_destroy();
		header("location:../index.php");
	}

?>