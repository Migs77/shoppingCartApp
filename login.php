<!-- CMPS4191-AdvWebDev - Shopping App
Name: Miguel Tzub
ID: 2012110159
Date: 20-Oct-2021 -->
<?php
session_start();
 require ("config.php");
 $dbase = openConnection();
 if($dbase) {
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
             //execute the query
        $query = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
        $result = $dbase->query($query);
        if ($result->num_rows ==1) {
        //save the user login in the session
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            header("location: productPage.php");//send the user to another page
        }else{ $errorMessage="Incorrect username or password"; }//display error

        //registration
        $name = $_POST['name'];
        $email= $_POST['email'];

        $query = "INSERT into users (name, username, email, password) VALUES ('".$name."', '".$username."', '".$email."', '".$password."')";
        $result = $dbase->query($query);
        if ($result) {
        //save the user login in the session
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            header("location: productPage.php");//send the user to another page
        }else{ $errorMessage="Incorrect username or password"; }//display error




    }  
    
              
 }  
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <meta http-equiv="x-ua-compatible" content="ie=edge"> -->
  <title>Material Design Bootstrap</title>  
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/css/mdb5/3.9.0/compiled.min.css?ver=3.9.0-update.4">
  <!-- local CSS -->
  <link rel="stylesheet" href="shoppingAppStyle.css">

  <!-- Material Design Bootstrap -->
  <!-- <link href="css/mdb.min.css" rel="stylesheet"> -->
  <!-- Your custom styles (optional) -->
  <!-- <link href="css/style.min.css" rel="stylesheet"> -->
</head>

<body>  
    <!-- Navbar -->
    <div class="navigation">
      <!-- header/nav -->
      <header class="header ">
        <h3 class="header-logo">Imazon</h3>
        
        <nav class="header-nav">
          <ul>
            <li><a href="#"> Login Page</a></li>
            <!-- <span class ="cart-quantity">0</span>
            <i id="cartIcon" class="fas fa-shopping-cart"></i> -->
            
            <!-- <li><a href="#0">Products</a></li>  <a href="#0">Login</a>-->
            <!-- <li> <button class="btn btn-primary ripple-surface" id="mainLoginBtn" style="min-width: 83px;">Login</button></li> -->
          </ul>
        </nav>
      </header>
    </div>
    <!-- Navbar -->

    <!--Main layout-->
    <div class="">
        <h2 class="text-center">Welcome to Imazon</h2>
        <div class="modal-content">
            <!-- Modal body -->
            <div class="">

            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3">
                <li class="nav-item" role="presentation">
                <a class="nav-link active"  id="loginLink" href="#navbarLogin-login" role="tab" aria-selected="true">Login</a>
                </li>
                <li class="nav-item" role="presentation">
                <a class="nav-link" id="registerLink"  href="#navbarLogin-signup" role="tab" aria-selected="false">Register</a>
                </li>
            </ul>

            <!-- Pills panels -->
            <div class="tab-content">
                <!--Panel 1-->
                <div class="tab-pane fade in show active" id="navbarLogin-login" role="tabpanel">

                <!-- Default form login -->
                <form id="login" class="text-center needs-validation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name="login-form" novalidate>

                <p class="status"></p>

                <div class="text-center mb-3">
                  <div class="wp-social-login-widget">
                      <div class="wp-social-login-connect-with">Connect with:</div>
                      <div class="wp-social-login-provider-list">
                          <button rel="nofollow" href="" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook btn btn-primary btn-floating mx-1 ripple-surface" data-provider="Facebook" role="button" style="min-width: 37px;"><i class="fab fa-facebook-f"></i></button>
                          <button rel="nofollow" href="" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google btn btn-primary btn-floating mx-1" data-provider="Google" role="button"><i class="fab fa-google"></i></button>
                          <button rel="nofollow" href="" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter btn btn-primary btn-floating mx-1" data-provider="Twitter" role="button"><i class="fab fa-twitter"></i></button>
                      </div>
                  </div>
                </div>

                <p class="text-center">or:</p>

                <!-- Email input -->
                <div class="form-outline form-auth-mdb mb-4">
                  <input type="text" id="username" class="form-control" name="username" required="">
                  <label class="form-label" for="username" style="margin-left: 0px;">Your username</label>                  
                  <div class="form-notch">
                    <div class="form-notch-leading" style="width: 9px;"></div>
                    <div class="form-notch-middle" style="width: 146.4px;"></div>
                    <div class="form-notch-trailing"></div>
                  </div>
                </div>

                <!-- Password input -->
                <div class="form-outline form-auth-mdb mb-4">
                  <input type="password" id="password" class="form-control" name="password" autocomplete="off" required="">
                  <label class="form-label" for="password" style="margin-left: 0px;">Your password</label>
                  <div class="form-notch">
                    <div class="form-notch-leading" style="width: 9px;"></div>
                    <div class="form-notch-middle" style="width: 92.8px;"></div>
                    <div class="form-notch-trailing"></div>
                  </div>
                </div>

                <!-- <?php if($errorMessage) { ?>
                   <script>
                       alert("<?php echo $errorMessage ?>")
                   </script>
                <?php } ?> -->
                <!-- 2 column grid layout for inline styling -->
                <div class="justify-content-center mb-4">
                    <a href="" type="submit">Forgot password?</a>
                </div>

                <button class="btn btn-primary btn-block mb-4" type="submit" value="LOGIN">Sign in</button>

                <!-- Register buttons -->
                <div class="text-center">
                  <p>Not a member? <a href="#navbarLogin-signup" class="auth-modal-toggle" data-auth-modal-tab="sign-up">Register</a></p>
                </div>

                </form>
                <!-- Default form login -->

                </div>
                <!--/ end of Panel 1-->

                <!--Panel 2-->
                <div class="tab-pane fade" id="navbarLogin-signup" role="tabpanel">

                <!-- Default form register  -->
                <form id="register" class="text-center needs-validation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name="register-form" >

                <!-- Social login -->

                <p class="status"></p>

                <div class="text-center mb-3">
                  <div class="wp-social-login-widget">
                      <div class="wp-social-login-connect-with">Connect with:</div>
                      <div class="wp-social-login-provider-list">                        
                          <button rel="nofollow" href="" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook btn btn-primary btn-floating mx-1 ripple-surface" data-provider="Facebook" role="button"><i class="fab fa-facebook-f"></i></button>
                          <button rel="nofollow" href="" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google btn btn-primary btn-floating mx-1 ripple-surface" data-provider="Google" role="button"><i class="fab fa-google"></i></button>
                          <button rel="nofollow" href="" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter btn btn-primary btn-floating mx-1 ripple-surface" data-provider="Twitter" role="button"><i class="fab fa-twitter"></i></button>
                      </div>
                  </div>
                </div>
                <!-- Social login -->

                <p class="text-center">or:</p>

                <!-- Name input -->
                <div class="form-outline form-auth-mdb mb-4">
                  <input type="text" id="signonname" class="form-control" name="name" required="" minlength="3">
                    <label for="signonname" class="form-label" style="margin-left: 0px;">Your name</label>
                  <div class="invalid-feedback">Please provide a valid name.</div>
                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 8px;"></div><div class="form-notch-trailing"></div></div></div>

                <!-- Username input -->
                <div class="form-outline form-auth-mdb mb-4">
                  <input type="text" id="signonusername" class="form-control" name="username" required="" minlength="3">
                    <label for="signonusername" class="form-label" style="margin-left: 0px;">Your username</label>
                  <div class="invalid-feedback">Please provide a valid username.</div>
                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 8px;"></div><div class="form-notch-trailing"></div></div></div>

                <!-- Email input -->
                <div class="form-outline form-auth-mdb mb-4">
                  <input type="email" id="email" class="form-control" name="email" required="">
                    <label for="email" class="form-label" style="margin-left: 0px;">Your email</label>
                  <div class="invalid-feedback">Please provide a valid email.</div>
                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 8px;"></div><div class="form-notch-trailing"></div></div></div>

                <!-- Password input -->
                <div class="form-outline form-auth-mdb mb-4">
                  <input type="password" id="signonpassword" class="form-control" name="password" autocomplete="off" required="" minlength="5">
                    <label for="signonpassword" class="form-label" style="margin-left: 0px;">Your password</label>
                  <div class="invalid-feedback">Please provide a valid password.</div>
                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 8px;"></div><div class="form-notch-trailing"></div></div></div>

                <!-- Repeat Password input -->
                <div class="form-outline form-auth-mdb mb-4">
                  <input type="password" id="password2" class="form-control" name="password2" autocomplete="off" required="" minlength="5">
                    <label for="password2" class="form-label" style="margin-left: 0px;">Repeat password</label>
                  <div id="repeat-password-feedback" class="invalid-feedback">Please repeat the password.</div>
                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 8px;"></div><div class="form-notch-trailing"></div></div></div>

                <!-- Subscribe checkbox -->
                <div class="form-check d-flex justify-content-center">
                  <input type="checkbox" class="form-check-input me-1" id="newsletter" name="newsletter" value="subscribe">
                  <label class="form-check-label" for="newsletter">I agree to sign up for Imazon account notifications and newsletter</label>
                </div>

                <!-- Subscribe checkbox -->

                <div class="form-text text-center small text-muted mb-4">
                  By signing up you agree to data processing by the administrator: Imazon located in Red Bank, Belize. The administrator processes data following the <a target="_blank" href="checkoutForm.html">Privacy Policy</a>.
                </div>
                
                <button class="btn btn-primary btn-block mb-3" id="RegisterBtn" type="submit" value="SIGNUP">
                  Sign up
                </button>
                </form>
                <!-- Default form register  -->

                </div>
                <!--/end of Panel 2-->

            </div>
            <!-- End of Pills panels -->

        </div>
        
        <!-- Modal footer -->
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
            Close
          </button>
        </div> -->
    </main>
    <!--end of Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small mt-4 wow fadeIn">  
        <hr class="my-4">   

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2021 Copyright:
            <a href="checkoutForm.html" target="_blank"> Imazon.com </a>
        </div>
        <!--/.Copyright--> 
    </footer>
    <!--/.Footer-->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="shoppingAppMain.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>    
  
</body>

</html>