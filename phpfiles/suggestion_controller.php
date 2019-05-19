<?php 
	
	function  getSuggestion($name){
			require 'phpfiles/database_con.php';
			mysqli_set_charset($conn,"utf8mb4");
			$sql = "SELECT * FROM suggestions WHERE title='".$name."'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$description = $row["description"];
			echo "<p class='message'>
						".$description."</p>";
		
	}
	
	function getSuggestionPhoto($name)
	{
			require 'phpfiles/database_con.php';
			mysqli_set_charset($conn,"utf8mb4");
			$sql = "SELECT * FROM suggestions WHERE title='".$name."'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$description = $row["description"];
			$imagePath=$row["imagePath"];
			echo  "<img src='".$imagePath."' alt='".$description."' style='width:100%' />
          <p>".$description."</p>";
	}

?>