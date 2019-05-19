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
