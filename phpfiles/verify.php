<?php

	require 'database_con.php';
	$errorMSG = "";
	$sql="SELECT * FROM users WHERE username = '".$_POST["username"]."'";
	$result = mysqli_query($conn,$sql);
	$resultNumberRows = mysqli_num_rows($result);
	$typeUser="user";
	$mesaj = "";

	//in caz de sunt campurile goale afisam mesaj de eroare
	if(empty($_POST["profile"]) || empty($_POST["name"]) || empty($_POST["surname"]) || empty($_POST["country"]))
		$errorMSG = "<p><img style='height:1%; width:1%;' src='imagini/wrong.jpg'/>Incomplete fields</p>";
	else
		{	
			$profile1 = $_POST["profile"];
			$name= $_POST["name"];
			$surname= $_POST["surname"];
			$country = $_POST["country"];
			
			//username-ul sa nu fie gol
			if (empty($_POST["username"])) {
				$errorMSG = "<p><img style='height:1%; width:1%;' src='imagini/wrong.jpg'/>Username is required</p>";
			} else 	
			if($resultNumberRows > 0  )
				{
					//in caz ca mai exista deja username-ul se afiseaza mesaj de eroare
					$errorMSG = "<p><img style='height:1%; width:1%;' src='imagini/wrong.jpg'/>User already exists.Be creative!!!!!</p>";
				}
			else
				//daca totul e in regula salvam username-ul
				$username = $_POST["username"];

			//se verifica daca email-ul este gol
			if (empty($_POST["email"])) {
				$errorMSG .= "<p><img style='height:1%; width:1%;' src='imagini/wrong.jpg'/>Email is required</p>";
			} 
			else 
				//verificam daca email este valid
				if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
				{
					//in caz ca nu este valid se afiseaza mesaj de eroare
					$errorMSG .= "<p><img style='height:1%; width:1%;' src='imagini/wrong.jpg'/>Invalid email format.Are you trying to lie ?!</p>";
				}
				else 
					//daca totul e in regula salvam email-ul
					$email = $_POST["email"];
				
			//se verifica daca parola este goala
			if (empty($_POST["password"]) || empty($_POST["passwordRepeat"])) {
				$errorMSG .= "<p><img style='height:1%; width:1%;' src='imagini/wrong.jpg'/>Password is required</p>";
			} 
			else 
			{	//se verifica lungimea parolei
				$length=strlen($_POST['password']);
				if($length <= 7 )
					//in caz ca este prea scurta se afieaza mesaj de eroare
					$errorMSG .= "<p><img style='height:1%; width:1%;' src='imagini/wrong.jpg'/>Password too short.Must be at least 7 characters,sorry ! :(</p>";	
				else
				{
					//se verifica ca repetarea parolei sa corespunda cu parola
					if ($_POST['password']!=$_POST['passwordRepeat'])
						$errorMSG .= "<p><img style='height:1%; width:1%;' src='imagini/wrong.jpg'/>Passwords dont't match</p>";
					else
						$password=$_POST['password'];
				}
			}

			//daca nu avem erori se introduce noul user in baz de date
			if(empty($errorMSG)){
				$profile=substr($profile1,12);		
				$sql = "INSERT INTO users (username,password,firstname,lastname,typeUser,email,country,profileImage) VALUES ('".$username."','".$password."', '".$name."','".$surname."','".$typeUser."','".$email."','".$country."','".$profile."')";
				mysqli_query($conn, $sql);
				$mesaj ="<p><img src='./imagini/good.png' style='height:15%; width:10%;'>Registration complete!<a href='login.php'>Login now</a></p>";
				echo json_encode(['code'=>200, 'msg'=>$mesaj]);
				exit;
			}
		
		}
	//trimitem mesajul cu erori
	echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
?>