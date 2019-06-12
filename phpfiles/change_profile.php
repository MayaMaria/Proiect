<?php	
	session_start();
	if(isset($_SESSION['login'])){
		  $old_name=$_SESSION['login'];
		  require_once 'database_con.php';
			if(isset($_POST['updateImage']))
			{	
				if(isset($_POST['profile'])){
					//update imagine profil 
					$profile=$_POST['profile'];
					$sql="UPDATE users SET profileImage='".$profile."' WHERE username='".$old_name."'";
					$_SESSION['image']=$profile;
					mysqli_query($conn, $sql);
				}
			}
			if(isset($_POST['updateName']))
			{	
				if(isset($_POST['name'])){
					//update nume
					$name=$_POST['name'];
					$sql="UPDATE users SET firstname='".$name."' WHERE username='".$old_name."'";
					mysqli_query($conn, $sql);
				}
			}
			if(isset($_POST['updateSurname']))
			{	
				if(isset($_POST['surname'])){
					//update prenume
					$surname=$_POST['surname'];
					$sql="UPDATE users SET lastname='".$surname."' WHERE username='".$old_name."'";
					mysqli_query($conn, $sql);
				}
			}
			if(isset($_POST['updateUsername']))
			{	
				if(isset($_POST['username'])){
					//update username
					$username=$_POST['username'];
					$sql="UPDATE users SET username='".$username."' WHERE username='".$old_name."'";
					$_SESSION['login']=$username;
					mysqli_query($conn, $sql);
				}
			}
			if(isset($_POST['updateCountry']))
			{	
				if(isset($_POST['country'])){
					//update tara
					$country=$_POST['country'];
					$sql="UPDATE users SET country='".$country."' WHERE username='".$old_name."'";
					mysqli_query($conn, $sql);
				}
			}
			if(isset($_POST['updateEmail']))
			{	
				if(isset($_POST['email'])){
					//update email
					$email=$_POST['email'];
					$sql="UPDATE users SET email='".$email."' WHERE username='".$old_name."'";
					mysqli_query($conn, $sql);
				}
			}
			if(isset($_POST['updatePassword']))
			{	
				if(isset($_POST['password'])){
					//update parola
					$password=$_POST['password'];
					$sql="UPDATE users SET pathinfo='".$password."' WHERE username='".$old_name."'";
					mysqli_query($conn, $sql);
				}
			}
			header("location:../profile.php");
		}
?>