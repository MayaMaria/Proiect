<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <link rel="stylesheet" type="text/css" href="styles/buton.css" />
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
		

      <form action="register.php" method="POST">
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
          id="name"
          placeholder="Surname"
		  value="<?php if(isset($_COOKIE['surname'])) {echo $_COOKIE['surname'];}?>"
          required
        />
        <label id="icon" for="name"><i class="icon-user"></i></label>
        <input
          type="text"
          name="username"
          id="name"
          placeholder="Username"
		  value="<?php if(isset($_COOKIE['usernameR'])) {echo $_COOKIE['usernameR'];}?>"
          required
        />
        <label id="icon" for="name"><i class="icon-envelope "></i></label>
        <input 
			type="text"
			name="email" 
			id="name" 
			placeholder="Email" 
			value="<?php if(isset($_COOKIE['email'])) {echo $_COOKIE['email'];}?>"
			required />
        <br />
        <label id="icon" for="name"><i class="icon-globe"></i></label>
        <input
          type="text"
          name="country"
          id="name"
          placeholder="Country"
		  value="<?php if(isset($_COOKIE['country'])) {echo $_COOKIE['country'];}?>"
          required
        />
        <label id="icon" for="name"><i class="icon-shield"></i></label>
        <input
          type="password"
          name="password"
          id="name"
          placeholder="Password"
		  value="<?php if(isset($_COOKIE['pass'])) {echo $_COOKIE['pass'];}?>"
          required
        />
        <label id="icon" for="name"><i class="icon-shield"></i></label>
        <input
          type="password"
          name="repeatPass"
          id="name"
          placeholder="Repeat password"
		  value="<?php if(isset($_COOKIE['rePass'])) {echo $_COOKIE['rePass'];}?>"
          required
        />
       
		<div class="form-group form-button">
                  <input
                    type="submit"
                    name="register"
                    id="signin"
                    class="form-submit"
                    value="Register"
	
                  />
         </div>
		
      </form>
    </div>
  </body>
</html>
