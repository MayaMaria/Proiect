<?php
 session_start();
	
	  if(isset($_SESSION['login'])){
		
		require_once 'phpfiles/database_con.php';
	$sql = "SELECT * FROM users where username='".$_SESSION['login']."'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	$profile=$row["profileImage"];
	
	$message= "<a style='border: 2px solid ; border: 30px;' href='profile.php'><img src='imagini/$profile' width='40' height='30' alt='Profile' >".$_SESSION['login']."</a> <a href='phpfiles/logout.php?logout'>Logout</a>";
	$old_name=$_SESSION['login'];
	 }
	  else
	  {
		   $message= " <a href='login.php'>
					<p>Login</p>
				</a>";
	  }
