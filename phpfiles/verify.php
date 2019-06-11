<?php

	require 'database_con.php';
	$errorMSG = "";
	$sql="SELECT * FROM users WHERE username = '".$_POST["username"]."'";
	$result = mysqli_query($conn,$sql);
	$resultNumberRows = mysqli_num_rows($result);
	$typeUser="user";
	$mesaj = "";
	

	
	if(empty($_POST["profile"]) || empty($_POST["name"]) || empty($_POST["surname"]) || empty($_POST["country"]))
		$errorMSG = "<p><img style='height:1%; width:1%;' src='imagini/wrong.jpg'/>Incomplete fields</p>";
	else
		{	
			$profile1 = $_POST["profile"];
			$name= $_POST["name"];
			$surname= $_POST["surname"];
			$country = $_POST["country"];
			if (empty($_POST["username"])) {
				$errorMSG = "<p><img style='height:1%; width:1%;' src='imagini/wrong.jpg'/>Username is required</p>";
			} else 	
			if($resultNumberRows > 0  )
				{
					$errorMSG = "<p><img style='height:1%; width:1%;' src='imagini/wrong.jpg'/>User already exists.Be creative!!!!!</p>";
				}
			else
				$username = $_POST["username"];

			
			if (empty($_POST["email"])) {
				$errorMSG .= "<p><img style='height:1%; width:1%;' src='imagini/wrong.jpg'/>Email is required</p>";
			} 
			else 
				if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
				{
					$errorMSG .= "<p><img style='height:1%; width:1%;' src='imagini/wrong.jpg'/>Invalid email format.Are you trying to lie ?!</p>";
				}
				else 
					$email = $_POST["email"];
				
			
			if (empty($_POST["password"]) || empty($_POST["passwordRepeat"])) {
				$errorMSG .= "<p><img style='height:1%; width:1%;' src='imagini/wrong.jpg'/>Password is required</p>";
			} 
			else 
			{
				$length=strlen($_POST['password']);
				if($length <= 7 )
					$errorMSG .= "<p><img style='height:1%; width:1%;' src='imagini/wrong.jpg'/>Password too short.Must be at least 7 characters,sorry ! :(</p>";	
				else
				{
					if ($_POST['password']!=$_POST['passwordRepeat'])
						$errorMSG .= "<p><img style='height:1%; width:1%;' src='imagini/wrong.jpg'/>Passwords dont't match</p>";
					else
						$password=$_POST['password'];
				}
			}

			
			if(empty($errorMSG)){
				$profile=substr($profile1,12);		
				$sql = "INSERT INTO users (username,password,firstname,lastname,typeUser,email,country,profileImage) VALUES ('".$username."','".$password."', '".$name."','".$surname."','".$typeUser."','".$email."','".$country."','".$profile."')";
				mysqli_query($conn, $sql);
				$mesaj ="<p><img src='./imagini/good.png' style='height:15%; width:10%;'>Registration complete!<a href='login.php'>Login now</a></p>";
				echo json_encode(['code'=>200, 'msg'=>$mesaj]);
				exit;
			}
		
		}
	echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
?>