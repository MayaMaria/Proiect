<?php

		require 'phpfiles/database_con.php';
		$sql = "SELECT  * FROM ratings WHERE id_suggestion='42'";
		$result = mysqli_query($conn,$sql);
			
			while($row = mysqli_fetch_assoc($result)) {
				$rating1_1=$row["rating1"];
				$rating2_1=$row["rating2"];
				$rating3_1=$row["rating3"];
				$rating4_1=$row["rating4"];
				$rating5_1=$row["rating5"];
			}
			
		$sql = "SELECT  * FROM ratings WHERE id_suggestion='43'";
		$result_1 = mysqli_query($conn,$sql);
			
			while($row = mysqli_fetch_assoc($result_1)) {
				$rating1_2=$row["rating1"];
				$rating2_2=$row["rating2"];
				$rating3_2=$row["rating3"];
				$rating4_2=$row["rating4"];
				$rating5_2=$row["rating5"];
			}
		
		$sql = "SELECT  * FROM ratings WHERE id_suggestion='44'";
		$result_2 = mysqli_query($conn,$sql);
			
			while($row = mysqli_fetch_assoc($result_2)) {
				$rating1_3=$row["rating1"];
				$rating2_3=$row["rating2"];
				$rating3_3=$row["rating3"];
				$rating4_3=$row["rating4"];
				$rating5_3=$row["rating5"];
			}
			
		

?>