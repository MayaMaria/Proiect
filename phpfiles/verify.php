<?php

	require 'database_con.php';
	$errorMSG = "";
	$sql="SELECT * FROM users WHERE username = '".$_POST["username"]."'";
	$result = mysqli_query($conn,$sql);
	$resultNumberRows = mysqli_num_rows($result);
			
	if($resultNumberRows > 0  )
		{
			$errorMSG .= "<li>User already exist.Be creative!!!!!</li>";
		}
	else
		$username = $_POST["username"];
	
	
	 if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
		{
			$errorMSG .= "<li>Invalid email format.Are you trying to lie to us ?!</li>";
		}
	else 
		$email = $_POST["email"];
		
	

	$length=strlen($_POST['password']);
	if($length <10 )
		$errorMSG .= "<li>Password too short.Must be at least 10 characters,sorry ! :(</li>";	
	else
	{
		if ($_POST['password']!=$_POST['passwordRepeat'])
			$errorMSG .= "<li>Passwords dont't match</li>";
		else
			$password=$_POST['password'];
	}
	
	if(empty($errorMSG)){
		$msg = "Name: ".$username.", Email: ".$email;
		echo json_encode(['code'=>200, 'msg'=>$msg]);
		exit;
	}

	
	echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
	$errorMSG="";

?>