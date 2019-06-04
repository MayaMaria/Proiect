<?php 
	include 'phpfiles/suggestion_controller.php';
	include 'phpfiles/calculateRating.php';
	include 'phpfiles/readRating3.php';
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
    <a href="#top" id="up" title="UP">UP</a>
    <section>
      <br />
      <?php
	  $name="summerM";
	  getSuggestion($name);
	  ?>

      <div class="galery">
        <div class="column2">
          <?php
	  $name="summerM1";
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
					<input type="submit" id="star5" name="stars2" value="5" />
					<label class="full" for="star5" title="Awesome"></label>
					<input type="submit" id="star4" name="stars2" value="4" />
					<label class="full" for="star4" title="Pretty good"></label>
					<input type="submit" id="star3" name="stars2" value="3" />
					<label class="full" for="star3" title="Ok"></label>
					<input type="submit" id="star2" name="stars2" value="2" />
					<label class="full" for="star2" title="Kinda bad"></label>
					<input type="submit" id="star1" name="stars2" value="1" />
					<label class="full" for="star1" title="Pff"></label>
				</fieldset>
				</form>
		<?php
		
		  }
		  else 
		  {
			  echo "<a href='login.php'>Login</a> for vote!";
		  }
		  
		  ?>
         
          <br />
          <br /><br />
          <br />
          <p><b>Share this on </b></p>
       <?php
		  if(isset($_SESSION['login'])){
			  ?>
          <p class="buton-share">
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" 
			data-text="Havaianas shoes come with a qualifier: They are to be worn at the beach or by the pool only But in those two locations, it`s hard to beat a good pair of sandals." data-url="http://M&amp;Ainspiration.com" 
			data-via="m&amp;aInsipiration" 
			data-hashtags="summerMen"
			data-lang="en" 
			data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </p>
		  
		<?php
		  }
		  else 
		  {
			  echo "<a href='login.php'>Login</a> for share!";
		  }
		  
		  ?>
          <br /><br />
          <hr />

          <div class="row">
            <div class="side">
              <div>5 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-5" <?php echo "style='width:".$rating5_5."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
				<?php
					echo $rating5_5;
				?>
			  </div>
            </div>
            <div class="side">
              <div>4<span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-4"<?php echo "style='width:".$rating4_5."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
				<?php
					echo $rating4_5;
				?>
			  </div>
            </div>
            <div class="side">
              <div>3 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-3"<?php echo "style='width:".$rating3_5."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
				<?php
					echo $rating3_5;
				?>
			  </div>
            </div>
            <div class="side">
              <div>2 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-2"<?php echo "style='width:".$rating2_5."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
				<?php
					echo $rating2_5;
				?>
			  </div>
            </div>
            <div class="side">
              <div>1 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-1"<?php echo "style='width:".$rating1_5."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
				<?php
					echo $rating1_5;
				?>
			  </div>
            </div>
          </div>
		  <p>
            <span><b>User Rating &emsp;&emsp;</b></span>
            <?php 
				calculateRating($rating1_5,$rating2_5,$rating3_5,$rating4_5,$rating5_5);
			?>
          </p>
        </div>
        <div class="column2">
			<?php
			  $name="summerM2";
			  getSuggestionPhoto($name);
			 ?>
          <p>
            <b><br />Let us know if you liked it!<br />Vote below!</b>
          </p>
		  <?php
		  if(isset($_SESSION['login'])){
			  ?>
			  <form method="POST" action="phpfiles/rating5.php">
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
					<label class="full" for="star6" title="Pff"></label>
				  </fieldset>
		  </form>
		<?php
		
		  }
		  else 
		  {
			  echo "<a href='login.php'>Login</a> for vote!";
		  }
		  
		  ?>
         
          <br />
          <br /><br />
          <br />
          <p><b>Share this on </b></p>
          <?php
		  if(isset($_SESSION['login'])){
			  ?>
          <p class="buton-share">
           <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"
		   data-text="If you want to fully embrace that laid-back spring vibe, go with a pair of sneakers worn by every California surfer and skater since the dawn of time" 
		   data-url="http://M&amp;Ainspiration.com" 
		   data-via="m&amp;aInsipiration" 
		   data-hashtags="vansSummerMen"
		   data-lang="en" 
		   data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </p>
		  
		<?php
		  }
		  else 
		  {
			  echo "<a href='login.php'>Login</a> for share!";
		  }
		  
		  ?>
          <br /><br />
          <hr />

          <div class="row">
            <div class="side">
              <div>5 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-5"<?php echo "style='width:".$rating5_6."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
				<?php
					echo $rating5_6;
				?>
			  </div>
            </div>
            <div class="side">
              <div>4<span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-4"<?php echo "style='width:".$rating4_6."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
				<?php
					echo $rating4_6;
				?>
			  </div>
            </div>
            <div class="side">
              <div>3 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-3"<?php echo "style='width:".$rating3_6."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
				<?php
					echo $rating3_6;
				?>
			  </div>
            </div>
            <div class="side">
              <div>2 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-2"<?php echo "style='width:".$rating2_6."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
				<?php
				   echo $rating2_6;
				?>
			  </div>
            </div>
            <div class="side">
              <div>1 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-1"<?php echo "style='width:".$rating1_6."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
				<?php
					echo $rating1_6;
				?>
			  </div>
            </div>
          </div>
		  <p>
            <span><b>User Rating &emsp;&emsp;</b></span>
           <?php 
				calculateRating($rating1_6,$rating2_6,$rating3_6,$rating4_6,$rating5_6);
			?>
          </p>
        </div>
        <div class="column2">
			  <?php
				  $name="summerM3";
				  getSuggestionPhoto($name);
			?>
          <p>
            <br /><b>Let us know if you liked it!<br />Vote below!</b>
          </p>
		  <?php
		  if(isset($_SESSION['login'])){
			  ?>
				<form method="POST" action="phpfiles/rating5.php">
				 <fieldset class="stars">
					<input type="submit" id="star15" name="stars2" value="5" />
					<label class="full" for="star15" title="Very Good"></label>
					<input type="submit" id="star14" name="stars2" value="4" />
					<label class="full" for="star14" title="Pretty good"></label>
					<input type="submit" id="star13" name="stars2" value="3" />
					<label class="full" for="star13" title="Ok"></label>
					<input type="submit" id="star12" name="stars2" value="2" />
					<label class="full" for="star12" title="Kinda bad"></label>
					<input type="submit" id="star11" name="stars2" value="1" />
					<label class="full" for="star11" title="Bad"></label>
				</fieldset>
				</form>
		<?php
		
		  }
		  else 
		  {
			  echo "<a href='login.php'>Login</a> for vote!";
		  }
		  
		  ?>
          
          <br />
          <br /><br />
          <br />
          <p><b>Share this on </b></p>
          <?php
		  if(isset($_SESSION['login'])){
			  ?>
          <p class="buton-share">
           <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" 
		   data-text="More acceptable than flops: Birkenstocks. These are waterproof, so they`re a sure bet around water." 
		   data-url="http://M&amp;Ainspiration.com" data-via="m&amp;aInsipiration" 
		   data-hashtags="summerMen" 
		   data-lang="en" 
		   data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </p>
		  
		<?php
		  }
		  else 
		  {
			  echo "<a href='login.php'>Login</a> for share!";
		  }
		  
		  ?>
          <br /><br />
        
          <hr />

          <div class="row">
            <div class="side">
              <div>5 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-5"<?php echo "style='width:".$rating5_7."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
				<?php
				   echo $rating5_7;
				?>
			  </div>
            </div>
            <div class="side">
              <div>4<span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-4"<?php echo "style='width:".$rating4_7."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
				<?php
					echo $rating4_7;
				?>
			  </div>
            </div>
            <div class="side">
              <div>3 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-3"<?php echo "style='width:".$rating3_7."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
				<?php
					echo $rating3_7;
				?>
			  </div>
            </div>
            <div class="side">
              <div>2 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-2"<?php echo "style='width:".$rating2_7."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
				<?php
					echo $rating2_7;
				?>
			  </div>
            </div>
            <div class="side">
              <div>1 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-1"<?php echo "style='width:".$rating1_7."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
				 <?php
					echo $rating1_7;
				?>
			  </div>
            </div>
          </div>
		  <p>
            <span><b>User Rating &emsp;&emsp;</b></span>
            <?php 
				calculateRating($rating1_7,$rating2_7,$rating3_7,$rating4_7,$rating5_7);
			?>
          </p>
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
