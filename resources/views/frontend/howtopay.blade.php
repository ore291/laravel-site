@extends('frontend.layouts.app')

@section('title')
  {{ "How To Pay" }}
@endsection

@section('content')
    <div class="max-w-5xl mx-auto">
        <div class="container">

            <div class="col-xl-12 col-lg-12 col-md-8 mt-4">
                <div class="section-title mb-2">
                    <h1
                        style="font-size: 20px; text-align: center; font-family: arial black; font-style: NORMAL; color: green;">
                        SELECT YOUR COUNTRY</h1>
                </div>
            </div>
            <div class="flex justify-center w-full my-5">
                {{-- <p class="text-justify">
                </p> --}}

                <div style="font-family: verdana; line-height: 35px;">
                    <select style="background-color: black; color:white;" id="country" class="form-control"
                        onchange="get_info()">
                        <option>Select Your Country</option>
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The
                        </option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Territories">French Southern Territories</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-bissau">Guinea-bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option> --&gt;
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of
                        </option>
                        <option value="Korea, Republic of">Korea, Republic of</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macao">Macao</option>
                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav
                            Republic of</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russian Federation">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Helena">Saint Helena</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South
                            Sandwich Islands</option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                        <option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-leste">Timor-leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands
                        </option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Viet Nam">Viet Nam</option>
                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                    </select>


                </div>
            </div>


        </div>
        <div class="container">


            <h1 style="font-size: 25px; text-align: center; font-family: arial black; font-style: italic; color: green;">
                HOW TO PAY - STEP BY STEP GUIDE</h1>
            <div class="col-md-12" style="font-family: verdana; line-height: 35px;">
                <p>1. Register with a valid Email Address.</p>
                <p>2. Register on our website with your valid email address. Fill in your personal details and create a
                    password. <br> &nbsp; &nbsp; You may also login with your Google or Facebook accounts. </p>
                <p>3. Login to your account after successful registration, verify your account details and then click on
                    make payment <br> &nbsp; &nbsp; available on your dashboard. </p>
                <p>4. Select your Country.</p>
                <p>5. Choose your preferred payment option available for your country from the list below and click make
                    payment </p>

                <div style="border-left: solid; padding-left: 20px;">
                    <h1
                        style="font-size: 22px; dtext-align: center; font-family: arial black; font-style: italic; color: green;">
                        PAY VIA BANK DEPOSIT </h1>
                    <p>You can activate or upgrade your Sport Verified account by making the appropriate payments to our
                        bank account. Find our bank account details below.</p>
                    <p> <b> Account Name : {{setting('ng_bank_user')  }} </b></p>
                    <p> <b> Account Number : {{setting('ng_bank_acct')  }} </b></p>
                    <p> <b> Bank : {{setting('ng_bank_name')  }} </b></p>

                    <p> After making deposits, ensure you send your Name, Teller number, E-Mail address, and the name of the
                        bank to {{setting('transfer_comfirm_number')  }}. <br> Your Sport Verified account will be upgraded before close of
                        business hours. </p>

                    <h1
                        style="font-size: 22px; dtext-align: center; font-family: arial black; font-style: italic; color: green;">
                        PAY WITH DEBIT/CREDIT CARD </h1>
                    <p>Click on "Make Payment" on your account dashboard and select "PAY WITH CARD". <br> Select the
                        prediction plan you want to subscribe for and make payment.</p>
                    <h1
                        style="font-size: 22px; dtext-align: center; font-family: arial black; font-style: italic; color: green;">
                        PAY WITH PAYSTACK </h1>

                    <p>Select Pay with Paystack <br> Choose your preferred plan <br> Enter your card details - Card Number,
                        Card Name, CVV (3 Digit number located at the back of your card) and Card Pin and click pay.
                        <br>Once payment is successful, You will be redirected back to our website where you will
                        automatically be upgraded. </p>

                    <h1
                        style="font-size: 22px; dtext-align: center; font-family: arial black; font-style: italic; color: green;">
                        PAY WITH RAVE </h1>

                    <p>Select Pay with Flutterwave <br> Choose your preferred plan <br> Enter your card details - Card
                        Number, Card Name, CVV (3 Digit number located at the back of your card) and Card Pin and click pay.
                        <br>Once payment is successful, You will be redirected back to our website where you will
                        automatically be upgraded. </p>


                    <!--<h1 style="font-size: 22px; dtext-align: center; font-family: arial black; font-style: italic; color: green;">PAY VIA CASHENVOY</h1>
    <p>Select Cashenvoy Payment <br> Choose your preferred plan  <br> Select "Local" and click continue <br> Enter your registered email address, Card number, MONTH & DATE OF EXPIRY, AND CVV (3 digit number located behind your card)
    <br> Insert 4 digit PIN  <br> Click PAY to make Payment <br> A payment response stating the details of the transaction is then received, indicating successful payment <br> "Your account is then automatically upgraded to the selected plan."  </p>-->

                    <h1
                        style="font-size: 22px; dtext-align: center; font-family: arial black; font-style: italic; color: green;">
                        ATM OR MOBILE BANKING TRANSFER </h1>
                    <p>If you are having problems with any of the above payment method, you can make a mobile banking
                        transfer or atm transfer to any of the following bank account.
                        <br>
                        <b>{{setting('ng_bank_user')  }}
                            <br>
                            {{setting('ng_bank_acct')  }}
                            <br>
                            {{setting('ng_bank_name')  }} </b><br> After making the transfer, Send your email address, name and location
                        to any of this numbers {{setting('transfer_comfirm_number')  }}and your account will be upgraded before end of the day.
                    </p>

                </div>
                <div style="margin-left: 10px; color: #aaa; margin-bottom: 30px;">
                    <h2
                        style="font-size: 21px; dtext-align: center; font-family: arial black; font-style: italic; dcolor: grey;">
                        DISCLAIMER </h2>
                    <p style="font-size: 12px; line-height: 28px;">Please be informed that will be no refunds and and
                        credits are not exchangeable for cash. By opting to receive soccer prediction and tips, you accept
                        that all Sport Verified predictions and tips are for informational purpose are tips are for
                        informational purposes only and that Sport Verified will take responsibility for any loses incurred
                        by you, the subscriber as a direct result of acting upon received Sport Verified information. We do
                        not encourage gambling in any sort of form. Users under 18 years old must seek parental consent.
                        <!--For full terms and conditions, please refer to Terms and Conditions.-->
                    </p>
                </div>
            </div>







        </div>
    </div>


    <script type="text/javascript">
        function get_info() {
            //alert("hii");

            var country = $("#country").val().trim();
            if (country == 'Nigeria') {

                window.location.href = "how-to-pay?country=" + country;
            } else if (country == "Ghana" || country == "Rwanda" || country == "Cameroon" || country == "South Africa" ||
                country == "Zambia" || country == "Zimbabwe" || country == "Uganda" || country == "Kenya" || country ==
                "Tanzania" || country == "Cote D'ivoire" || country == "Burkina Faso" || country == "Senegal" || country ==
                "Mali" || country == "Gabon" || country == "Mauritius") {
                window.location.href = "how-to-pay2?country=" + country;
            } else {
                window.location.href = "how-to-pay3?country=" + country;

            }

        }
    </script>
@endsection
