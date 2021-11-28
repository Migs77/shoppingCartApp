<!-- CMPS4191-AdvWebDev - Shopping App
Name: Miguel Tzub
ID: 2012110159
Date: 20-Oct-2021 -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <meta http-equiv="x-ua-compatible" content="ie=edge"> -->
  <title>Material Design Bootstrap</title>  
  <!-- local CSS -->
  <link rel="stylesheet" href="shoppingAppStyle.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/css/mdb5/3.9.0/compiled.min.css?ver=3.9.0-update.4">
  
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
            <li><a href="productPage.php">Products</a></li>
            <span class ="cart-quantity">0</span>
            <i id="cartIcon" class="fas fa-shopping-cart"></i>
            
            <!-- <li><a href="#0">Products</a></li>  <a href="#0">Login</a>-->
            <li> <a href="login.php" class="btn btn-primary ripple-surface" id="logOutBtn" style="min-width: 83px;">Log Out</a></li>
          </ul>
        </nav>
      </header>
  </div>
    <!-- Navbar -->

  <!--Main layout-->
  <main class="container mt-5 pt-4">
    <div class="wow fadeIn">
      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Checkout form</h2>

      <!--Grid row-->
      <div class="row">

        <!--******************** Grid column (left: Billing address)******************************-->
        <div class="col-md-8 mb-4">
          <h4 class="text-muted">Billing address</h3>

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body needs-validation" novalidate>

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">
                  <!--firstName-->
                  <div class="md-form ">
                    <label for="firstName" class="my-0"> First Name</label>
                      <input type="text" placeholder="First Name" id="firstName" class="form-control " required>  
                    <div class="invalid-feedback"> Your First name is required.</div>                  
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">
                  <!--lastName-->
                  <div class="md-form">
                    <label for="lastName" class="my-0">Last name</label>
                      <input type="text" placeholder="Last Name" id="lastName" class="form-control" required> 
                    <div class="invalid-feedback"> Your Last name is required.</div>                   
                  </div>
                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Username-->
              <div class="md-form pl-0 mb-5">
                <label for="username" class="my-0">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">@</span>
                        </div>	
                      <input type="text" class="form-control" id="username" placeholder="Username" required>
                    <div class="invalid-feedback"> Your username is required.</div>
                  </div>
              </div>              

              <!--email-->
              <div class="md-form mb-4">
                <label for="email" class="my-0">Email (optional)</label>
                  <input type="text" id="email" class="form-control" placeholder="youremail@example.com">                                
              </div>

              <!--address-->
              <div class="md-form mb-5">
                <label for="address" class="my-0">Address</label>
                  <input type="text" id="address" class="form-control" placeholder="1234 Main St" required>                
                <div class="invalid-feedback"> Address is required.</div>
              </div>

              <!--address-2-->
              <div class="md-form mb-4">
                <label for="address-2" class="my-0">Address 2</label>
                  <input type="text" id="address-2" class="form-control" placeholder="Apartment, suite, city or town"> 
                <div class="invalid-feedback"> Your Address 2 is required.</div>               
              </div>

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">
                  <label for="country" class="my-0">Country</label>
                    <select class="custom-select d-block w-100" id="country" required>
                      <option class="text-muted" value="">Choose...</option>
                        <option>Belize</option>
                      <option>United States</option>
                    </select> <br>
                  <div class="invalid-feedback"> Please select a valid country.</div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                  <label for="state" class="my-0">State/District</label>
                    <select class="custom-select d-block w-100" id="state" required>
                      <option class="text-muted" value="">Choose...</option>
                        <option>Stann Creek</option>
                      <option>California</option>
                    </select> <br>
                  <div class="invalid-feedback"> Please provide a valid State/District.</div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                  <label for="zip" class="my-0">Zip</label>
                    <input type="text" class="form-control" id="zip" placeholder="" required>
                  <div class="invalid-feedback"> Zip code required.</div>
                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <hr>

              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="same-address">
                  <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save-info">
                  <label class="custom-control-label" for="save-info">Save this information for next time</label>
              </div>

              <hr>

              <div class="d-block my-4">
                <div class="custom-control custom-radio">
                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                    <label class="custom-control-label" for="credit">Credit card</label>
                      </div>

                        <div class="custom-control custom-radio">
                          <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                          <label class="custom-control-label" for="debit">Debit card</label>
                        </div>

                      <div class="custom-control custom-radio">
                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="paypal">Paypal</label>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <label for="cc-name" class="my-0">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="John Doe" required>
                      <div class="invalid-feedback"> Name on card is required </div>
                        <small class="text-muted">Full name as displayed on card</small>                        
                          </div>

                        <div class="col-md-6 mb-3">
                      <label for="cc-number" class="my-0">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                  <div class="invalid-feedback"> Credit card number is required</div>
                </div>
              </div>

              <!-- Expire-CCV -->
              <div class="row">

                <!-- Expiration Date -->
                <div class="col-md-3 mb-3">                  
                  <label for="cc-expiration" class="my-0">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="MM / YY" required>
                  <div class="invalid-feedback"> Expiration date required</div>
                </div>

                <!-- Security code -->
                <div class="col-md-3 mb-3">
                  <label for="SecurityCode" class="my-0">Security code</label>                                              
                    <div class="input-container" >
                      <input type="text" class="form-control" id="SecurityCode"  required></input>
                        <i id="cvc" class="fa fa-question-circle"></i>
                          <div class="invalid-feedback"> Security code required</div>
                          </div>
                        <div class="cvc-preview-container two-card hide">
                      <div class="amex-cvc-preview"></div>
                    <div class="visa-mc-dis-cvc-preview"></div>
                  </div>                  
                </div>

              </div>

              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>

            </form>
            <!--/.Card content-->
          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--************************ Grid column (right: Your Cart) ****************************-->
        <div class="col-md-4 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">

            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">S7 Charger</h6>
                  <small class="text-muted">Black colored and fast charging</small>
                </div>
              <span class="text-muted">$12</span>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Florescent Bulb</h6>
                  <small class="text-muted">20 watts, with solar and sensor</small>
                </div>
              <span class="text-muted">$8</span>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Paper Clips</h6>
                  <small class="text-muted">Small sizes, 1 pack</small>
                </div>
              <span class="text-muted">$5</span>
            </li>

            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Tax</h6>
                  <small>GST(10%)</small>
                </div>
              <span class="text-success">$</span>
            </li>

            <li class="list-group-item d-flex justify-content-between">
              <span>Total (BZD)</span>
              <strong>$20</strong>
            </li>
          </ul>
          <!-- Cart -->

          <!-- Promo code -->
          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-secondary btn-md waves-effect m-0" type="button">Redeem</button>
              </div>
            </div>
          </form>
          <!-- Promo code -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>


  </main>
  <!--Main layout-->

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
    
  <!-- SCRIPTS -->
  <!-- Initializations -->
  <!-- <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script> --> -->
</body>

</html>