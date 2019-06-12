<?php 
	include './phpfiles/header.php';
?>

    <section class="contact">
      <p>
        <b
          >We're M&A Inspiration, and we're looking to help you to find the
          perfect shoes.</b
        >
      </p>
      <h4>Meet the team</h4>
      <div class="photo">
        <div class="photo1">
          <p>Maya</p>
          <a><img src="imagini/1.jpg" alt="Maria" title="Maria"/></a>
        </div>

        <div class="photo1">
          <p>Alex</p>
          <a><img src="imagini/3.jpg" alt="Alexandru" title="Alexandru"/></a>
        </div>

        <div class="photo1">
          <p>Andreea</p>
          <a><img src="imagini/2.jpg" alt="Andreea" title="Andreea"/></a>
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
          <form method="POST" id = "subscribe-form">
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
                <option disabled="disabled" selected="selected" value="all"> Select your option </option>
                <option value="all"> Send me everything </option>
                <option value="women"> Women</option>
                <option value="men"> Men</option>
              </select>
            </div>
            <input type="button" value="SUBSCRIBE" name="submit" id="subscribe-submit"/>
          </form>
          <div id="subscribedFeedback" style="display:none">You're subscribed!</div>
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
              <i class="fa fa-facebook-square"> Facebook</i></a>
            <a
              href="https://www.twitter.com"
              target="_blank"
              style="color: white"
            >
              <i class="fa fa-twitter-square"> Twitter</i></a>
          </div>
        </div>
      </div>

      <div class="footerLogo">
        <img src="imagini/logo2.png" alt="FooterLogo" />
      </div>
    </footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="./index.js"> </script>
  </body>
</html>
