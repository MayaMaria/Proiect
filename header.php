<?php 
	 session_start();
	
	  if(isset($_SESSION['login'])){
		
		$message= "<a style='border: 2px solid yellow; border-radius: 30px;'>{$_SESSION['login']}</a> <a href='logout.php?logout'>Logout</a>";
	  }
	  else
	  {
		   $message= " <a href='login.php'>
					<p>Login</p>
				</a>";
	  }
	
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
              <a href="men.html">Interview Shoes</a>
              <a href="men.html">Wedding Shoes</a>
              <a href="men.html">Evening Events Shoes</a>
              <a href="men.html">Graduation Shoes</a>
              <h3>Trends</h3>
              <a href="men.html">Sweet Sneaks</a>
              <a href="men.html">'90s Remix</a>
              <a href="men.html">Looks We Love</a>
            </div>
            <div class="column_submenu">
              <h3>Seasons</h3>
              <a href="men.html">Summer</a>
              <a href="men.html">Autumn</a>
              <a href="men.html">Winter</a>
              <a href="men.html">Spring</a>
              <h3>New Arrivals</h3>
              <a href="men.html">Nike Airmax</a>
              <a href="men.html">Gucci</a>
              <a href="men.html">Supreme</a>
              <a href="men.html" style="padding-top: 15px;"><b>ALL</b></a>
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
              <a href="women.html">Interview Shoes</a>
              <a href="women.html">Wedding Shoes</a>
              <a href="women.html">Evening Events Shoes</a>
              <a href="women.html">Graduation Shoes</a>
              <h3>Trends</h3>
              <a href="women.html">Sweet Sneaks</a>
              <a href="women.html">'90s Remix</a>
              <a href="women.html">Looks We Love</a>
            </div>
            <div class="column_submenu">
              <h3>Seasons</h3>
              <a href="women.html">Summer</a>
              <a href="women.html">Autumn</a>
              <a href="women.html">Winter</a>
              <a href="women.html">Spring</a>
              <h3>New Arrivals</h3>
              <a href="women.html">Nike Airmax</a>
              <a href="women.html">Gucci</a>
              <a href="women.html">Supreme</a>
              <a href="women.html" style="padding-top: 15px;"><b>ALL</b></a>
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
              <a href="men.html">Interview Shoes</a>
              <a href="men.html">Birthday Shoes</a>
              <a href="men.html">Evening Events Shoes</a>
              <a href="men.html">Christening Shoes</a>
              <h3>Trends</h3>
              <a href="children.html">Sweet Sneaks</a>
              <a href="children.html">'90s Remix</a>
              <a href="children.html">Looks We Love</a>
            </div>
            <div class="column_submenu">
              <h3>Seasons</h3>
              <a href="children.html">Summer</a>
              <a href="children.html">Autumn</a>
              <a href="children.html">Winter</a>
              <a href="children.html">Spring</a>
              <h3>New Arrivals</h3>
              <a href="children.html">Nike Airmax</a>
              <a href="children.html">Gucci</a>
              <a href="children.html">Supreme</a>
              <a href="children.html" style="padding-top: 15px;"><b>ALL</b></a>
            </div>
          </div>
        </div>
      </div>
      <a href="aboutUs.html">
        <p>About Us</p>
      </a>
	<?php echo $message?>
	 
	  
</div>