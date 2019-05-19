<?php	
	session_start();
	  if(isset($_SESSION['login'])){
		  $old_name=$_SESSION['login'];
		  require_once 'database_con.php';
			if(isset($_POST['update3']))
			{	
				if(isset($_POST['name'])){
					$name=$_POST['name'];
					$sql="UPDATE users SET name=".$name." WHERE username='".$old_name."'";
					mysqli_query($conn, $sql);
				}
			}
			if(isset($_POST['update1']))
			{	
				if(isset($_POST['username'])){
					$username=$_POST['username'];
					$sql="UPDATE users SET username=".$username." WHERE username='".$old_name."'";
					$_SESSION['login']=$username;
					mysqli_query($conn, $sql);
				}
			}
			header("location:../profile.php");
		}
?>