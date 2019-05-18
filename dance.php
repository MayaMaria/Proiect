<?php
require_once 'phpfiles/database_con.php';
$sql = "SELECT  * FROM ratings WHERE name='stars2'";
	$result = mysqli_query($conn,$sql);
	
	while($row = mysqli_fetch_assoc($result)) {
        $rating1=$row["rating1"];
		$rating2=$row["rating2"];
		$rating3=$row["rating3"];
		$rating4=$row["rating4"];
		$rating5=$row["rating5"];
    }
	
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
      <p class="message">
        &emsp;&emsp;We want to look our best when we go clubbing and fabulous
        shoe styles will make you look good and feel great while dancing the
        night away. You may have to walk or run to the train to get there so
        you’ll be needing shoes that will let you experience the night without
        falling over or getting blisters. Keep scrolling on our list for stylish
        shoe style perfect for clubbing.
      </p>
      <p class="message">
        &emsp;&emsp;If you’re not used to walking sky-high heels, you may go for
        kitten heeled shoes with 2 to 3 inches to give additional height to your
        stature while keeping you comfortable and giving you a great balance.
        You can have your pick from ankle strap sandals to peep toe shoes with
        kitten heels that can look great with ruffled dresses, asymmetrical
        dresses, shift dresses, pencil skirts and such. Kitten heels will still
        complement your outfit and show off your legs while keeping you secure
        on your feet.
      </p>
      <div class="galery">
        <div class="column2">
          <img src="imagini/club1.jpg" alt="KittenHeels" style="width:100%" />
          <p>Kitten Heels</p>
          <b><br />Let us know if you liked it!<br />Vote below!<br /><br /></b>

		  <?php
		  session_start();
		  if(isset($_SESSION['login'])){
			  ?>
		<form method="POST" action="phpfiles/rating.php">
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
		  
          <br /><br />
          <hr />

          <div class="row">
            <div class="side">
              <div>5 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-5" <?php echo "style='width:".$rating5."%';" ?> ></div>
              </div>
            </div>
            <div class="side right">
              <div>
			  <?php
			if(@$_GET['Rating5'] == true)
					{
						$rating5=$_GET['Rating5'];
					}	
			 echo $rating5;
			?>
			  </div>
            </div>
            <div class="side">
              <div>4<span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-4" <?php echo "style='width:".$rating4."%';" ?> >
				</div>
              </div>
            </div>
            <div class="side right">
              <div>
			  <?php
			if(@$_GET['Rating4'] == true)
					{
						$rating4=$_GET['Rating4'];
					}	
			 echo $rating4;
			?>
			  </div>
            </div>
            <div class="side">
              <div>3 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-3" <?php echo "style='width:".$rating3."%';" ?> ></div>
              </div>
            </div>
            <div class="side right">
              <div>
			  <?php
			if(@$_GET['Rating3'] == true)
					{
						$rating3=$_GET['Rating3'];
					}	
			 echo $rating3;
			?>
			  </div>
            </div>
            <div class="side">
              <div>2 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-2" <?php echo "style='width:".$rating2."%';" ?> ></div>
              </div>
            </div>
            <div class="side right">
              <div>
			  <?php
			if(@$_GET['Rating2'] == true)
					{
						$rating2=$_GET['Rating2'];
					}	
			 echo $rating2;
			?>
			  
			  </div>
            </div>
            <div class="side">
              <div>1 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-1" <?php echo "style='width:".$rating1."%';" ?> ></div>
              </div>
            </div>
            <div class="side right">
              <div>
			   <?php
			if(@$_GET['Rating1'] == true)
					{
						$rating1=$_GET['Rating1'];
					}	
			 echo $rating1;
			?>
			  </div>
            </div>
			<hr />
			<p>
            <span><b>User Rating &emsp;&emsp;</b></span>
			<?php include 'phpfiles/calculateRating.php'?>
          </p>
          </div>
        </div>

        <div class="column2">
          <a><img src="imagini/club2.jpg" alt="Wedges" style="width:100%"/></a>
          <p>Wedges</p>
          <b><br />Let us know if you liked it!<br />Vote below!<br /></b>
		  <?php
		 
		  if(isset($_SESSION['login'])){
			  ?>
		<fieldset class="stars">
            <input type="radio" id="star10" name="stars1" value="10" />
            <label class="full" for="star10" title="Awesome"></label>
            <input type="radio" id="star9" name="stars1" value="9" />
            <label class="full" for="star9" title="Pretty good"></label>
            <input type="radio" id="star8" name="stars1" value="8" />
            <label class="full" for="star8" title="Ok"></label>
            <input type="radio" id="star7" name="stars1" value="7" />
            <label class="full" for="star7" title="Kinda bad"></label>
            <input type="radio" id="star6" name="stars1" value="6" />
            <label class="full" for="star6" title="Pff"></label>
          </fieldset>
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
          <br /><br />
       
          <hr />

          <div class="row">
            <div class="side">
              <div>5 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-5"></div>
              </div>
            </div>
            <div class="side right">
              <div>36</div>
            </div>
            <div class="side">
              <div>4<span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-4"></div>
              </div>
            </div>
            <div class="side right">
              <div>23</div>
            </div>
            <div class="side">
              <div>3 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-3"></div>
              </div>
            </div>
            <div class="side right">
              <div>29</div>
            </div>
            <div class="side">
              <div>2 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-2"></div>
              </div>
            </div>
            <div class="side right">
              <div>4</div>
            </div>
            <div class="side">
              <div>1 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-1"></div>
              </div>
            </div>
            <div class="side right">
              <div>10</div>
            </div>
			 
          </div>
          <p>
            <span><b>User Rating &emsp;&emsp;</b></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </p>
        </div>

        <div class="column2">
          <img src="imagini/club3.jpg" alt="ChunkyHeels" style="width:100%" />
          <h4>Chunky Heels</h4>
          <b><br />Let us know if you liked it!<br />Vote below!<br /></b>
		  <?php
		 
		  if(isset($_SESSION['login'])){
			  ?>
				<fieldset class="stars">
					<input type="radio" id="star5" name="stars" value="5" />
					<label class="full" for="star5" title="Awesome"></label>
					<input type="radio" id="star4" name="stars" value="4" />
					<label class="full" for="star4" title="Pretty good"></label>
					<input type="radio" id="star3" name="stars" value="3" />
					<label class="full" for="star3" title="Ok"></label>
					<input type="radio" id="star2" name="stars" value="2" />
					<label class="full" for="star2" title="Kinda bad"></label>
					<input type="radio" id="star1" name="stars" value="1" />
					<label class="full" for="star1" title="Pff"></label>
				</fieldset>
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
          <br /><br />
          <hr />

          <div class="row">
            <div class="side">
              <div>5 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-5"></div>
              </div>
            </div>
            <div class="side right">
              <div>36</div>
            </div>
            <div class="side">
              <div>4<span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-4"></div>
              </div>
            </div>
            <div class="side right">
              <div>23</div>
            </div>
            <div class="side">
              <div>3 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-3"></div>
              </div>
            </div>
            <div class="side right">
              <div>29</div>
            </div>
            <div class="side">
              <div>2 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-2"></div>
              </div>
            </div>
            <div class="side right">
              <div>4</div>
            </div>
            <div class="side">
              <div>1 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-1"></div>
              </div>
            </div>
            <div class="side right">
              <div>10</div>
            </div>
			 
          </div>
          <p>
            <span><b>User Rating &emsp;&emsp;</b></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </p>
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
