<?php 
	 require_once 'extract_date.php';
?>
	  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/png" href="imagini/logo2.png" />
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <link rel="stylesheet" type="text/css" href="styles/buton.css" />
	<link rel="stylesheet" type="text/css" href="styles/galery.css" />
    <link rel="stylesheet" type="text/css" href="styles/footer.css" />
    <link rel="stylesheet" type="text/css" href="styles/shop.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="styles/login.css" />
    <link
      rel="stylesheet"
      href="fonts/material-icon/css/material-design-iconic-font.min.css"
    />
    <title>M&A Inspiration</title>
  </head>

  <body>
    <header id="top">
      <img src="imagini/banner2.png" alt="M&A Inspiration" class="banner" />
      <h1>M&A Inspiration</h1>
    </header>

    <div class="navbar">
      <a href="index.php">
        <p>Home</p>
      </a>
      <div class="dropdown">
        <button class="dropbtn">
          Men
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <div class="row_submenu">
            <div class="column_submenu">
              <h3>Events</h3>
              <a href="men.php">Interview Shoes</a>
              <a href="men.php">Wedding Shoes</a>
              <a href="men.php">Evening Events Shoes</a>
              <a href="men.html">Graduation Shoes</a>
              <h3>Trends</h3>
              <a href="men.php">Sweet Sneaks</a>
              <a href="men.php">'90s Remix</a>
              <a href="men.php">Looks We Love</a>
            </div>
            <div class="column_submenu">
              <h3>Seasons</h3>
              <a href="men.php">Summer</a>
              <a href="men.php">Autumn</a>
              <a href="men.php">Winter</a>
              <a href="men.php">Spring</a>
              <h3>New Arrivals</h3>
              <a href="men.php">Nike Airmax</a>
              <a href="men.php">Gucci</a>
              <a href="men.php">Supreme</a>
              <a href="men.php" style="padding-top: 15px;"><b>ALL</b></a>
            </div>
          </div>
        </div>
      </div>

      <div class="dropdown">
        <button class="dropbtn">
          Women
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <div class="row_submenu">
            <div class="column_submenu">
              <h3>Events</h3>
              <a href="women.php">Interview Shoes</a>
              <a href="women.php">Wedding Shoes</a>
              <a href="women.php">Evening Events Shoes</a>
              <a href="women.php">Graduation Shoes</a>
              <h3>Trends</h3>
              <a href="women.php">Sweet Sneaks</a>
              <a href="women.php">'90s Remix</a>
              <a href="women.php">Looks We Love</a>
            </div>
            <div class="column_submenu">
              <h3>Seasons</h3>
              <a href="women.php">Summer</a>
              <a href="women.php">Autumn</a>
              <a href="women.php">Winter</a>
              <a href="women.php">Spring</a>
              <h3>New Arrivals</h3>
              <a href="women.php">Nike Airmax</a>
              <a href="women.php">Gucci</a>
              <a href="women.php">Supreme</a>
              <a href="women.php" style="padding-top: 15px;"><b>ALL</b></a>
            </div>
          </div>
        </div>
      </div>

      <div class="dropdown">
        <button class="dropbtn">
          Children
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <div class="row_submenu">
            <div class="column_submenu">
              <h3>Events</h3>
              <a href="men.php">Interview Shoes</a>
              <a href="men.php">Birthday Shoes</a>
              <a href="men.php">Evening Events Shoes</a>
              <a href="men.php">Christening Shoes</a>
              <h3>Trends</h3>
              <a href="children.php">Sweet Sneaks</a>
              <a href="children.php">'90s Remix</a>
              <a href="children.php">Looks We Love</a>
            </div>
            <div class="column_submenu">
              <h3>Seasons</h3>
              <a href="children.php">Summer</a>
              <a href="children.php">Autumn</a>
              <a href="children.php">Winter</a>
              <a href="children.php">Spring</a>
              <h3>New Arrivals</h3>
              <a href="children.php">Nike Airmax</a>
              <a href="children.php">Gucci</a>
              <a href="children.php">Supreme</a>
              <a href="children.php" style="padding-top: 15px;"><b>ALL</b></a>
            </div>
          </div>
        </div>
      </div>
      <a href="aboutUs.php">
        <p>About Us</p>
      </a>
	<?php echo $message?>
	 
	  
</div>