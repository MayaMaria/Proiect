<?php
    require_once 'database_con.php';
    mysqli_set_charset($conn,"utf8mb4");

    $sql = sprintf("SELECT * FROM recommendation WHERE gender = '%s';", $_GET["gender"]);
    $base_url = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on' ? 'https' : 'http' ) . '://' .  $_SERVER['HTTP_HOST'];
    $actual_link = $base_url . $_SERVER["REQUEST_URI"];
    global $id, $name, $imagePath, $description, $gender, $event, $season, $style, $color, $trends, $brand;
    global $allColors, $allBrands, $allStyles;

    function getFilters() {
        global $conn, $sql, $allColors, $allBrands, $allStyles, $allTrends, $allSeasons;
        $result = mysqli_query($conn, $sql);
        $i = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $allColors[$i] = $row["color"];
            $allBrands[$i] = $row["brand"];
            $allStyles[$i] = $row["style"];
            $allTrends[$i] = $row["trends"];
            $allSeasons[$i] = $row["season"];
            $i++;
        }
    }

    function getProductsFromDatabase() {
        global $sql, $conn, $id, $name, $imagePath, $description, $gender, $event, $season, $style, $color, $trends, $brand;
        $whereClause = '';
        if(isset($_GET["brand"])) {
            if($_GET["brand"] == "none") $whereClause = ";";
            $whereClause = sprintf(" AND brand = '%s';", $_GET["brand"]);
        }
        if(isset($_GET["color"])) {
            if($_GET["color"] == "none") $whereClause = ";";
            $whereClause = sprintf(" AND color = '%s';", $_GET["color"]);
        }
        if(isset($_GET["style"])) {
            if($_GET["style"] == "none") $whereClause = ";";
            $whereClause = sprintf(" AND style = '%s';", $_GET["style"]);
        }
        if(isset($_GET["event"])) {
            $whereClause = sprintf(" AND event = '%s';", $_GET["event"]);
        }
        if(isset($_GET["trends"])) {
            $whereClause = sprintf(" AND trends = '%s';", $_GET["trends"]);
        }
        if(isset($_GET["season"])) {
            $whereClause = sprintf(" AND season = '%s';", $_GET["season"]);
        }

        $sql = rtrim($sql, ';');
        $sql = $sql . $whereClause;

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
        global $allBrands, $actual_link;
        $allBrands = array_unique($allBrands);
        $length = count($allBrands);
        $allBrands = array_values($allBrands);
        for($i = 0; $i < $length; $i++) {
            echo 
            "<input type=\"radio\" name=\"brand\" value=\"$allBrands[$i]\">$allBrands[$i] <br>"; 
        }
    }

    function filterColors() {
        global $actual_link, $allColors;
        $allColors = array_unique($allColors);
        $length = count($allColors);
        $allColors = array_values($allColors);
        for($i = 0; $i < $length; $i++) {
            echo 
            "<input type=\"radio\" name=\"color\" value=\"$allColors[$i]\">$allColors[$i] <br>";          
        }
    }

    function filterStyle() {
        global $allStyles, $actual_link;
        $allStyles = array_unique($allStyles);
        $length = count($allStyles);
        $allStyles = array_values($allStyles);
        for($i = 0; $i < $length; $i++) {
            echo 
            "<input type=\"radio\" name=\"style\" value=\"$allStyles[$i]\">$allStyles[$i] <br>";        
        }
    }

    function filterTrends() {
        global $allTrends, $actual_link;
        $allTrends = array_unique($allTrends);
        $length = count($allTrends);
        $allTrends = array_values($allTrends);
        for($i = 0; $i < $length; $i++) {
            echo 
            "<input type=\"radio\" name=\"trends\" value=\"$allTrends[$i]\">$allTrends[$i] <br>";        
        }
    }

    function filterSeasons() {
        global $allSeasons, $actual_link;
        $allSeasons = array_unique($allSeasons);
        $length = count($allSeasons);
        $allSeasons = array_values($allSeasons);
        for($i = 0; $i < $length; $i++) {
            echo 
            "<input type=\"radio\" name=\"season\" value=\"$allSeasons[$i]\">$allSeasons[$i] <br>";        
        }
    }
?>