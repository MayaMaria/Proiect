<?php
include 'header.php';
?>
    <div class="main">
      <section class="sign-in">
        <div class="container">
          <div class="signin-content">
            <div class="signin-image">
              <figure>
                <img src="imagini/draw.jpg" alt="sing up image" />
              </figure>
              <a href="createAccount.php" class="signup-image-link"
                >Create an account</a
              >
            </div>

			
            <div class="signin-form">
			<?php
			if(@$_GET['LoginR'] == true)
					{
						?>
						<div>
							<img style="height:15%; width:10%;" src="imagini/good.png"/>
							<h4><?php echo $_GET['LoginR']?></h4>
						</div>
						
					<?php
					}
			?>
              <h2 class="form-title">Sign up</h2>
			  
			  
				<?php 
					if(@$_GET['InvalidLogin'] == true)
					{
						?>
						<div>
							<img style="height:10%; width:5%;" src="imagini/wrong.jpg"/>
							<?php echo $_GET['InvalidLogin']?>
						</div>
						
					<?php
					}			
				?>
			
              <form class="register-form" id="login-form" method="POST" action="phpfiles/validate.php">
                <div class="form-group">
                  <label for="your_name"
                    ><i class="zmdi zmdi-account material-icons-name"></i
                  ></label>
                  <input
                    type="text"
                    name="your_name"
                    id="your_name"
                    placeholder="Username"
					value="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];}?>"
					required
                  />
                </div>
                <div class="form-group">
                  <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                  <input
                    type="password"
                    name="your_pass"
                    id="your_pass"
                    placeholder="Password"
					value ="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];}?>"
					required
                  />
                </div>
                <div class="form-group">
                  <input
                    type="checkbox"
                    name="remember-me"
                    id="remember-me"
                    class="agree-term"
					<?php if(isset($_COOKIE['username'])) {echo "checked='checked'";}?>
                  />
                  <label for="remember-me" class="label-agree-term">
                    <span><span></span></span>Remember me
					</label>
                  
                </div>
                <div class="form-group form-button">
                  <input
                    type="submit"
                    name="signin"
                    id="signin"
                    class="form-submit"
                    value="Log in"
	
                  />
                </div>
              </form>		  
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
