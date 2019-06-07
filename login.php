<?php 
	 require_once './phpfiles/extract_date.php';
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
    <link rel="stylesheet" type="text/css" href="styles/shop.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
	 <link rel="stylesheet" href="styles/login.css" />
	
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
              <a href="shop.php?gender=male&event=interview">Interview Shoes</a>
              <a href="shop.php?gender=male&event=wedding">Wedding Shoes</a>
              <a href="shop.php?gender=male&event=evening">Evening Events Shoes</a>
              <a href="shop.php?gender=male&event=graduation">Graduation Shoes</a>
              <h3>Trends</h3>
              <a href="shop.php?gender=male&trends=sweetsneaks">Sweet Sneaks</a>
              <a href="shop.php?gender=male&trends=90remix">'90s Remix</a>
              <a href="shop.php?gender=male&trends=lookslove">Looks We Love</a>
              <a href="shop.php?gender=male&trends=modern">Modern</a>
            </div>
            <div class="column_submenu">
              <h3>Seasons</h3>
              <a href="shop.php?gender=male&season=summer">Summer</a>
              <a href="shop.php?gender=male&season=autumn">Autumn</a>
              <a href="shop.php?gender=male&season=winter">Winter</a>
              <a href="shop.php?gender=male&season=spring">Spring</a>
              <h3>New Arrivals</h3>
              <a href="shop.php?gender=male&brand=nikeair">Nike Airmax</a>
              <a href="shop.php?gender=male&brand=gucci">Gucci</a>
              <a href="shop.php?gender=male&brand=supreme">Supreme</a>

              <a href="shop.php?gender=male" style="padding-top: 15px;"><b>ALL</b></a>
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
              <a href="shop.php?gender=female&event=interview">Interview Shoes</a>
              <a href="shop.php?gender=female&event=wedding">Wedding Shoes</a>
              <a href="shop.php?gender=female&event=evening">Evening Events Shoes</a>
              <a href="shop.php?gender=female&event=graduation">Graduation Shoes</a>
              <h3>Trends</h3>
              <a href="shop.php?gender=female&trends=sweetsneaks">Sweet Sneaks</a>
              <a href="shop.php?gender=female&trends=90remix">'90s Remix</a>
              <a href="shop.php?gender=female&trends=lookslove">Looks We Love</a>
              <a href="shop.php?gender=female&trends=modern">Modern</a>
            </div>
            <div class="column_submenu">
              <h3>Seasons</h3>
              <a href="shop.php?gender=female&season=summer">Summer</a>
              <a href="shop.php?gender=female&season=autumn">Autumn</a>
              <a href="shop.php?gender=female&season=winter">Winter</a>
              <a href="shop.php?gender=female&season=spring">Spring</a>
              <h3>New Arrivals</h3>
              <a href="shop.php?gender=female&brand=nikeair">Nike Airmax</a>
              <a href="shop.php?gender=female&brand=gucci">Gucci</a>
              <a href="shop.php?gender=female&brand=supreme">Supreme</a>
              <a href="shop.php?gender=female" style="padding-top: 15px;"><b>ALL</b></a>
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
              <a href="shop.php?gender=child&event=interview">Interview Shoes</a>
              <a href="shop.php?gender=child&event=wedding">Wedding Shoes</a>
              <a href="shop.php?gender=child&event=evening">Evening Events Shoes</a>
              <a href="shop.php?gender=child&event=graduation">Graduation Shoes</a>
              <h3>Trends</h3>
              <a href="shop.php?gender=child&trends=sweetsneaks">Sweet Sneaks</a>
              <a href="shop.php?gender=child&trends=90remix">'90s Remix</a>
              <a href="shop.php?gender=child&trends=lookslove">Looks We Love</a>
              <a href="shop.php?gender=child&trends=modern">Modern</a>
            </div>
            <div class="column_submenu">
              <h3>Seasons</h3>
              <a href="shop.php?gender=child&season=summer">Summer</a>
              <a href="shop.php?gender=child&season=autumn">Autumn</a>
              <a href="shop.php?gender=child&season=winter">Winter</a>
              <a href="shop.php?gender=child&season=spring">Spring</a>
              <h3>New Arrivals</h3>
              <a href="shop.php?gender=child&brand=nikeair">Nike Airmax</a>
              <a href="shop.php?gender=child&brand=gucci">Gucci</a>
              <a href="shop.php?gender=child&brand=supreme">Supreme</a>
              <a href="shop.php?gender=child" style="padding-top: 15px;"><b>ALL</b></a>
            </div>
          </div>
        </div>
      </div>
      <a href="aboutUs.php">
        <p>About Us</p>
      </a>
	<?php echo $message?>
	 
	  
</div>
    <div class="main">
      <section class="sign-in">
        <div class="container">
          <div class="signin-content">
            <div class="signin-image">
              <figure>
                <img src="imagini/draw.jpg" alt="sing up image" />
              </figure>
              <a href="createAccount.php" class="signup-image-link"
                >Create an account</a
              >
            </div>

			
            <div class="signin-form">
			<?php
			if(@$_GET['LoginR'] == true)
					{
						?>
						<div>
							<img style="height:15%; width:10%;" src="imagini/good.png"/>
							<h4><?php echo $_GET['LoginR']?></h4>
						</div>
						
					<?php
					}
			?>
              <h2 class="form-title">Sign up</h2>
			  
			  
				<?php 
					if(@$_GET['InvalidLogin'] == true)
					{
						?>
						<div>
							<img style="height:10%; width:5%;" src="imagini/wrong.jpg"/>
							<?php echo $_GET['InvalidLogin']?>
						</div>
						
					<?php
					}			
				?>
			
              <form class="register-form" id="login-form" method="POST" action="phpfiles/validate.php">
                <div class="form-group">
                  
                  <input
                    type="text"
                    name="your_name"
                    id="your_name"
                    placeholder="Username"
					required
                  />
                </div>
                <div class="form-group">
                  
                  <input
                    type="password"
                    name="your_pass"
                    id="your_pass"
                    placeholder="Password"
					required
                  />
                </div>
                <div class="form-group form-button">
                  <input
                    type="submit"
                    name="signin"
                    id="signin"
                    class="form-submit"
                    value="Log in"
	
                  />
                </div>
              </form>		  
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
