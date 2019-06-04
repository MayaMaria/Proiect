<?php 
  include './phpfiles/header.php';
  include './phpfiles/shop_controller.php';
?>
    <meta charset="utf-8" />

    <?php
      getFilters();
      getProductsFromDatabase();
    ?>
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
            <input type="radio" name="color" value="none"> None <br>
            <?php
                filterColors();
            ?>
          </div>
        </div>

        <div class = "selector">
          <button class="collapsible" type="button">Style</button>
          <div class = "content">
            <input type="radio" name="style" value="none"> None <br>
            <?php
                filterStyle();
            ?>
          </div>
        </div>

        <div class = "selector">
          <button class="collapsible" type="button">Trends</button>
          <div class = "content">
            <input type="radio" name="trends" value="none"> None <br>
            <?php
                filterTrends();
            ?>
          </div>
        </div>

        <div class = "selector">
          <button class="collapsible" type="button">Seasons</button>
          <div class = "content">
            <input type="radio" name="seasons" value="none"> None <br>
            <?php
                filterSeasons();
            ?>
          </div>
        </div>

        <input type="submit">

      </form>

      <div class="products-showcase">
        <?php
          showProducts();
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
    <script src="./shop.js"> </script>
  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="./index.js"> </script>
</html>
