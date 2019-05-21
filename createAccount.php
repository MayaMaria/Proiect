<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
	 <link rel="stylesheet" href="styles/account.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css"
      rel="stylesheet"
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
              <a href="shop.php?gender=male">Interview Shoes</a>
              <a href="shop.php?gender=male">Wedding Shoes</a>
              <a href="shop.php?gender=male">Evening Events Shoes</a>
              <a href="shop.php?gender=male">Graduation Shoes</a>
              <h3>Trends</h3>
              <a href="shop.php?gender=male">Sweet Sneaks</a>
              <a href="shop.php?gender=male">'90s Remix</a>
              <a href="shop.php?gender=male">Looks We Love</a>
            </div>
            <div class="column_submenu">
              <h3>Seasons</h3>
              <a href="shop.php?gender=male">Summer</a>
              <a href="shop.php?gender=male">Autumn</a>
              <a href="shop.php?gender=male">Winter</a>
              <a href="shop.php?gender=male">Spring</a>
              <h3>New Arrivals</h3>
              <a href="shop.php?gender=male">Nike Airmax</a>
              <a href="shop.php?gender=male">Gucci</a>
              <a href="shop.php?gender=male">Supreme</a>
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
              <a href="shop.php?gender=female">Interview Shoes</a>
              <a href="shop.php?gender=female">Wedding Shoes</a>
              <a href="shop.php?gender=female">Evening Events Shoes</a>
              <a href="shop.php?gender=female">Graduation Shoes</a>
              <h3>Trends</h3>
              <a href="shop.php?gender=female">Sweet Sneaks</a>
              <a href="shop.php?gender=female">'90s Remix</a>
              <a href="shop.php?gender=female">Looks We Love</a>
            </div>
            <div class="column_submenu">
              <h3>Seasons</h3>
              <a href="shop.php?gender=female">Summer</a>
              <a href="shop.php?gender=female">Autumn</a>
              <a href="shop.php?gender=female">Winter</a>
              <a href="shop.php?gender=female">Spring</a>
              <h3>New Arrivals</h3>
              <a href="shop.php?gender=female">Nike Airmax</a>
              <a href="shop.php?gender=female">Gucci</a>
              <a href="shop.php?gender=female">Supreme</a>
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
              <a href="shop.php?gender=child">Interview Shoes</a>
              <a href="shop.php?gender=child">Birthday Shoes</a>
              <a href="shop.php?gender=child">Evening Events Shoes</a>
              <a href="shop.php?gender=child">Christening Shoes</a>
              <h3>Trends</h3>
              <a href="shop.php?gender=child">Sweet Sneaks</a>
              <a href="shop.php?gender=child">'90s Remix</a>
              <a href="shop.php?gender=child">Looks We Love</a>
            </div>
            <div class="column_submenu">
              <h3>Seasons</h3>
              <a href="shop.php?gender=child">Summer</a>
              <a href="shop.php?gender=child">Autumn</a>
              <a href="shop.php?gender=child">Winter</a>
              <a href="shop.php?gender=child">Spring</a>
              <h3>New Arrivals</h3>
              <a href="shop.php?gender=child">Nike Airmax</a>
              <a href="shop.php?gender=child">Gucci</a>
              <a href="shop.php?gender=child">Supreme</a>
              <a href="shop.php?gender=child" style="padding-top: 15px;"><b>ALL</b></a>
            </div>
          </div>
        </div>
      </div>
      <a href="aboutUs.php">
        <p>About Us</p>
      </a>
      <a href="login.php">
        <p>Login</p>
      </a>
    </div>

    <div class="testbox">
      <h5 id="title">Registration</h5>
      <hr />
	  <?php 
	  
			if(@$_GET['InvalidPass'] == true)
			{
			?>
			<div>
				<img style="height:2%; width:2%;" src="imagini/wrong.jpg"/>
				<?php echo $_GET['InvalidPass']?>
				</div>
						
			<?php
			}
		
			
			if(@$_GET['InvalidEmail'] == true)
			{
			?>
			<div>
				<img style="height:2%; width:2%;" src="imagini/wrong.jpg"/>
				<?php echo $_GET['InvalidEmail']?>
				</div>
						
			<?php
			}
			
			
			if(@$_GET['InvalidEmailPas'] == true)
			{
			?>
			<div>
				<img style="height:2%; width:2%;" src="imagini/wrong.jpg"/>
				<?php echo $_GET['InvalidEmailPas']?>
				</div>
						
			<?php
			}
		?>
		

      <form  method="POST" action="phpfiles/register.php">
		<p>Choose your profile photo</p>
		<input type="file" name="profile">
	  <br>
        <label id="icon" for="name"><i class="icon-user"></i></label>
        <input 
			type="text" 
			name="name" 
			id="name" 
			placeholder="Name"
			value="<?php if(isset($_COOKIE['name'])) {echo $_COOKIE['name'];}?>"
			required />
        <label id="icon" for="name"><i class="icon-user"></i></label>
        <input
          type="text"
          name="surname"
          id="surname"
          placeholder="Surname"
		  value="<?php if(isset($_COOKIE['surname'])) {echo $_COOKIE['surname'];}?>"
          required
        />
        <label id="icon" for="name"><i class="icon-user"></i></label>
        <input
          type="text"
          name="username"
          id="username"
          placeholder="Username"
		  value="<?php if(isset($_COOKIE['usernameR'])) {echo $_COOKIE['usernameR'];}?>"
          required
        />
        <label id="icon" for="name"><i class="icon-envelope "></i></label>
        <input 
			type="text"
			name="email" 
			id="email" 
			placeholder="Email" 
			value="<?php if(isset($_COOKIE['email'])) {echo $_COOKIE['email'];}?>"
			required />
        <br />
        <label id="icon" for="name"><i class="icon-globe"></i></label>
        <input
          type="text"
          name="country"
          id="country"
          placeholder="Country"
		  value="<?php if(isset($_COOKIE['country'])) {echo $_COOKIE['country'];}?>"
          required
        />
        <label id="icon" for="name"><i class="icon-shield"></i></label>
        <input
          type="password"
          name="password"
          id="pass"
          placeholder="Password"
		  value="<?php if(isset($_COOKIE['pass'])) {echo $_COOKIE['pass'];}?>"
          required
        />
        <label id="icon" for="name"><i class="icon-shield"></i></label>
        <input
          type="password"
          name="repeatPass"
          id="passr"
          placeholder="Repeat password"
		  value="<?php if(isset($_COOKIE['rePass'])) {echo $_COOKIE['rePass'];}?>"
          required
        />
       
		<div>
                  <input
                    type="submit"
                    name="register"
                    id="signin"
                    value="Register"
	
                  />
         </div>
		
      </form>
    </div>
  </body>
</html>
