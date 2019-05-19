<?php 
	include './phpfiles/header.php';
?>


    <section>
      <h2 style="text-align: center; font-family:Cambria (Headings)">
        Take a look at it, lady!
      </h2>
      <div class="galery">
        <div class="column">
          <p>Oh, yes, it's Ladies' Night</p>
          <a href="dance.php"
            ><img src="imagini/dance.jpg" alt="Dance" style="width:100%"
          /></a>
        </div>

        <div class="column">
          <a href="travel.php"
            ><img src="imagini/travel.jpg" alt="Travel" style="width:100%"
          /></a>
          <p>
            Are you going on a spring travel? And you don't have the right
            shoes?
          </p>
        </div>

        <div class="column">
          <p>Summer is calling your name!</p>
          <a href="summer.php">
            <img src="imagini/summer.jpg" alt="Summer" style="width:100%"
          /></a>
        </div>
      </div>
      <br />
      <br />
      <br />
      <br />
      <h2 style="text-align: center; font-family:Cambria (Headings)">
        Take a look at it, gentleman!
      </h2>
      <div class="galery">
        <div class="column">
          <p>Hunting time</p>
          <a href="hunting.php"
            ><img src="imagini/men2.jpg" alt="Hunting" style="width:100%"
          /></a>
        </div>

        <div class="column">
          <a href="summerMen.php"
            ><img src="imagini/summer2.jpg" alt="Summer" style="width:100%"
          /></a>
          <p>Summer is calling your name!</p>
        </div>

        <div class="column">
          <p>Let's jog!</p>
          <a href="sport.php">
            <img src="imagini/men3.jpg" alt="Sport" style="width:100%"
          /></a>
        </div>
      </div>
    </section>

    <br />
    <br />
    <br />
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
                style="color:black"
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
