<?php

	require_once 'phpfiles/database_con.php';
	 mysqli_set_charset($conn,"utf8mb4");
	$sql = "SELECT * FROM suggestions";
	$result = mysqli_query($conn,$sql);
	$i=0;
	while($row = mysqli_fetch_assoc($result)) {
		$id[$i]=$row["id_suggestion"];
		$title[$i]=$row["title"];
		$gender[$i]=$row["gender"];
		$description[$i]=$row["description"];
		$imagePath[$i]=$row["imagePath"];	
			$i++;
    }
	
	$sql = "SELECT * FROM recommendation";
    $result = mysqli_query($conn, $sql);
    $j = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $id_r[$j] = $row["id_recommendation"];
        $name_r[$j] = $row["name"];
        $description_r[$j] = $row["description"];
        $imagePath_r[$j] = $row["imagePath"];
        $gender_r[$j] = $row["gender"];
        $event_r[$j] = $row["event"];
        $season_r[$j] = $row["season"];
        $style_r[$j] = $row["style"];
        $brand_r[$j] = $row["brand"];
        $color_r[$j] = $row["color"];
        $trends_r[$j] = $row["trends"];
        $j++;
    }
	
	function showSuggestions(){
		global $imagePath, $id,$gender,$description,$title;
        $length = count($id);
		for($i=0;$i<$length;$i++){
			echo "<tr>
					<th>$id[$i]</th>
					<th>$title[$i]</th>
					<th>$gender[$i]</th>
					<th>$description[$i]</th>
					<th>$imagePath[$i]</th>
				</tr>";
			
		}
	}
	
	function showRecommendations(){
		global $imagePath_r, $id_r,$gender_r,$description_r,$name_r,$event_r,$season_r,$style_r,$brand_r,$color_r,$trends_r;
        $length = count($id_r);
		for($i=0;$i<$length;$i++){
			echo "<tr>
					<th>$id_r[$i]</th>
					<th>$name_r[$i]</th>
					<th>$description_r[$i]</th>
					<th>$imagePath_r[$i]</th>
					<th>$event_r[$i]</th>
					<th>$season_r[$i]</th>
					<th>$style_r[$i]</th>
					<th>$color_r[$i]</th>
					<th>$trends_r[$i]</th>
				</tr>";
			
		}
	}
	
?>