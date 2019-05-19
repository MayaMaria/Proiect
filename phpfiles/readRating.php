<?php

		require 'phpfiles/database_con.php';
		$sql = "SELECT  * FROM ratings WHERE id_suggestion='38'";
		$result = mysqli_query($conn,$sql);
			
			while($row = mysqli_fetch_assoc($result)) {
				$rating1_1=$row["rating1"];
				$rating2_1=$row["rating2"];
				$rating3_1=$row["rating3"];
				$rating4_1=$row["rating4"];
				$rating5_1=$row["rating5"];
			}

?>