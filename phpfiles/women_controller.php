<?php
    require_once 'database_con.php';
    mysqli_set_charset($conn,"utf8mb4");
    $sql = "SELECT * FROM recommendation WHERE gender = 'female'";
    $result = mysqli_query($conn, $sql);
    $i = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $id[$i] = $row["id_recommendation"];
        $name[$i] = $row["name"];
        $description[$i] = $row["description"];
        $imagePath[$i] = $row["imagePath"];
        $gender[$i] = $row["gender"];
        $event[$i] = $row["event"];
        $season[$i] = $row["season"];
        $style[$i] = $row["style"];
        $brand[$i] = $row["brand"];
        $color[$i] = $row["color"];
        $trends[$i] = $row["trends"];
        $i++;
    }

    function getProductsFromDatabase() {
        global $imagePath, $name, $id;
        $length = count($id);
        for($i = 0; $i < $length; $i++) {
            echo 
            "<div class=\"product-box\">
                <img src=$imagePath[$i] alt=\"ShoeImage\" />
                <div class=\"product-box-title\">
                    <p>$name[$i]</p>
                </div>
            </div>";
        }
    }

    function filterBrands() {
        global $brand;
        $brand = array_unique($brand);
        $length = count($brand);
        $brand = array_values($brand);
        for($i = 0; $i < $length; $i++) {
            echo "<li>$brand[$i]</li>";           
        }
    }

    function filterColors() {
        global $color;
        $color = array_unique($color);
        $length = count($color);
        $color = array_values($color);
        for($i = 0; $i < $length; $i++) {
            echo "<li>$color[$i]</li>";           
        }
    }

    function filterStyle() {
        global $style;
        $style = array_unique($style);
        $length = count($style);
        $style = array_values($style);
        for($i = 0; $i < $length; $i++) {
            echo "<li>$style[$i]</li>";           
        }
    }
?>