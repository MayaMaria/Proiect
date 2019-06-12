<?php 
	include 'phpfiles/suggestion_controller.php';
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
	<script src="./jsfiles/pollFunction.js"></script>
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
			  <div id="poll">
			   <form>
				<fieldset class="stars">
					<input type="radio" id="star10" name="stars1" value="5"  onclick="getVote(this.value,50,'poll')"/>
					<label class="full" for="star10" title="Awesome"></label>
					<input type="radio" id="star9" name="stars1" value="4" onclick="getVote(this.value,50,'poll')" />
					<label class="full" for="star9" title="Pretty good"></label>
					<input type="radio" id="star8" name="stars1" value="3"  onclick="getVote(this.value,50,'poll')" />
					<label class="full" for="star8" title="Ok"></label>
					<input type="radio" id="star7" name="stars1" value="2" onclick="getVote(this.value,50,'poll')" />
					<label class="full" for="star7" title="Kinda bad"></label>
					<input type="radio" id="star6" name="stars1" value="1" onclick="getVote(this.value,50,'poll')" />
					<label class="full" for="star6" title="Vote"></label>
				 </fieldset>
				</form>
			</div>
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
           <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" 
		   data-text="The hunting season is near " 
		   data-url="http://M&amp;Ainspiration.com"
		   data-via="m&amp;aInsipiration"
		   data-hashtags="huntingComoShoes" 
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
