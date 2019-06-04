<?php
	require_once 'database_con.php';
	mysqli_set_charset($conn, "utf8mb4");
	function sendMail() {
		global $conn;
		ini_set('SMTP','localhost');
		ini_set('smtp_port', 25);
		ini_set('sendmail_from', 'footwear@subscription.com'); 

		$to = $_POST["Email"];
		$subject = "Be inspired daily!";

		//send random suggestions
		$subjectChosen = $_POST["subjects"];
		$randomID = rand(1, 25);
		if($subjectChosen == "all") {
			$sql = sprintf("SELECT * FROM suggestions WHERE id_suggestion=%d;", $randomID);
		}
		else if($subjectChosen == "women") {
			$sql = sprintf("SELECT * FROM suggestions WHERE id_suggestion=%d AND gender='female';", $randomID);
		}
		else if($subjectChosen == "men") {
			$sql = sprintf("SELECT * FROM suggestions WHERE id_suggestion=%d AND gender='male';", $randomID);
		}
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$title = $row["title"];
		$description = $row["description"];
		$image = $row["imagePath"];
		$message = chunk_split(base64_encode($description)); // encoded because message is too long
		
		$headers = "Content-Transfer-Encoding: base64\r\n\r\n";
		mail($to, $subject, $message, $headers);
	}

	sendMail();
?>