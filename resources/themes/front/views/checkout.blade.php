@extends('master')
@section('content')
    <!-- Checkout Section -->
    <div class="container space-1 space-md-2">
        <div class="row">
            <div class="col-lg-4 order-lg-2 mb-7 mb-lg-0">
                <div class="pl-lg-4">
                    <!-- Order Summary -->
                    <div class="border shadow-soft rounded p-5 mb-4">
                        <!-- Title -->
                        <div class="border-bottom pb-4 mb-4">
                            <h2 class="h5 mb-0">Order summary</h2>
                        </div>
                        <!-- End Title -->

                        <!-- Product Content -->
                        <div class="border-bottom pb-4 mb-4">
                            <div class="media">
                                <div class="position-relative max-width-10 w-100 mr-3">
                                    <img class="img-fluid" src="/themes/front/assets/img/320x320/img2.jpg" alt="Image Description">
                                    <span class="badge badge-sm badge-primary badge-pos rounded-circle">1</span>
                                </div>
                                <div class="media-body">
                                    <h2 class="h6">Originals national backpack</h2>
                                    <div class="text-secondary font-size-1">
                                        <span>Gender:</span>
                                        <span>Men</span>
                                    </div>
                                    <div class="text-secondary font-size-1">
                                        <span>Color:</span>
                                        <span>Grey</span>
                                    </div>
                                    <div class="text-secondary font-size-1">
                                        <span>Size:</span>
                                        <span>One size</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Content -->

                        <!-- Product Content -->
                        <div class="border-bottom pb-4 mb-4">
                            <div class="media">
                                <div class="position-relative max-width-10 w-100 mr-3">
                                    <img class="img-fluid" src="/themes/front/assets/img/320x320/img3.jpg" alt="Image Description">
                                    <span class="badge badge-sm badge-primary badge-pos rounded-circle">1</span>
                                </div>
                                <div class="media-body">
                                    <h2 class="h6">Vans large image t-shirt</h2>
                                    <div class="text-secondary font-size-1">
                                        <span>Gender:</span>
                                        <span>Women</span>
                                    </div>
                                    <div class="text-secondary font-size-1">
                                        <span>Color:</span>
                                        <span>Core Black / Carbon</span>
                                    </div>
                                    <div class="text-secondary font-size-1">
                                        <span>Size:</span>
                                        <span>SM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Content -->

                        <!-- Fees -->
                        <div class="border-bottom pb-4 mb-4">
                            <div class="media align-items-center mb-3">
                                <h3 class="text-secondary font-size-1 font-weight-normal mb-0 mr-3">Item subtotal (2)</h3>
                                <div class="media-body text-right">
                                    <span class="font-weight-medium">$73.98</span>
                                </div>
                            </div>

                            <div class="media align-items-center mb-3">
                                <h4 class="text-secondary font-size-1 font-weight-normal mb-0 mr-3">Delivery</h4>
                                <div class="media-body text-right">
                                    <span class="font-weight-medium">Free</span>
                                </div>
                            </div>

                            <!-- Checkbox -->
                            <div class="card border-0 mb-3">
                                <div class="card-body p-0">
                                    <div class="custom-control custom-radio d-flex align-items-center small">
                                        <input type="radio" class="custom-control-input" id="deliveryRadio1" name="deliveryRadio" checked>
                                        <label class="custom-control-label ml-1" for="deliveryRadio1">
                                            <span class="d-block font-size-1 font-weight-medium mb-1">Free - Standard delivery</span>
                                            <span class="d-block text-muted">Shipment may take 5-6 business days.</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- End Checkbox -->

                            <!-- Checkbox -->
                            <div class="card border-0 mb-3">
                                <div class="card-body p-0">
                                    <div class="custom-control custom-radio d-flex align-items-center small">
                                        <input type="radio" class="custom-control-input" id="deliveryRadio2" name="deliveryRadio">
                                        <label class="custom-control-label ml-1" for="deliveryRadio2">
                                            <span class="d-block font-size-1 font-weight-medium mb-1">$7.99 - Express delivery</span>
                                            <span class="d-block text-muted">Shipment may take 2-3 business days.</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- End Checkbox -->

                            <div class="media align-items-center">
                                <h4 class="text-secondary font-size-1 font-weight-normal mb-0 mr-3">Estimated tax</h4>
                                <div class="media-body text-right">
                                    <span class="font-weight-medium">--</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Fees -->

                        <!-- Total -->
                        <div class="media align-items-center">
                            <h4 class="text-secondary font-size-1 font-weight-normal mb-0 mr-3">Total</h4>
                            <div class="media-body text-right">
                                <span class="font-weight-semi-bold">$73.98</span>
                            </div>
                        </div>
                        <!-- End Total -->
                    </div>
                    <!-- End Order Summary -->
                </div>
            </div>

            <div class="col-lg-8 order-lg-1">
                <form class="js-validate">
                    <div class="border-bottom pb-7 mb-7">
                        <!-- Title -->
                        <div class="mb-4">
                            <h2 class="h4">Billing address</h2>
                        </div>
                        <!-- End Title -->

                        <!-- Billing Form -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        First name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="firstName" placeholder="Jack" aria-label="Jack" required
                                           data-msg="Please enter your frist name."
                                           data-error-class="u-has-error"
                                           data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Last name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="lastName" placeholder="Wayley" aria-label="Wayley" required
                                           data-msg="Please enter your last name."
                                           data-error-class="u-has-error"
                                           data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Email address
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" class="form-control" name="emailAddress" placeholder="jackwayley@gmail.com" aria-label="jackwayley@gmail.com" required
                                           data-msg="Please enter a valid email address."
                                           data-error-class="u-has-error"
                                           data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Phone
                                    </label>
                                    <input type="text" class="form-control" placeholder="+1 (062) 109-9222" aria-label="+1 (062) 109-9222"
                                           data-msg="Please enter your last name."
                                           data-error-class="u-has-error"
                                           data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-8">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Street address
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="streetAddress" placeholder="470 Lucy Forks" aria-label="470 Lucy Forks" required
                                           data-msg="Please enter a valid address."
                                           data-error-class="u-has-error"
                                           data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-4">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Apt, suite, etc.
                                    </label>
                                    <input type="text" class="form-control" placeholder="YC7B 3UT" aria-label="YC7B 3UT"
                                           data-msg="Please enter a valid address."
                                           data-error-class="u-has-error"
                                           data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-12">
                                <!-- Input -->
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        City
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="cityAddress" placeholder="London" aria-label="London" required
                                           data-msg="Please enter a valid address."
                                           data-error-class="u-has-error"
                                           data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Country
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control custom-select" required
                                            data-msg="Please select country."
                                            data-error-class="u-has-error"
                                            data-success-class="u-has-success">
                                        <option value="">Select country</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Åland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia, Plurinational State of</option>
                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="BN">Brunei Darussalam</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, the Democratic Republic of the</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Côte d'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">Curaçao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and McDonald Islands</option>
                                        <option value="VA">Holy See (Vatican City State)</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran, Islamic Republic of</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                        <option value="KR">Korea, Republic of</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Lao People's Democratic Republic</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao</option>
                                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia, Federated States of</option>
                                        <option value="MD">Moldova, Republic of</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestinian Territory, Occupied</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Réunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="BL">Saint Barthélemy</option>
                                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="MF">Saint Martin (French part)</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten (Dutch part)</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan, Province of China</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania, United Republic of</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">Virgin Islands, British</option>
                                        <option value="VI">Virgin Islands, U.S.</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Postcode/Zip
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="postcode" placeholder="99999" aria-label="99999" required
                                           data-msg="Please enter a postcode or zip code."
                                           data-error-class="u-has-error"
                                           data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="w-100"></div>
                        </div>
                        <!-- End Billing Form -->
                    </div>

                    <!-- Place Order -->
                    <div class="mb-7">
                        <!-- Button -->
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('cart') }}"><small class="fas fa-arrow-left mr-2"></small> Return to cart</a>
                            <button type="submit" class="btn btn-primary btn-sm-wide btn-pill transition-3d-hover">Place order</button>
                        </div>
                        <!-- End Button -->
                    </div>
                    <!-- Place Order -->
                </form>
            </div>
        </div>
    </div>
    <!-- End Checkout Section -->
@stop