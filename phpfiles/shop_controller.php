<?php
    require_once 'database_con.php';
    mysqli_set_charset($conn,"utf8mb4");

    $sql = sprintf("SELECT * FROM recommendation WHERE gender = '%s';", $_GET["gender"]);
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

    $base_url = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on' ? 'https' : 'http' ) . '://' .  $_SERVER['HTTP_HOST'];
    $actual_link = $base_url . $_SERVER["REQUEST_URI"];

    function getProductsFromDatabase() {
        global $sql;
        $whereClause = '';
        if(isset($_GET["brand"])) {
            $whereClause = sprintf(" AND brand = '%s';", $_GET["brand"]);
        }
        if(isset($_GET["color"])) {
            $whereClause = sprintf(" AND color = '%s';", $_GET["color"]);
        }
        if(isset($_GET["style"])) {
            $whereClause = sprintf(" AND style = '%s';", $_GET["style"]);
        }

        $sql = rtrim($sql, ';');
        $sql = $sql . $whereClause;

        showProducts();
    }

    function showProducts() {
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
        global $brand, $actual_link;
        $brand = array_unique($brand);
        $length = count($brand);
        $brand = array_values($brand);
        for($i = 0; $i < $length; $i++) {
            echo 
            "<input type=\"radio\" name=\"brand\" value=\"$brand[$i]\">$brand[$i] <br>"; 
        }
    }

    function filterColors() {
        global $color, $actual_link;
        $color = array_unique($color);
        $length = count($color);
        $color = array_values($color);
        for($i = 0; $i < $length; $i++) {
            echo 
            "<input type=\"radio\" name=\"color\" value=\"$color[$i]\">$color[$i] <br>";          
        }
    }

    function filterStyle() {
        global $style, $actual_link;
        $style = array_unique($style);
        $length = count($style);
        $style = array_values($style);
        for($i = 0; $i < $length; $i++) {
            echo 
            "<input type=\"radio\" name=\"style\" value=\"$style[$i]\">$style[$i] <br>";        
        }
    }
?>