<?php	
	if(isset($_POST['register']))
	{
		require 'database_con.php';
		if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['country']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email'])
			&& isset($_POST['repeatPass'])){
				if(isset($_POST['profile']))
					$profile=$_POST['profile'];
		
			$name=$_POST['name'];
			$surname=$_POST['surname'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$country=$_POST['country'];
			$email=$_POST['email'];
			$repeatPassword=$_POST['repeatPass'];
			$typeUser="user";
		
			
			$sql="SELECT * FROM users WHERE username = '".$username."'";
	
			$result = mysqli_query($conn,$sql);
			$resultNumberRows = mysqli_num_rows($result);
			
			if($resultNumberRows == 1 )
			{
				header("location:../createAccount.php?UserExist=User already exists!");
			}
			else {
				
				if( $password != $repeatPassword && !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email))
				{
					header("location:../createAccount.php?InvalidEmailPas=Invalid email and incorect password!Try again!");
				}
				else
				{
					if($password != $repeatPassword)
					{
						header("location:../createAccount.php?InvalidPass=Incorrect password!Try again!");
					}
					else
						{
							if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){
								header("location:../createAccount.php?InvalidEmail=Invalid email!Try again!");
							}
						
							else
							
							{
								$sql = "INSERT INTO users (username,password,firstname,lastname,typeUser,email,country,profileImage) VALUES ('".$username."','".$password."', '".$name."','".$surname."','".$typeUser."','".$email."','".$country."','".$profile."')";

									if (mysqli_query($conn, $sql)) {
										header("location:../login.php?LoginR=Registration complete! Login now");
									} 

									mysqli_close($conn);
							}
						}
					
				}
			}
			
		}
	}
	else
	{
		exit();
	}
	
?>