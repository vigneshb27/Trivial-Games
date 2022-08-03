<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="bg-img">
      <div class="content">
        <header>Login </header>
        <form action="login.php" method="post">
        <?php include('errors.php'); ?>

         <div class="field">
             <span class="fa fa-user"></span>
            <input type="text" required placeholder="Username" name="username">
             </div>
          <div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" class="pass-key" required placeholder="Password" name="password">
            <span class="show">SHOW</span>
          </div>
          <div class="pass">
            <a href="#">Forgot Password?</a>
          </div>
          <div class="field">
            <input type="submit" name="login" id="login" value="LOGIN">
          </div>
        </form>
        <div class="login">Or login with</div>
        <div class="links">
          <div class="facebook">
            <i class="fab fa-facebook-f"><span>Facebook</span></i>
          </div>
          <div class="instagram">
            <i class="fab fa-instagram"><span>Instagram</span></i>
          </div>
        </div>
        <div class="signup">Don't have account?
          <a href="#">Signup Now</a>
        </div>
      </div>
    </div>

    <script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });

      const fb = document.querySelector('.facebook');
      fb.addEventListener('click', function(){
       
        window.location.href = "https://www.facebook.com/";
      });

      const insta = document.querySelector('.instagram');
      insta.addEventListener('click', function(){
       
        window.location.href = "https://www.instagram.com/";
      });

      const signup = document.querySelector('.signup');
      signup.addEventListener('click', function(){
       
        window.location.href = "signup.php";
      });

      const forget = document.querySelector('.pass');
      forget.addEventListener('click', function(){
       
        window.location.href = "https://help.myspace.com/hc/en-us/articles/201956084-Forgot-Password";
      });

      

    </script>


  </body>
</html>
