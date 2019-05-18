<?php	

	session_start();
	  if(isset($_SESSION['login'])){
		  $old_name=$_SESSION['login'];
			if(isset($_POST['update']))
			{
				require_once 'database_con.php';
				if(isset($_POST['name']) 
					){
					$name=$_POST['name'];
					$surname=$_POST['surname'];
					$username=$_POST['username'];
					$password=$_POST['password'];
					$country=$_POST['country'];
					$email=$_POST['email'];
					

					$sql="UPDATE users SET name=".$name." WHERE username='".$old_name."'";
					mysqli_query($conn, $sql);
					mysqli_close($conn);
					
				
					
				}
			}
			else
			{
				exit();
	}
}
?>