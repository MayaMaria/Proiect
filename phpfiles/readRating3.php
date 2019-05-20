<?php

		require 'phpfiles/database_con.php';
		$sql = "SELECT  * FROM ratings WHERE id_suggestion='46'";
		$result = mysqli_query($conn,$sql);
			
			while($row = mysqli_fetch_assoc($result)) {
				$rating1_1=$row["rating1"];
				$rating2_1=$row["rating2"];
				$rating3_1=$row["rating3"];
				$rating4_1=$row["rating4"];
				$rating5_1=$row["rating5"];
			}
			
		$sql = "SELECT  * FROM ratings WHERE id_suggestion='47'";
		$result_1 = mysqli_query($conn,$sql);
			
			while($row = mysqli_fetch_assoc($result_1)) {
				$rating1_2=$row["rating1"];
				$rating2_2=$row["rating2"];
				$rating3_2=$row["rating3"];
				$rating4_2=$row["rating4"];
				$rating5_2=$row["rating5"];
			}
		
		$sql = "SELECT  * FROM ratings WHERE id_suggestion='48'";
		$result_2 = mysqli_query($conn,$sql);
			
			while($row = mysqli_fetch_assoc($result_2)) {
				$rating1_3=$row["rating1"];
				$rating2_3=$row["rating2"];
				$rating3_3=$row["rating3"];
				$rating4_3=$row["rating4"];
				$rating5_3=$row["rating5"];
			}
			
		$sql = "SELECT  * FROM ratings WHERE id_suggestion='50'";
		$result_2 = mysqli_query($conn,$sql);
			
			while($row = mysqli_fetch_assoc($result_2)) {
				$rating1_4=$row["rating1"];
				$rating2_4=$row["rating2"];
				$rating3_4=$row["rating3"];
				$rating4_4=$row["rating4"];
				$rating5_4=$row["rating5"];
			}
		
		$sql = "SELECT  * FROM ratings WHERE id_suggestion='54'";
		$result_2 = mysqli_query($conn,$sql);
			
			while($row = mysqli_fetch_assoc($result_2)) {
				$rating1_5=$row["rating1"];
				$rating2_5=$row["rating2"];
				$rating3_5=$row["rating3"];
				$rating4_5=$row["rating4"];
				$rating5_5=$row["rating5"];
			}
		
		$sql = "SELECT  * FROM ratings WHERE id_suggestion='55'";
		$result_2 = mysqli_query($conn,$sql);
			
			while($row = mysqli_fetch_assoc($result_2)) {
				$rating1_6=$row["rating1"];
				$rating2_6=$row["rating2"];
				$rating3_6=$row["rating3"];
				$rating4_6=$row["rating4"];
				$rating5_6=$row["rating5"];
			}
		
		$sql = "SELECT  * FROM ratings WHERE id_suggestion='56'";
		$result_2 = mysqli_query($conn,$sql);
			
			while($row = mysqli_fetch_assoc($result_2)) {
				$rating1_7=$row["rating1"];
				$rating2_7=$row["rating2"];
				$rating3_7=$row["rating3"];
				$rating4_7=$row["rating4"];
				$rating5_7=$row["rating5"];
			}
		
		$sql = "SELECT  * FROM ratings WHERE id_suggestion='59'";
		$result_2 = mysqli_query($conn,$sql);
			
			while($row = mysqli_fetch_assoc($result_2)) {
				$rating1_8=$row["rating1"];
				$rating2_8=$row["rating2"];
				$rating3_8=$row["rating3"];
				$rating4_8=$row["rating4"];
				$rating5_8=$row["rating5"];
			}

?>