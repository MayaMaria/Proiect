<?php

require_once 'phpfiles/database_con.php';
$sql = "SELECT  * FROM ratings WHERE name='stars2'";
	$result = mysqli_query($conn,$sql);
	
	while($row = mysqli_fetch_assoc($result)) {
        $rating1=$row["rating1"];
		$rating2=$row["rating2"];
		$rating3=$row["rating3"];
		$rating4=$row["rating4"];
		$rating5=$row["rating5"];
    }

?>