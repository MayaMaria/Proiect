<?php
    function getProductsFromDatabase() {
        require_once 'database_con.php';;
        $sql = "SELECT * FROM recommendations";
        $result = mysqli_query($conn, $sql);
        
        while($row = mysqli_fetch_assoc($result)) {
            $name = $row["name"];
            $description = $row["description"];
            $image_path = $row["image_path"];
            $gender = $row["gender"];
            $event = $row["event"];
            $season = $row["season"];
            $style = $row["style"];
            $brand = $row["brand"];
            $color = $row["color"];
            $trends = $row["trends"];

            if($gender == "M") {
                echo "<div class=\"product-box\">
                <img src=$image_path alt=\"ShoeImage\" />
                <div class=\"product-box-title\">
                <p>$name</p>
                </div>
            </div>";
            }
        }


    }
?>