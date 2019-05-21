<?php 
  include './phpfiles/header.php';
  include './phpfiles/shop_controller.php';
?>
    <meta charset="utf-8" />
    <div class="body-content">

      <form class="filter-selector">
        <?php
          echo sprintf("<input type=\"hidden\" name=\"gender\" value=\"%s\">", $_GET["gender"]); 
        ?>

        <div class = "selector">
          <button class="collapsible" type="button">Brand</button>
          <div class = "content">
            <input type="radio" name="brand" value="none"> None <br>
            <?php
                filterBrands();
            ?>
          </div>
        </div>

        <div class = "selector">
          <button class="collapsible" type="button">Color</button>
          <div class = "content">
            <input type="radio" name="brand" value="none"> None <br>
            <?php
                filterColors();
            ?>
          </div>
        </div>

        <div class = "selector">
          <button class="collapsible" type="button">Style</button>
          <div class = "content">
            <input type="radio" name="brand" value="none"> None <br>
            <?php
                filterStyle();
            ?>
          </div>
        </div>

        <input type="submit">

      </form>

      <div class="products-showcase">
        <?php
          getProductsFromDatabase();
        ?>
      </div>

    </div>

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

    <script src="./shop.js"> </script>
    
  </body>
</html>
