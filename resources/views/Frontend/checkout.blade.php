@extends('layouts.frontend.main')

@section('content')
<h2 style="text-align: center">Checkout</h2>
<div class="main-content ">
    <div class="main-container container-fluid">
        <div class="col-lg-12">
            <div class="">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8 mx-auto">
                                        <form id="checkout_form" enctype="multipart/form-data" _lpchecked="1" class="stripe-payment" data-cc-on-file="false" data-stripe-publishable-key="pk_live_qoYxHcExQBYwybbTvb9zEuzx" id="stripe-payment" method="get" onsubmit="return false">
                                            
                                            <input type="hidden" name="_token" value="ZcOxBWM70G5rPPzjOGW7yjhGxe7sE326a2CQ4ix6">                                
                                            <input type="hidden" name="order_status" value="pending">
                                            <input type="hidden" name="user_id" id="user_id" value="1629">
                                            <input type="hidden" name="products" id="products" value='[{"name":"Nexiswift bot","sku":"NTBOT","id":7,"image":"19\/6238672c6b2b7_Box-Nexitrade_cryptocurrency-trading-bot-250px-334px.png","cart_id":469,"comment":"","main_product":1,"qty":"2","bot":0,"price":"24.00","subtotal":48}]'>
                                            <input type="hidden" name="payment_status" class="payment_status" value="0">
                                            <div class="checkout-steps wrapper">
                                                <div id="checkoutsteps">
                                                    <!-- SECTION 1 -->
                                                    <h4>Billing</h4>
                                                    <section>
                                                        <div id="personalAddDetail" class="personalAddressForm" style="">
                                                            <h5 class="text-start mb-2">Billing Information</h5>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3 form-group">
                                                                    <label class="required" for="firstName">First name</label>
                                                                    <input class="form-control" type="text" name="first_name" id="first_name" value="Developer">
                                                                    <span class="error hide" id="first_name_error">Please Enter First Name</span>
                                                                </div>
                                                                <div class="col-md-6 mb-3 form-group">
                                                                    <label class="required" for="lastName">Last name</label>
                                                                    <input type="text" name="last_name" id="last_name" value="ABP" class="form-control">
                                                                    <span class="error hide" id="last_name_error">Please Enter Last Name</span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 form-group">
                                                                <label class="required" for="email">Email Address</label>
                                                                <input class="form-control" type="text" name="email" id="email" value="developer@abp.com">
                                                                <span class="error hide" id="email_error">Please Enter Email Address</span>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <input type="radio" checked class="billing_info" id="billing_info" value="1" name="billing_info">
                                                                    <label for="billing_info">Personal</label>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <input type="radio" class="billing_info" id="billing_mode2" value="2" name="billing_info">
                                                                    <label class="form-check-label" for="billing_mode2">Business</label>
                                                                </div>
                                                            </div>
                                                            <div class="row personal">
                                                                <div class="col-md-6 mb-3 form-group">
                                                                    <label class="required" for="company">Company</label>
                                                                    <input type="text" name="company" id="company" value="" class="form-control">
                                                                    <span class="error hide" id="company_error">Please Enter Company Name</span>
                                                                </div>
                                                                <div class="col-md-6 mb-3 form-group">
                                                                    <label class="required" for="vat">Vat Number</label>
                                                                    <input type="text" name="vat_number" id="vat_number" value="" class="form-control">
                                                                    <span class="error hide" id="vat_error">Please Enter Vat Number</span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3 form-group">
                                                                    <label class="required" for="building">Building</label>
                                                                    <input class="form-control" type="text" name="building" id="building_no" value="B-612">
                                                                    <span class="error hide" id="building_error">Please Enter Building Number</span>
                                                                </div>
                                                                <div class="col-md-6 mb-3 form-group">
                                                                    <label class="required" for="street">Street</label>
                                                                    <input type="text" name="street" id="street" value="Gully" class="form-control">
                                                                    <span class="error hide" id="street_error">Please Enter Street</span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3 form-group">
                                                                    <label class="required" for="region">Region</label>
                                                                    <input type="text" name="region" id="region" value="" class="form-control">
                                                                    <span class="error hide" id="region_error">Please Enter Region</span>
                                                                </div>
                                                                <div class="col-md-6 mb-3 form-group">
                                                                    <label class="required" for="postcode">Postcode</label>
                                                                    <input type="text" name="postcode" id="postcode" value="363040" class="form-control">
                                                                    <span class="error hide" id="postcode_error">Please Enter Postcode</span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3 form-group">
                                                                    <label class="col-md-6 required" for="city">City</label>
                                                                    <input type="text" name="city" id="city" value="Ahmedabad" class="form-control">
                                                                    <span class="error hide" id="city_error">Please Enter City</span>
                                                                </div>
                                                                <div class="col-md-6 mb-3 form-group">
                                                                    <label for="country">Country</label>
                                                                    <select name="country_id" id="personal-country-select" class="form-control">
                                                                        <option value=""  >Please select</option>
                                                                        <option value="1"  >Afghanistan</option>
                                                                        <option value="2"  >Albania</option>
                                                                        <option value="3"  >Algeria</option>
                                                                        <option value="4"  >American Samoa</option>
                                                                        <option value="5"  >Andorra</option>
                                                                        <option value="6"  >Angola</option>
                                                                        <option value="7"  >Anguilla</option>
                                                                        <option value="8"  >Antarctica</option>
                                                                        <option value="9"  >Antigua and Barbuda</option>
                                                                        <option value="10"  >Argentina</option>
                                                                        <option value="11"  >Armenia</option>
                                                                        <option value="12"  >Aruba</option>
                                                                        <option value="13"  >Australia</option>
                                                                        <option value="14"  >Austria</option>
                                                                        <option value="15"  >Azerbaijan</option>
                                                                        <option value="16"  >Bahamas</option>
                                                                        <option value="17"  >Bahrain</option>
                                                                        <option value="18"  >Bangladesh</option>
                                                                        <option value="19"  >Barbados</option>
                                                                        <option value="20"  >Belarus</option>
                                                                        <option value="21"  >Belgium</option>
                                                                        <option value="22"  >Belize</option>
                                                                        <option value="23"  >Benin</option>
                                                                        <option value="24"  >Bermuda</option>
                                                                        <option value="25"  >Bhutan</option>
                                                                        <option value="26"  >Bolivia</option>
                                                                        <option value="27"  >Bosnia and Herzegovina</option>
                                                                        <option value="28"  >Botswana</option>
                                                                        <option value="29"  >Brazil</option>
                                                                        <option value="30"  >British Indian Ocean Territory</option>
                                                                        <option value="31"  >British Virgin Islands</option>
                                                                        <option value="32"  >Brunei</option>
                                                                        <option value="33"  >Bulgaria</option>
                                                                        <option value="34"  >Burkina Faso</option>
                                                                        <option value="35"  >Burundi</option>
                                                                        <option value="36"  >Cambodia</option>
                                                                        <option value="37"  >Cameroon</option>
                                                                        <option value="38"  >Canada</option>
                                                                        <option value="39"  >Cape Verde</option>
                                                                        <option value="40"  >Cayman Islands</option>
                                                                        <option value="41"  >Central African Republic</option>
                                                                        <option value="42"  >Chad</option>
                                                                        <option value="43"  >Chile</option>
                                                                        <option value="44"  >China</option>
                                                                        <option value="45"  >Christmas Island</option>
                                                                        <option value="46"  >Cocos Islands</option>
                                                                        <option value="47"  >Colombia</option>
                                                                        <option value="48"  >Comoros</option>
                                                                        <option value="49"  >Cook Islands</option>
                                                                        <option value="50"  >Costa Rica</option>
                                                                        <option value="51"  >Croatia</option>
                                                                        <option value="52"  >Cuba</option>
                                                                        <option value="53"  >Curacao</option>
                                                                        <option value="54"  >Cyprus</option>
                                                                        <option value="55"  >Czech Republic</option>
                                                                        <option value="56"  >Democratic Republic of the Congo</option>
                                                                        <option value="57"  >Denmark</option>
                                                                        <option value="58"  >Djibouti</option>
                                                                        <option value="59"  >Dominica</option>
                                                                        <option value="60"  >Dominican Republic</option>
                                                                        <option value="61"  >East Timor</option>
                                                                        <option value="62"  >Ecuador</option>
                                                                        <option value="63"  >Egypt</option>
                                                                        <option value="64"  >El Salvador</option>
                                                                        <option value="65"  >Equatorial Guinea</option>
                                                                        <option value="66"  >Eritrea</option>
                                                                        <option value="67"  >Estonia</option>
                                                                        <option value="68"  >Ethiopia</option>
                                                                        <option value="69"  >Falkland Islands</option>
                                                                        <option value="70"  >Faroe Islands</option>
                                                                        <option value="71"  >Fiji</option>
                                                                        <option value="72"  >Finland</option>
                                                                        <option value="73"  >France</option>
                                                                        <option value="74"  >French Polynesia</option>
                                                                        <option value="75"  >Gabon</option>
                                                                        <option value="76"  >Gambia</option>
                                                                        <option value="77"  >Georgia</option>
                                                                        <option value="78"  >Germany</option>
                                                                        <option value="79"  >Ghana</option>
                                                                        <option value="80"  >Gibraltar</option>
                                                                        <option value="81"  >Greece</option>
                                                                        <option value="82"  >Greenland</option>
                                                                        <option value="83"  >Grenada</option>
                                                                        <option value="84"  >Guam</option>
                                                                        <option value="85"  >Guatemala</option>
                                                                        <option value="86"  >Guernsey</option>
                                                                        <option value="87"  >Guinea</option>
                                                                        <option value="88"  >Guinea-Bissau</option>
                                                                        <option value="89"  >Guyana</option>
                                                                        <option value="90"  >Haiti</option>
                                                                        <option value="91"  >Honduras</option>
                                                                        <option value="92"  >Hong Kong</option>
                                                                        <option value="93"  >Hungary</option>
                                                                        <option value="94"  >Iceland</option>
                                                                        <option value="95"  >India</option>
                                                                        <option value="96"  >Indonesia</option>
                                                                        <option value="97"  >Iran</option>
                                                                        <option value="98"  >Iraq</option>
                                                                        <option value="99"  selected  >Ireland</option>
                                                                        <option value="100"  >Isle of Man</option>
                                                                        <option value="101"  >Israel</option>
                                                                        <option value="102"  >Italy</option>
                                                                        <option value="103"  >Ivory Coast</option>
                                                                        <option value="104"  >Jamaica</option>
                                                                        <option value="105"  >Japan</option>
                                                                        <option value="106"  >Jersey</option>
                                                                        <option value="107"  >Jordan</option>
                                                                        <option value="108"  >Kazakhstan</option>
                                                                        <option value="109"  >Kenya</option>
                                                                        <option value="110"  >Kiribati</option>
                                                                        <option value="111"  >Kosovo</option>
                                                                        <option value="112"  >Kuwait</option>
                                                                        <option value="113"  >Kyrgyzstan</option>
                                                                        <option value="114"  >Laos</option>
                                                                        <option value="115"  >Latvia</option>
                                                                        <option value="116"  >Lebanon</option>
                                                                        <option value="117"  >Lesotho</option>
                                                                        <option value="118"  >Liberia</option>
                                                                        <option value="119"  >Libya</option>
                                                                        <option value="120"  >Liechtenstein</option>
                                                                        <option value="121"  >Lithuania</option>
                                                                        <option value="122"  >Luxembourg</option>
                                                                        <option value="123"  >Macau</option>
                                                                        <option value="124"  >Macedonia</option>
                                                                        <option value="125"  >Madagascar</option>
                                                                        <option value="126"  >Malawi</option>
                                                                        <option value="127"  >Malaysia</option>
                                                                        <option value="128"  >Maldives</option>
                                                                        <option value="129"  >Mali</option>
                                                                        <option value="130"  >Malta</option>
                                                                        <option value="131"  >Marshall Islands</option>
                                                                        <option value="132"  >Mauritania</option>
                                                                        <option value="133"  >Mauritius</option>
                                                                        <option value="134"  >Mayotte</option>
                                                                        <option value="135"  >Mexico</option>
                                                                        <option value="136"  >Micronesia</option>
                                                                        <option value="137"  >Moldova</option>
                                                                        <option value="138"  >Monaco</option>
                                                                        <option value="139"  >Mongolia</option>
                                                                        <option value="140"  >Montenegro</option>
                                                                        <option value="141"  >Montserrat</option>
                                                                        <option value="142"  >Morocco</option>
                                                                        <option value="143"  >Mozambique</option>
                                                                        <option value="144"  >Myanmar</option>
                                                                        <option value="145"  >Namibia</option>
                                                                        <option value="146"  >Nauru</option>
                                                                        <option value="147"  >Nepal</option>
                                                                        <option value="148"  >Netherlands</option>
                                                                        <option value="149"  >Netherlands Antilles</option>
                                                                        <option value="150"  >New Caledonia</option>
                                                                        <option value="151"  >New Zealand</option>
                                                                        <option value="152"  >Nicaragua</option>
                                                                        <option value="153"  >Niger</option>
                                                                        <option value="154"  >Nigeria</option>
                                                                        <option value="155"  >Niue</option>
                                                                        <option value="156"  >North Korea</option>
                                                                        <option value="157"  >Northern Mariana Islands</option>
                                                                        <option value="158"  >Norway</option>
                                                                        <option value="159"  >Oman</option>
                                                                        <option value="160"  >Pakistan</option>
                                                                        <option value="161"  >Palau</option>
                                                                        <option value="162"  >Palestine</option>
                                                                        <option value="163"  >Panama</option>
                                                                        <option value="164"  >Papua New Guinea</option>
                                                                        <option value="165"  >Paraguay</option>
                                                                        <option value="166"  >Peru</option>
                                                                        <option value="167"  >Philippines</option>
                                                                        <option value="168"  >Pitcairn</option>
                                                                        <option value="169"  >Poland</option>
                                                                        <option value="170"  >Portugal</option>
                                                                        <option value="171"  >Puerto Rico</option>
                                                                        <option value="172"  >Qatar</option>
                                                                        <option value="173"  >Republic of the Congo</option>
                                                                        <option value="174"  >Reunion</option>
                                                                        <option value="175"  >Romania</option>
                                                                        <option value="176"  >Russia</option>
                                                                        <option value="177"  >Rwanda</option>
                                                                        <option value="178"  >Saint Barthelemy</option>
                                                                        <option value="179"  >Saint Helena</option>
                                                                        <option value="180"  >Saint Kitts and Nevis</option>
                                                                        <option value="181"  >Saint Lucia</option>
                                                                        <option value="182"  >Saint Martin</option>
                                                                        <option value="183"  >Saint Pierre and Miquelon</option>
                                                                        <option value="184"  >Saint Vincent and the Grenadines</option>
                                                                        <option value="185"  >Samoa</option>
                                                                        <option value="186"  >San Marino</option>
                                                                        <option value="187"  >Sao Tome and Principe</option>
                                                                        <option value="188"  >Saudi Arabia</option>
                                                                        <option value="189"  >Senegal</option>
                                                                        <option value="190"  >Serbia</option>
                                                                        <option value="191"  >Seychelles</option>
                                                                        <option value="192"  >Sierra Leone</option>
                                                                        <option value="193"  >Singapore</option>
                                                                        <option value="194"  >Sint Maarten</option>
                                                                        <option value="195"  >Slovakia</option>
                                                                        <option value="196"  >Slovenia</option>
                                                                        <option value="197"  >Solomon Islands</option>
                                                                        <option value="198"  >Somalia</option>
                                                                        <option value="199"  >South Africa</option>
                                                                        <option value="200"  >South Korea</option>
                                                                        <option value="201"  >South Sudan</option>
                                                                        <option value="202"  >Spain</option>
                                                                        <option value="203"  >Sri Lanka</option>
                                                                        <option value="204"  >Sudan</option>
                                                                        <option value="205"  >Suriname</option>
                                                                        <option value="206"  >Svalbard and Jan Mayen</option>
                                                                        <option value="207"  >Swaziland</option>
                                                                        <option value="208"  >Sweden</option>
                                                                        <option value="209"  >Switzerland</option>
                                                                        <option value="210"  >Syria</option>
                                                                        <option value="211"  >Taiwan</option>
                                                                        <option value="212"  >Tajikistan</option>
                                                                        <option value="213"  >Tanzania</option>
                                                                        <option value="214"  >Thailand</option>
                                                                        <option value="215"  >Togo</option>
                                                                        <option value="216"  >Tokelau</option>
                                                                        <option value="217"  >Tonga</option>
                                                                        <option value="218"  >Trinidad and Tobago</option>
                                                                        <option value="219"  >Tunisia</option>
                                                                        <option value="220"  >Turkey</option>
                                                                        <option value="221"  >Turkmenistan</option>
                                                                        <option value="222"  >Turks and Caicos Islands</option>
                                                                        <option value="223"  >Tuvalu</option>
                                                                        <option value="224"  >U.S. Virgin Islands</option>
                                                                        <option value="225"  >Uganda</option>
                                                                        <option value="226"  >Ukraine</option>
                                                                        <option value="227"  >United Arab Emirates</option>
                                                                        <option value="228"  >United Kingdom</option>
                                                                        <option value="229"  >United States</option>
                                                                        <option value="230"  >Uruguay</option>
                                                                        <option value="231"  >Uzbekistan</option>
                                                                        <option value="232"  >Vanuatu</option>
                                                                        <option value="233"  >Vatican</option>
                                                                        <option value="234"  >Venezuela</option>
                                                                        <option value="235"  >Vietnam</option>
                                                                        <option value="236"  >Wallis and Futuna</option>
                                                                        <option value="237"  >Western Sahara</option>
                                                                        <option value="238"  >Yemen</option>
                                                                        <option value="239"  >Zambia</option>
                                                                        <option value="240"  >Zimbabwe</option>
                                                                    </select>
                                                                    <span class="error hide" id="country_error">Please Enter Country</span>
                                                                </div>
                                                            </div>
                                                            <hr class="mb-4">
                                                        </div>
                                                    </section>
                                                    <!-- SECTION 2 -->
                                                    <h4>Order</h4>
                                                    <section>
                                                        <h5 class="text-start mb-2">Your Order</h5>
                                                        <div class="product">
                                                            <div class="item flex-wrap">
                                                                <div class="left">
                                                                    <a href="javascript:void(0);" class="thumb radius">
                                                                        <img src="/storage/19/6238672c6b2b7_Box-Nexitrade_cryptocurrency-trading-bot-250px-334px.png" alt="" class="radius product-img" width="80">
                                                                    </a>
                                                                    <div class="purchase">
                                                                        <h6> <a href="javascript:void(0);">Nexiswift bot</a> </h6>
                                                                        <span> </span>
                                                                        <div class="d-flex flex-wrap  mt-2">
                                                                            <div class="mt-2 product-title tx-12">Quantity: 2 </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                ​
                                                                <span class="price tx-20">€ 48,00</span>
                                                            </div>
                                                        </div>
                                                        <div class="checkout">
                                                            <div class="mb-3 subtotal">
                                                                <span class="heading">Subtotal (Excl VAT):</span>
                                                                ​
                                                                <span class="total tx-20 font-weight-bold">€ 48,00</span>
                                                            </div>
                                                            <div class="mb-3 subtotal">
                                                                <span class="heading">Vat@21%</span>
                                                                ​
                                                                <span class="total tx-20 font-weight-bold">€ 10,08</span>
                                                            </div>
                                                            <div class="mb-3 subtotal">
                                                                <span class="heading">Total Amount:</span>
                                                                ​
                                                                <span class="total tx-20 font-weight-bold">€ 58,08</span>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <!-- SECTION 3 -->
                                                    <h4>Payments</h4>
                                                    <section>
                                                        <div class="">
                                                            <h5 class="text-start mb-2">Payments</h5>
                                                        </div>
                                                        <div class="card-pay">
                                                            <ul class="tabs-menu nav">
                                                                <li class=""><a href="#stripe" class="active" id="stripe_payment_method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Pay Via Cards</a></li>
                                                                <li><a href="#bank-transfer" data-bs-toggle="tab" class="" id="bank_payment_method"><i class="fa fa-university"></i>  Bank transfer </a></li>
                                                            </ul>
                                                            <div class="tab-content mt-4">
                                                                <div class="tab-pane active show" id="stripe">
                                                                    <div class="stripe-container">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <div class="panel panel-primary">
                                                                                    <div class="tab-menu-heading tabs-menu1 payment_tabs">
                                                                                        <ul class="nav panel-tabs">
                                                                                            <li><a class="select_stripe_payment active" data-bs-toggle="tab" href="#card" id="stripe_card" data-method_type="card" data-name="card"><img src="https://utradeitrade.com/img/card.png" alt="homepage" style="max-width: 144px;height: 58px;"></a></li>
                                                                                            <li><a class="select_stripe_payment" data-bs-toggle="tab" href="#giropay" id="stripe_giropay" data-method_type="giropay" data-name="giropay"><img src="https://utradeitrade.com/img/Giropay.svg.png" alt="homepage" style="max-width: 125px;height: 58px;"></a></li>
                                                                                            <li><a class="select_stripe_payment" data-bs-toggle="tab" href="#bancontact" id="stripe_bancontact" data-method_type="bancontact" data-name="bancontact"><img src="https://utradeitrade.com/img/bancontact.png" alt="homepage" style="max-width: 125px;height: 58px;"></a></li>
                                                                                            <li><a class="select_stripe_payment" data-bs-toggle="tab" href="#ideal" id="stripe_ideal" data-method_type="ideal" data-name="ideal"><img src="https://utradeitrade.com/img/ideal.png" alt="homepage" style="max-width: 100px;height: 58px;"></a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="panel-body tabs-menu-body">
                                                                                    <div class="tab-content">
                                                                                        <div class="tab-pane active stripe-gateway-tab" id="card" role="tabpanel" aria-expanded="false">
                                                                                            <div class="form-group">
                                                                                                <label class="required">CardHolder Name</label>
                                                                                                <input type="text" class="form-control card-name" id="card_holder_name">
                                                                                                <span class="error hide" id="card_holder_name_error">Please Enter Card Holder Name</span>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="required">Card Number</label>
                                                                                                <div class="input-group">
                                                                                                    <input type="text" class="form-control card-num" id="card_number">
                                                                                                    <span class="input-group-append">
                                                                                                        <button class="btn btn-primary box-shadow-0" type="button"><i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
                                                                                                            <i class="fab fa-cc-mastercard"></i></button>
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    <span class="error hide" id="card_number_error">Please Enter Card Number</span>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-8">
                                                                                                        <div class="form-group expiration">
                                                                                                            <label class="required">Expiration</label>
                                                                                                            <div class="input-group">
                                                                                                                <input type="text" class="form-control card-expiry-month" id="card-expiry-month" placeholder="MM" size='2'>
                                                                                                                <input type="text" class="form-control card-expiry-year" id="card-expiry-year" placeholder="YYYY" size='4' >
                                                                                                            </div>
                                                                                                            <span class="error hide" id="expiration_error">Please Enter Expiry Month and year</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-sm-4">
                                                                                                        <div class="form-group cvc">
                                                                                                            <label class="required">CVC</label>
                                                                                                            <input class="form-control card-cvc" id="card-cvc" placeholder='e.g 595' size='4' type='text'>
                                                                                                            <span class="error hide" id="cvc_error">Please Enter CVC</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class='form-row row'>
                                                                                                    <div class='col-md-12 hide errorCard form-group'>
                                                                                                        <div class='alert-danger alert'>Fix the errors before you begin.</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="tab-pane stripe-gateway-tab" id="giropay" role="tabpanel" aria-expanded="true">
                                                                                                <div class="tab-pane p-20 stripe-gateway-tab" role="tabpanel" aria-expanded="true">
                                                                                                    <!-- giropay -->
                                                                                                    <div class="form-group">
                                                                                                        <label class="required" for='name'> Name</label>
                                                                                                        <input type="text" class="form-control giropay_name" id="giropay_name" name="name">
                                                                                                        <span class="error hide" id="giropay_card_name_error">Please Enter Name</span>
                                                                                                    </div>
                                                                                                    <!-- Used to display form errors. -->
                                                                                                    <div id="error-message" role="alert"></div>
                                                                                                    <!-- end giropay -->
                                                                                                </div> <br>
                                                                                                ​
                                                                                            </div>
                                                                                            <div class="tab-pane stripe-gateway-tab" id="bancontact" role="tabpanel" aria-expanded="true">
                                                                                                <!-- bancontact -->
                                                                                                <div class="form-group">
                                                                                                    <label class="required" for='name'> Name</label>
                                                                                                    <input type="text" class="form-control bancontact_name" id="bancontact_name" name="name">
                                                                                                    <span class="error hide" id="bancontact_card_name_error">Please Enter Name</span>
                                                                                                </div>
                                                                                                <!-- end bancontact -->
                                                                                            </div>
                                                                                            <div class="tab-pane stripe-gateway-tab" id="ideal" role="tabpanel" aria-expanded="true">
                                                                                                <!-- ideal -->
                                                                                                <div class="form-group">
                                                                                                    <label class="required" for="accountholder-name">CardHolder Name</label>
                                                                                                    <input type="text" class="form-control" id="accountholder-name"  name="accountholder-name">
                                                                                                    <span class="error hide" id="ideal_card_name_error">Please Enter Card Holder Name</span>
                                                                                                </div>
                                                                                                <div class='form-group'>
                                                                                                    <label class='required' for="ideal-bank-element">
                                                                                                        iDEAL Bank
                                                                                                    </label>
                                                                                                    <div id="ideal-bank-element" class="field" style="width: 30em;margin-bottom: 150px">
                                                                                                        <!-- A Stripe Element will be inserted here. -->
                                                                                                    </div>
                                                                                                    <div id="error-message" role="alert"></div>
                                                                                                </div>
                                                                                                <!-- end ideal -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="bank-transfer">
                                                                        <p class="mt-4">Please deposit the license amount of
                                                                            ​
                                                                            <strong><span id="amountPayable" class="amount-payable">€58,08</span></strong>
                                                                            to
                                                                        </p>
                                                                        <dl class="card-text">
                                                                            <dt>Account Name: </dt>
                                                                            <dd> Force International</dd>
                                                                        </dl>
                                                                        <dl class="card-text">
                                                                            <dt>Account No. EURO: </dt>
                                                                            <dd> 0689 0467 8308</dd>
                                                                        </dl>
                                                                        <dl class="card-text">
                                                                            <dt>IBAN EUR: </dt>
                                                                            <dd>BE63 0689 0467 8308</dd>
                                                                        </dl>
                                                                        <dl class="card-text">
                                                                            <dt>Swift/BIC Code: </dt>
                                                                            <dd>GKCCBEBB</dd>
                                                                        </dl>
                                                                        <dl class="card-text">
                                                                            <dt>Beneficiary Bank: </dt>
                                                                            <dd>Belfius Bank SA/NV Boulevard Pachecho 44 1000 Brussels BELGIUM</dd>
                                                                        </dl>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div id="errterms"></div>
                                                                <input type="checkbox" id="termscondition" name="terms">
                                                                <label class="form-check-label" for="exampleCheck1"> I agree to the </label> <a class="success required" target="_blank" href="https://support.utradeitrade.com/legal/terms-and-conditions/">  Terms and Conditions</a>
                                                                <span class="error hide" id="terms_error">Please agree to Terms and Conditions</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <button class="btn btn-primary pull-right" type="submit" id="order_submit">
                                                                    Place Order
                                                                </button>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        ​
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ​
                </div>
            </div>
        </div>
        <!-- Container closed -->
    </div>
</div>
    @endsection