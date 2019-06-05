<?php
	session_start();	
	if(isset($_POST['signin']))
	{
		require_once 'database_con.php';
		if(isset($_POST['your_name']) && isset($_POST['your_pass'])){
			$username=$_POST['your_name'];
			$password=$_POST['your_pass'];
			
			$sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
			$result = mysqli_query($conn,$sql);
			$resultNumberRows = mysqli_num_rows($result);
			
			if($resultNumberRows == 1 )
			{
				$row=mysqli_fetch_row($result);
				if ($username=="admin" && $password=="admin")
				{
					$_SESSION['admin']=$username;
					header("location:../adminPage/admin.php");
				}
				else
				{
					$_SESSION['login']=$username;
					$_SESSION['image']=$row["imagePath"];
					header("location:../welcome.php");
				}	
			}
			else
			{
				header("location:../login.php?InvalidLogin=Incorrect email or password");
				
			}
			
		}
	}
	else
	{
		exit();
	}
	
?>

