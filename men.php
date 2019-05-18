<?php 
	include 'header.php';
?>

    <div class="body-content">
      <div class="filter-selector">
        <div class="filter-selector-type">
          <button class="collapsible">Brand</button>
          <div class="content">
            <ul>
              <li>Adidas</li>
              <li>Puma</li>
              <li>Converse</li>
              <li>Ecco</li>
              <li>UGG</li>
              <li>Vans</li>
            </ul>
          </div>
        </div>
        <div class="selector">
          <button class="collapsible">Color</button>
          <div class="content">
            <ul>
              <li>Red</li>
              <li>White</li>
              <li>Black</li>
              <li>Green</li>
              <li>Blue</li>
              <li>Pink</li>
            </ul>
          </div>
        </div>
        <div class="selector">
          <button class="collapsible">Type</button>
          <div class="content">
            <ul>
              <li>Sandals</li>
              <li>Sneakers</li>
              <li>Boots</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="products-showcase">
        <div class="product-box">
          <img src="imagini/men/men1.jpg" alt="ShoeImage" />
          <div class="product-box-title">
            <p>Man Shoes #1</p>
          </div>
        </div>
        <div class="product-box">
          <img src="imagini/men/men2.jpg" alt="ShoeImage" />
          <div class="product-box-title">
            <p>Man Shoes #2</p>
          </div>
        </div>
        <div class="product-box">
          <img src="imagini/men/men3.jpg" alt="ShoeImage" />
          <div class="product-box-title">
            <p>Man Shoes #3</p>
          </div>
        </div>
        <div class="product-box">
          <img src="imagini/men/men4.jpg" alt="ShoeImage" />
          <div class="product-box-title">
            <p>Man Shoes #4</p>
          </div>
        </div>
        <div class="product-box">
          <img src="imagini/men/men5.jpg" alt="ShoeImage" />
          <div class="product-box-title">
            <p>Man Shoes #5</p>
          </div>
        </div>
        <div class="product-box">
          <img src="imagini/men/men7.jpg" alt="ShoeImage" />
          <div class="product-box-title">
            <p>Man Shoes #6</p>
          </div>
        </div>
        <div class="product-box">
          <img src="imagini/men/men6.jpg" alt="ShoeImage" />
          <div class="product-box-title">
            <p>Man Shoes #7</p>
          </div>
        </div>
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
  </body>
</html>
