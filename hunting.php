<?php 
	include 'phpfiles/suggestion_controller.php';
	include 'phpfiles/readRating3.php';
	include 'phpfiles/calculateRating.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/png" href="imagini/logo2.png" />
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <link rel="stylesheet" type="text/css" href="styles/galery.css" />
    <link rel="stylesheet" type="text/css" href="styles/footer.css" />
    <link rel="stylesheet" type="text/css" href="styles/buton.css" />
    <link rel="stylesheet" type="text/css" href="styles/stars.css" />
    <link rel="stylesheet" type="text/css" href="styles/rating.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>M&A Inspiration</title>
  </head>

  <body style="background-color:#FFFCFC">
    <header id="top">
      <img src="imagini/banner2.png" alt="M&A Inspiration" class="banner" />
      <a href="index.php" id="back" title="BACK">BACK</a>
      <h1>M&A Inspiration</h1>
    </header>

    <section>
      <a href="#top" id="up" title="UP">UP</a>
      <br />
      <h3 class="message">
        <?php 
		$name="hunting";
		getSuggestion($name);
		?>
      </h3>
      <div class="galery">
        <div class="column2">
          <?php 
		$name="hunting1";
		getSuggestionPhoto($name);
		?>
        </div>

        <div class="column2">
          <?php 
		$name="hunting2";
		getSuggestionPhoto($name);
		?>
          <p>
            <br /><b>Let us know if you liked it!<br />Vote below!</b>
          </p>
		  <?php
		  session_start();
		  if(isset($_SESSION['login'])){
			  ?>
			   <form method="POST" action="phpfiles/rating4.php">
				<fieldset class="stars">
					<input type="submit" id="star10" name="stars1" value="5" />
					<label class="full" for="star10" title="Awesome"></label>
					<input type="submit" id="star9" name="stars1" value="4" />
					<label class="full" for="star9" title="Pretty good"></label>
					<input type="submit" id="star8" name="stars1" value="3" />
					<label class="full" for="star8" title="Ok"></label>
					<input type="submit" id="star7" name="stars1" value="2" />
					<label class="full" for="star7" title="Kinda bad"></label>
					<input type="submit" id="star6" name="stars1" value="1" />
					<label class="full" for="star6" title="Vote"></label>
				 </fieldset>
				</form>
		<?php
		
		  }
		  else 
		  {
			  echo "<a href='login.php'>Login</a> for vote!";
		  }
		  
		  ?>
       
          <br /><br /><br />
          <br />
          <p><b>Share this on </b></p>
          <?php
		  if(isset($_SESSION['login'])){
			  ?>
          <p class="buton-share">
            <a
              class="facebook"
              href="https://www.facebook.com/sharer/sharer.php?u=#url"
              target="blank"
              ><i class="fa fa-facebook"></i
            ></a>
            <a class="twitter" href="http://twitter.com/share" target="blank"
              ><i class="fa fa-twitter"></i
            ></a>
          </p>
		  
		<?php
		  }
		  else 
		  {
			  echo "<a href='login.php'>Login</a> for share!";
		  }
		  
		  ?>
   
          <hr />

          <div class="row">
            <div class="side">
              <div>5 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-5"<?php echo "style='width:".$rating5_4."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
			   <?php
			if(@$_GET['Rating5'] == true)
					{
						$rating5_4=$_GET['Rating5'];
					}	
			 echo $rating5_4;
			?>
			  </div>
            </div>
            <div class="side">
              <div>4<span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-4"<?php echo "style='width:".$rating4_4."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
			   <?php
			if(@$_GET['Rating4'] == true)
					{
						$rating4_4=$_GET['Rating4'];
					}	
			 echo $rating4_4;
			?>
			  </div>
            </div>
            <div class="side">
              <div>3 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-3"<?php echo "style='width:".$rating3_4."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
			   <?php
			if(@$_GET['Rating3'] == true)
					{
						$rating3_4=$_GET['Rating3'];
					}	
			 echo $rating3_4;
			?>
			  </div>
            </div>
            <div class="side">
              <div>2 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-2"<?php echo "style='width:".$rating2_4."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
			   <?php
			if(@$_GET['Rating2'] == true)
					{
						$rating2_4=$_GET['Rating2'];
					}	
			 echo $rating2_4;
			?>
			  </div>
            </div>
            <div class="side">
              <div>1 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-1"<?php echo "style='width:".$rating1_4."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
			   <?php
			if(@$_GET['Rating1'] == true)
					{
						$rating1_4=$_GET['Rating1'];
					}	
			 echo $rating1_4;
			?>
			  </div>
            </div>
          </div>
		  <p>
            <br />
            <span><b>User Rating &emsp;&emsp;</b></span>
            <?php 
				calculateRating($rating1_4,$rating2_4,$rating3_4,$rating4_4,$rating5_4);
			?>
          </p>
        </div>
		

        <div class="column2">
           <?php 
		$name="hunting3";
		getSuggestionPhoto($name);
		?>
        </div>
      </div>
    </section>
    <br />
    <br />
    <br />
    <footer>
      <div class="footer-newsletter">
        <div class="newsText">
          <p class="joinNews">JOIN OUR NEWSLETTER</p>
          <p class="newsSubtext">Subscribe to be inspired all the time</p>
        </div>

        <div class="news">
          <form>
            <div class="newsInput">
              <label for="mail">E-mail</label>
              <input
                type="text"
                id="mail"
                name="Email"
                placeholder="Enter your e-mail"
                style="color:white"
              />
            </div>
            <div class="newsInput">
              <label>Subject of interest</label>
              <select id="types" name="subjects">
                <option disabled="disabled" selected="selected"
                  >Select your option</option
                >
                <option> Send me everything </option>
                <option> Women</option>
                <option> Men</option>
                <option> Children </option>
              </select>
            </div>
            <input type="submit" value="SUBSCRIBE" />
          </form>
        </div>
      </div>

      <div class="socialize">
        <div class="socialize-content">
          <div class="socialText">LET'S SOCIALIZE</div>
          <div class="logos">
            <a
              href="https://www.facebook.com"
              target="_blank"
              style="color: white"
            >
              <i class="fa fa-facebook-square"> Facebook</i></a
            >
            <a
              href="https://www.twitter.com"
              target="_blank"
              style="color: white"
            >
              <i class="fa fa-twitter-square"> Twitter</i></a
            >
          </div>
        </div>
      </div>

      <div class="footerLogo">
        <img src="imagini/logo2.png" alt="FooterLogo" />
      </div>
    </footer>
  </body>
</html>
