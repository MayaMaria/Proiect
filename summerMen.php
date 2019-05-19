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
        &emsp;&emsp;It's never too early to start thinking about fresh new shoes
        for summer. In fact, looking toward lighter, brighter footwear can help
        propel you out of any cold-weather trudge you might otherwise find
        yourself in.
      </p>
      <p class="message">
        &emsp;&emsp;Crafting the perfect warm-weather collection of footwear is
        also easier when you get started ahead of the season—stocking up on
        sandals and low-top sneakers now means you'll be ready to hit the ground
        running (actually) come summer. From waterproof slides to espadrilles,
        here are the best shoes to get you through next summer in style.
      </p>

      <div class="galery">
        <div class="column2">
          <img
            src="imagini/summerMen.jpg"
            alt="HavaianasShoes"
            style="width:100%"
          />
          <h2>Havaianas</h2>
          <p>
            These come with a qualifier: They are to be worn at the beach or by
            the pool only. But in those two locations, it's hard to beat a good
            pair of sandals.
          </p>
          <p>
            <br /><b>Let us know if you liked it!<br />Vote below!</b>
          </p>
		  <?php
		  session_start();
		  if(isset($_SESSION['login'])){
			  ?>
				 <fieldset class="stars">
					<input type="radio" id="star15" name="stars2" value="15" />
					<label class="full" for="star15" title="Very Good"></label>
					<input type="radio" id="star14" name="stars2" value="14" />
					<label class="full" for="star14" title="Pretty good"></label>
					<input type="radio" id="star13" name="stars2" value="13" />
					<label class="full" for="star13" title="Ok"></label>
					<input type="radio" id="star12" name="stars2" value="12" />
					<label class="full" for="star12" title="Kinda bad"></label>
					<input type="radio" id="star11" name="stars2" value="11" />
					<label class="full" for="star11" title="Bad"></label>
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
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </p>
        </div>
        <div class="column2">
          <a
            ><img
              src="imagini/summerMen2.jpg"
              alt="Birkenstock"
              style="width:100%"
          /></a>
          <h2>Birkenstock</h2>
          <p>
            More acceptable than flops: Birkenstocks. These are waterproof, so
            they're a sure bet around water.
          </p>
          <p>
            <b><br />Let us know if you liked it!<br />Vote below!</b>
          </p>
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
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </p>
        </div>
        <div class="column2">
          <img src="imagini/summerMen3.jpg" alt="Vans" style="width:100%" />
          <h2>Vans</h2>
          <p>
            If you want to fully embrace that laid-back spring vibe, go with a
            pair of sneakers worn by every California surfer and skater since
            the dawn of time (or since Vans first started making them).
          </p>
          <p>
            <br /><b>Let us know if you liked it!<br />Vote below!</b>
          </p>
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
          <p>
            <span><b>User Rating &emsp;&emsp;</b></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </p>
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
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
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