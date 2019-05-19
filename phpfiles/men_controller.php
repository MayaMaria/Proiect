<?php
    require_once 'database_con.php';
    mysqli_set_charset($conn,"utf8mb4");
    $sql = "SELECT * FROM recommendation WHERE gender = 'male'";
    $result = mysqli_query($conn, $sql);

    function getProductsFromDatabase() {
        global $result;
        while($row = mysqli_fetch_assoc($result)) {
            $name = $row["name"];
            $description = $row["description"];
            $imagePath = $row["imagePath"];
            $gender = $row["gender"];
            $event = $row["event"];
            $season = $row["season"];
            $style = $row["style"];
            $brand = $row["brand"];
            $color = $row["color"];
            $trends = $row["trends"];
            
            echo 
            "<div class=\"product-box\">
                <img src=$imagePath alt=\"ShoeImage\" />
                <div class=\"product-box-title\">
                    <p>$name</p>
                </div>
            </div>";
        }
    }
?>