<script type="text/javascript">

   

</script>






<form id="myform" method="post"  >

            <div data-role="page" id="first_step" >
            
          
            
            
                        <div data-role="header">
                                <h1>form: page 1/4</h1>
                                
                                 <a  data-rel="back" class="ui-btn-left" data-icon="arrow-l" data-theme="a">Back</a>
              
               					<a href="<?PHP echo base_url(); ?>"  data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home"></a>
                                
                        </div><!-- /header -->
            
            		<div data-role="content">
                    
               

  <h4> <?php   	$subject = str_replace("-", " ", $title );   	$subject = strtoupper($subject);     echo "". $subject ;  ?></h4>

<hr/>

                
                
                                           <p><label for="name">Name <span>*</span></label></p>
                                            <input type="text" name="Name" id="name" class="required" />
                                            <p><label for="user">Last Name <span>*</span></label></p>
                                            
                                            <input  type="text" name="Second_name" id="second_name" class="required"/>
                        
                                            <input type="hidden" name="Subject" value=" <?php  echo $subject; ?> ">
               
               
   
              
<div data-role="fieldcontain">
              
	<fieldset >

                                                            		<legend>Date of Birth:</legend><br />
                                                            		<select name="dob_month"  id="dob_month">
                                                                    <option >Month</option >
                                                                    <option value="jan">January</option>
                                                                
                                                                    <option value="feb">February</option>
                                                                    <option value="mar">March</option>
                                                                    <option value="apr">April</option>
                                                                    <option value="may">May</option>
                                                                    <option value="jun">June</option>
                                                                    <option value="jul">July</option>
                                                                    <option value="aug">August</option>
                                                                    <option value="sep">September</option>
                                                                    <option value="oct">October</option>
                                                                    <option value="nov">November</option>
                                                                    <option value="dec">December</option>
                                                                    
                                                       				</select>
                                                            		<select  name="dob_day" id="dob_day">
                                                                    
                                                               		 <option>Day</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    
                                                                         <option value="13">13</option>
                                                                              <option value="14">14</option>
                                                                                   <option value="15">15</option>
                                                                                        <option value="16">16</option>
                                                                                             <option value="17">17</option>
                                                                                                  <option value="18">18</option>
                                                                                                       <option value="19">19</option>
                                                                                                            <option value="20">20</option>
                                                                                                                 <option value="21">21</option>
                                                                                                                      <option value="22">22</option>
                                                                                                                           <option value="23">23</option>
                                                                                                                                <option value="24">24</option>
                                                                                                                                     <option value="25">25</option>
                                                                                                                                          <option value="26">26</option>
                                                                                                                                          <option value="27">27</option>
                                                                                                                                          <option value="28">28</option>
                                                                                                                                          <option value="29">29</option>
                                                                                                                                           <option value="30">30</option>
                                                                                                                                             <option value="31">31</option>
                                                                                                                                          
                                                                    
                                                        			</select>
                                                            		<select  name="dob_year" id="dob_year">
                                                                    
                                                            		<option>Year</option>
                                                                    
                                                        		 	<option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1950">1950</option>
                                                        </select>

</fieldset>

</div>

<fieldset>
                                                    
                                                    <label for="title">Title*</label>
                                                    
                                                        <select name="Title" id="title" tabindex="6" style="  ">
                                                        <option value="0"> Mr, Ms, Miss, Mrs</option>
                                                        <option value="Mr">Mr</option>
                                                        <option value="Ms">Ms</option>
                                                        <option value="Miss">Miss</option>
                                                        <option value="Mrs">Mrs</option>
                                                    
                                                    </select>
                                                    
 </fieldset>
 
 <hr>

 <fieldset>

                                                    <h2><legend>Contact Details:</legend></h2>
                                                      
                                                    
                                                    <label for="Telephone">Telephone</label>
                                                    
                                                    
                                                    <input type="text" id="telephone" name="Telephone" tabindex="7"  />
                                                    <label for="Mobile">Mobile</label>
                                                    <input type="text" name="Mobile" id="mobile" tabindex="8"   class="required" />
                                                    
                                                    
                                                    
                                                     <label for="email">Email <span>*</span></label>
                                                     <input type="text" name="email" size="30"  class="required email" id="email"  />
                                                    
</fieldset>


 
<fieldset data-role="controlgroup">

                                <legend>Call Me Back?</legend>
                                <input type="radio" name="call_back" id="call_back-1" value="yes" checked="checked" />
                                <label for="call_back-1">Yes</label>
                        
                                <input type="radio" name="call_back" id="call_back-2" value="no"  />
                                <label for="call_back-2">No</label>
                                
</fieldset>
                                                    
<hr />

<fieldset >
                                                    	<h2><legend>Address Details:</legend></h2>
                                                        
                                                        <label for="address">Address</label>
                                                        
                                                        <input type="text" id="address" name="Address" tabindex="9" class="required" />
                                                        
                                                        <label for="Town">Town / City*</label>
                                                        
                                                        <input type="text" name="Town" id="town" tabindex="14" class="required" />
                                                        
                                                        
                                                         <label for="County">County</label>
                                                        
                                                        <input type="text" name="County" id="county" tabindex="14"  class="required"/>
                                                        
                                                    
                                                     <label for="Postcode">Postcode*</label>
                                                    
                                                    <input type="text" id="Postcode" name="Postcode" tabindex="11"  class="required"/>
                                                    
                                                 


    
</fieldset>

<fieldset>
            
                								 <label for="Birth">Country of birth*</label>
                                                   
                								<select name="Birth">
                
                 								<option value="  " selected>(please select a country)</option>
      
                                                <option value="AF">Afghanistan</option>
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
                                                <option value="BO">Bolivia</option>
                                                <option value="BA">Bosnia and Herzegowina</option>
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
                                                <option value="CI">Cote d'Ivoire</option>
                                                <option value="HR">Croatia (Hrvatska)</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="TP">East Timor</option>
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
                                                <option value="FX">France, Metropolitan</option>
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
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard and Mc Donald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran (Islamic Republic of)</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
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
                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macau</option>
                                                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
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
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="AN">Netherlands Antilles</option>
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
                                                <option value="RE">Reunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="KN">Saint Kitts and Nevis</option> 
                                                <option value="LC">Saint LUCIA</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option> 
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SK">Slovakia (Slovak Republic)</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SH">St. Helena</option>
                                                <option value="PM">St. Pierre and Miquelon</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
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
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands (British)</option>
                                                <option value="VI">Virgin Islands (U.S.)</option>
                                                <option value="WF">Wallis and Futuna Islands</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="YU">Yugoslavia</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                                
                                           </select>


                                                <label for="Residence">Usual Country of Residence</label>
                                                <select name="Residence">
                                                  <option value="  " selected>(please select a country)</option>
                                                    <option value="--">none</option>
                                                    <option value="AF">Afghanistan</option>
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
                                                    <option value="BO">Bolivia</option>
                                                    <option value="BA">Bosnia and Herzegowina</option>
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
                                                    <option value="CI">Cote d'Ivoire</option>
                                                    <option value="HR">Croatia (Hrvatska)</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="TP">East Timor</option>
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
                                                    <option value="FX">France, Metropolitan</option>
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
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HM">Heard and Mc Donald Islands</option>
                                                    <option value="VA">Holy See (Vatican City State)</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran (Islamic Republic of)</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
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
                                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macau</option>
                                                    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
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
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="AN">Netherlands Antilles</option>
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
                                                    <option value="RE">Reunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russian Federation</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="KN">Saint Kitts and Nevis</option> 
                                                    <option value="LC">Saint LUCIA</option>
                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">Sao Tome and Principe</option> 
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SK">Slovakia (Slovak Republic)</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SH">St. Helena</option>
                                                    <option value="PM">St. Pierre and Miquelon</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syrian Arab Republic</option>
                                                    <option value="TW">Taiwan, Province of China</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                    <option value="TH">Thailand</option>
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
                                                    <option value="VE">Venezuela</option>
                                                    <option value="VN">Viet Nam</option>
                                                    <option value="VG">Virgin Islands (British)</option>
                                                    <option value="VI">Virgin Islands (U.S.)</option>
                                                    <option value="WF">Wallis and Futuna Islands</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="YU">Yugoslavia</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                    
                                                </select>



</fieldset>

<hr>


<fieldset>
                                            <h2>	<legend>Ethinicity:</legend></h2>
                                            
                                            
                                            <p>Ethinicity *</p>
                                            
                                            <select name="Ethinicity" id="Ethinicity" tabindex="15" >
                                            
                                            <option value="0">Please Select</option>
                                            <option value="English / Welsh / Scottish / Northern Irish / British">English / Welsh / Scottish / Northern Irish / British</option>
                                            <option value="Irish">Irish</option>
                                            <option value="Gypsy or Irish Traveller">Gypsy or Irish Traveller</option>
                                            <option value="Any Other White Background">Any Other White Background</option>
                                            <option value="White and Black Caribbean">White and Black Caribbean</option>
                                            <option value="White and Black African">White and Black African</option>
                                            <option value="White and Asian">White and Asian</option>
                                            <option value="Any Other Mixed / multiple ethnic background">Any Other Mixed / multiple ethnic background</option>
                                            <option value="Indian">Indian</option>
                                            <option value="Pakistani">Pakistani</option>
                                            <option value="Bangladeshi">Bangladeshi</option>
                                            <option value="Chinese">Chinese</option>
                                            <option value="Any other Asian background">Any other Asian background</option>
                                            <option value="African">African</option>
                                            <option value="Caribbean">Caribbean</option>
                                            <option value="Any other Black / African / Caribbean background">Any other Black / African / Caribbean background</option>
                                            <option value="Arab">Arab</option>
                                            <option value="Any other ethnic group">Any other ethnic group</option>
                                            
                                            </select>


                                            <p>Your first language *</p>
                                            
                                            
                                            <select name="language" id="language" tabindex="16" >
                                            
                                            <option value="0">Please select</option>
                                            <option value="Arabic">Arabic</option>
                                            <option value="Bengali">Bengali</option>
                                            <option value="Chinese (Cantonese or Mandarin)">Chinese (Cantonese or Mandarin)</option>
                                            <option value="Dutch">Dutch</option>
                                            <option value="English">English</option>
                                            <option value="French">French</option>
                                            <option value="German">German</option>
                                            <option value="Modern Greek">Modern Greek</option>
                                            <option value="Gujarati">Gujarati</option>
                                            <option value="Modern Hebrew">Modern Hebrew</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="Indonesian">Indonesian</option>
                                            <option value="Irish">Irish</option>
                                            <option value="Italian">Italian</option>
                                            <option value="Japanese">Japanese</option>
                                            <option value="Korean">Korean</option>
                                            <option value="Maltese">Maltese</option>
                                            <option value="Persian">Persian</option>
                                            <option value="Polish">Polish</option>
                                            <option value="Portuguese">Portuguese</option>
                                            <option value="Punjabi">Punjabi</option>
                                            <option value="Russian">Russian</option>
                                            <option value="Spanish">Spanish</option>
                                            <option value="Somali">Somali</option>
                                            <option value="Turkish">Turkish</option>
                                            <option value="Urdu">Urdu</option>
                                            <option value="Welsh">Welsh</option>
                                            
                                            </select>

</fieldset>

 

    
    
    
  

 
<fieldset data-role="controlgroup">

                                <legend>Have you been a permanent resident in the UK/EEA for the last 3 years?</legend>
                                <input type="radio" name="Permanent" id="radio-choice-1" value="yes" checked="checked" />
                                <label for="radio-choice-1">Yes</label>
                        
                                <input type="radio" name="Permanent" id="radio-choice-2" value="no"  />
                                <label for="radio-choice-2">No</label>
                                
</fieldset>

  

                            	<p>If no state where you have been living for the past 3 years</p>
                            
                                <input type="text" id="NoState" name="NoState" tabindex="9"  />


<fieldset data-role="controlgroup">

                            	<legend>Are you a British Citizen?</legend>
                           		<input type="radio" name="Citizen" id="radio-choice-1" value="yes" checked="checked" />
                                <label for="radio-choice-1">Yes</label>
                        
                                <input type="radio" name="Citizen" id="radio-choice-2" value="no"  />
                                <label for="radio-choice-2">No</label>

     	
</fieldset>

 <fieldset>

												<p>If no, what is your nationality?</p>

                                                <select>
                                                    <option value="  " selected>(please select a country)</option>
                                                    <option value="--">none</option>
                                                    <option value="AF">Afghanistan</option>
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
                                                    <option value="BO">Bolivia</option>
                                                    <option value="BA">Bosnia and Herzegowina</option>
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
                                                    <option value="CI">Cote d'Ivoire</option>
                                                    <option value="HR">Croatia (Hrvatska)</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="TP">East Timor</option>
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
                                                    <option value="FX">France, Metropolitan</option>
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
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HM">Heard and Mc Donald Islands</option>
                                                    <option value="VA">Holy See (Vatican City State)</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran (Islamic Republic of)</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
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
                                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macau</option>
                                                    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
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
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="AN">Netherlands Antilles</option>
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
                                                    <option value="RE">Reunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russian Federation</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="KN">Saint Kitts and Nevis</option> 
                                                    <option value="LC">Saint LUCIA</option>
                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">Sao Tome and Principe</option> 
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SK">Slovakia (Slovak Republic)</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SH">St. Helena</option>
                                                    <option value="PM">St. Pierre and Miquelon</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syrian Arab Republic</option>
                                                    <option value="TW">Taiwan, Province of China</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                    <option value="TH">Thailand</option>
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
                                                    <option value="VE">Venezuela</option>
                                                    <option value="VN">Viet Nam</option>
                                                    <option value="VG">Virgin Islands (British)</option>
                                                    <option value="VI">Virgin Islands (U.S.)</option>
                                                    <option value="WF">Wallis and Futuna Islands</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="YU">Yugoslavia</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>

  
							<p>If you were not born in the EEA/ EU please state the date of your arrival. (Great Britain is part of the EEA/ EU)</p>

							<textarea rows="5" cols="30" name="Arrival" ></textarea>

							<p><strong>If you have not always resided in the EEA/EU</strong> please give dates and reasons below. This information is required for the purpose of assessing your tuition fee status.</p>

							<textarea rows="5" cols="30" name="Tutionfee" ></textarea>

                            <p><strong>If you have not always resided in the EEA/EU</strong></p>
                            <p>On what basis are you staying in the UK?:</p>
                            
</fieldset>


<div  data-role="fieldcontain">

<fieldset data-role="controlgroup">
                
                                <input type="checkbox" name="Indefinite_leave_to_remain" id="checkbox-1" class="custom" />
                                <label for="checkbox-1">Indefinite leave to remain</label>
                                
                                <input type="checkbox" name="Limited_Leave_to_Remain" id="checkbox-2" class="custom" />
                                <label for="checkbox-2">Limited leave to remain</label>
                                
                                <input type="checkbox" name="Student" id="checkbox-3" class="custom" />
                                <label for="checkbox-3">Student Visa/ Work Permit/ Visitor's Visa</label>
                                
                                <input type="checkbox" name="Asylum" id="checkbox-4" class="custom" />
                                <label for="checkbox-4">Asylum seeker, awaiting Home Office decision</label>
                                
                                <input type="checkbox" name="Refugee" id="checkbox-5" class="custom" />
                                <label for="checkbox-5">Refugee</label>
                                
                                <input type="checkbox" name="Discretionary" id="checkbox-6" class="custom" />
                                <label for="checkbox-6">Granted discretionary leave to remain/ humanitarian protection or expectional leave to enter or remain</label>

</fieldset>

</div>

  

<hr />


							<p>If there are any restrictions or limitations on your stay in the U.K, please specify</p>



							<textarea rows="5" cols="30" name="Restrictions" ></textarea>


							<p>*Emergency Number</p>

							<input type="text" name="Emergency_Number" class="required"/>

							<p>*Emergency Contact</p>

							<input type="text" name="Emergency_Contact"  class="required"/>


                            <hr />
                            
                            <p><strong>If you are aged 19 or over you may be eligible for concessionary fees.</strong></p>
                            
                            <p>If you are in receipt of income based benefits. Please indicate any that you currently recieve:</p>





<div  data-role="fieldcontain">

<fieldset data-role="controlgroup">
                
                        <input type="checkbox" name="Jobseekers" id="checkbox-1" class="custom" />
                        <label for="checkbox-1">Jobseekers Allowance</label>
                        
                        <input type="checkbox" name="Employment" id="checkbox-2" class="custom" />
                        <label for="checkbox-2">Employment and Support Allowance</label>

</fieldset>

</div>

  

<hr />




                
 <input class="submit" type="submit" name="submit_first" id="submit_first" value="forward" data-role="button" data-theme="b" />       
                
                <!--    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
            
 
                
</div>

<div data-role="footer" data-theme="a">	

    	
	<div data-role="navbar">
    
    
		<ul>
			<li ><a href="index.php"  data-icon="home" >home</a></li>
		<li><a href="includes/contact.php" data-icon="contact" data-transition="slide">contact us</a></li>
			<li><a href="http://www.waltham.ac.uk/">Main Site</a></li>
		</ul>
	</div><!-- /navbar -->
</div>
     
 
                
               
</div>     


<!-- #second_step -->
<div data-role="page" id="app_second_step">
              
    <div data-role="header">
                                <h1>form: page 2/4</h1>
                                
                                 <a data-rel="back" class="ui-btn-left" data-icon="arrow-l" data-theme="a">Back</a>
              
               					<a href="index"  data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home"></a>
                                
                        </div><!-- /header -->
            
<div data-role="content">

            
                    
<fieldset>

<h3>(Qualification entry optional for part time courses)</h3>

							<h4>Most Recent Qualifcation / Predicted</h4>

							<p>Level</p>

                            <select name="Qualification_Level" id="Qualification_Level" class="level">
                            <option value="">Please select</option>
                            <option value="GCSE">GCSE</option>
                            <option value="GNVQ">GNVQ</option>
                            <option value="A Level">A Level</option>
                            <option value="Foundation Degree">Foundation Degree</option>
                            <option value="BTEC">BTEC</option>
                            <option value="NVQ">NVQ</option>
                            <option value="OCN">OCN</option>
                            <option value="NCFE">NCFE</option>
                            <option value="City &amp; Guilds">City &amp; Guilds</option>
                            <option value="Other">Other</option>
                            </select>

                            <p>qualification</p>
                            
                            <input type="text" name="Highest_qualification" autocomplete="off" id="Highest_qualification" class="qualification"   />
                            
                            
                            <p>Grade</p>
                            
                            <input type="text" name="Highest_grade" id="Highest_grade" class="grade"  />
                            
                            <p>predicted</p>
                            <select name="Predicted" id="Highest_predicted" class="Highest_predicted">
                            <option value="">Please select</option>
                            <option value="Predicted">Predicted</option>
                            <option value="Actual">Actual</option>
                            </select>

								<br/>
                                <hr />
                                
                                <h4>Previous Qualification</h4>
                                
                                <p>Level</p>
                                
                                <select name="Previous_level_q_01" id="levelq" class="level">
                                <option value="">Please select</option>
                                <option value="GCSE">GCSE</option>
                                <option value="GNVQ">GNVQ</option>
                                <option value="A Level">A Level</option>
                                <option value="Foundation Degree">Foundation Degree</option>
                                <option value="BTEC">BTEC</option>
                                <option value="NVQ">NVQ</option>
                                <option value="OCN">OCN</option>
                                <option value="NCFE">NCFE</option>
                                <option value="City &amp; Guilds">City &amp; Guilds</option>
                                <option value="Other">Other</option>
                                </select>
                                
                                <p>qualification</p>
                                
                                <input type="text" name="Previous_qualification_01" autocomplete="off" id="Previous_qualification_01" class="qualification"   />
                                
                                
                                <p>Grade</p>
                                
                                <input type="text" name="Previous_grade_01" id="Previous_grade_01" class="grade"  />
                                
                                <p>predicted</p>
                                <select name="Previous_predicted_01" id="Previous_predicted_01" class="predicted"  onchange="Qual(this.name,this.value);">
                                <option value="">Please select</option>
                                <option value="Predicted">Predicted</option>
                                <option value="Actual">Actual</option>
                                </select>
                                
                                <br/>
                                
                                <hr />
                                
                                
                                <h4>Previous Qualification</h4>
                                
                                <p>Level</p>
                                
                                <select name="Previous_level_q_02" id="Previous_level_q_02" class="level">
                                <option value="">Please select</option>
                                <option value="GCSE">GCSE</option>
                                <option value="GNVQ">GNVQ</option>
                                <option value="A Level">A Level</option>
                                <option value="Foundation Degree">Foundation Degree</option>
                                <option value="BTEC">BTEC</option>
                                <option value="NVQ">NVQ</option>
                                <option value="OCN">OCN</option>
                                <option value="NCFE">NCFE</option>
                                <option value="City &amp; Guilds">City &amp; Guilds</option>
                                <option value="Other">Other</option>
                                </select>
                                
                                <p>qualification</p>
                                
                                <input type="text" name="Previous_qualification_02" autocomplete="off" id="Previous_qualification_02" class="qualification"   />
                                
                                
                                <p>Grade</p>
                                
                                <input type="text" name="Previous_grade_02" id="Previous_grade_02" class="grade"  />
                                
                                <p>predicted</p>
                                <select name="Previous_predicted_02" id="Previous_predicted_02" class="predicted"  onchange="Qual(this.name,this.value);">
                                <option value="">Please select</option>
                                <option value="Predicted">Predicted</option>
                                <option value="Actual">Actual</option>
                                </select>
                                
                                
</fieldset>

<br/>

<hr />


  
                    
                    <div id="container"></div>
                    
                   
                    
                         
                    
                     <br />
                       <button id="mybutton" data-role="button" data-theme="a" >add more qualifications</button>
                       
                       
                    
                    <hr />


<fieldset>

								           <h3>School attended</h3>


                                <select class="schoolname" id="Schoolname" name="Schoolname" >
                                <option value="0"> Please select</option>
                                <option value="Broomfield School">Broomfield School</option>
                                <option value="Gladys Aylward School">Gladys Aylward School</option>
                                <option value="Highlands School">Highlands School</option>
                                <option value="Palmers Green School">Palmers Green School</option>
                                <option value="The Latymer School">The Latymer School</option>
                                <option value="Winchmore School">Winchmore School</option>
                                <option value="Turin Grove (Lower)">Turin Grove (Lower)</option>
                                <option value="Davenant Foundation">Davenant Foundation</option>
                                <option value="Roding Valley High">Roding Valley High</option>
                                <option value="Cardinal Pole Catholic  School">Cardinal Pole Catholic  School</option>
                                <option value="Clapton Girls Technology College">Clapton Girls Technology College</option>
                                <option value="Hackney Free &amp; Parochial Secondary School">Hackney Free &amp; Parochial Secondary School</option>
                                <option value="Haggerston School for Girls">Haggerston School for Girls</option>
                                <option value="Homerton College of Technology">Homerton College of Technology</option>
                                <option value="J M I And N Colvestone School">J M I And N Colvestone School</option>
                                <option value="Kingsland">Kingsland</option>
                                <option value="Mossbourne Community Academy">Mossbourne Community Academy</option>
                                <option value="Our Lady’s Convent High School">Our Lady’s Convent High School</option>
                                <option value="Stoke Newington School">Stoke Newington School</option>
                                <option value="The Bridge Academy">The Bridge Academy</option>
                                <option value="The City Academy, Hackney">The City Academy, Hackney</option>
                                <option value="The Home School Of Stoke Newington">The Home School Of Stoke Newington</option>
                                <option value="The Petchey Academy">The Petchey Academy</option>
                                <option value="Alexandra Park">Alexandra Park</option>
                                <option value="Fortismere (North Wing)">Fortismere (North Wing)</option>
                                <option value="Fortismere 6th Form">Fortismere 6th Form</option>
                                <option value="Gladesmore Community School">Gladesmore Community School</option>
                                <option value="Greig City Academy">Greig City Academy</option>
                                <option value="Highgate Wood School &amp; Performing Arts College">Highgate Wood School &amp; Performing Arts College</option>
                                <option value="Hornsey School for Girls">Hornsey School for Girls</option>
                                <option value="John Loughborough">John Loughborough</option>
                                <option value="Northumberland Park Community School">Northumberland Park Community School</option>
                                <option value="Park View Academy">Park View Academy</option>
                                <option value="Saint Thomas More Catholic School ">Saint Thomas More Catholic School</option>
                                <option value="Woodside High School">Woodside High School</option>
                                <option value="Onslow St Audrey's School">Onslow St Audrey's School</option>
                                <option value="Blessed John Roche">Blessed John Roche</option>
                                <option value="Central Foundation">Central Foundation</option>
                                <option value="City of London Academy">City of London Academy</option>
                                <option value="Elizabeth Garrett Anderson">Elizabeth Garrett Anderson</option>
                                <option value="Highbury Fields">Highbury Fields</option>
                                <option value="Highbury Grove">Highbury Grove</option>
                                <option value="Holloway">Holloway</option>
                                <option value="Islington Arts &amp; Media">Islington Arts &amp; Media</option>
                                <option value="Mount Carmel">Mount Carmel</option>
                                <option value="St Aloysius">St Aloysius</option>
                                <option value="St Mary Magdalene">St Mary Magdalene</option>
                                <option value="Brampton Manor ">Brampton Manor</option>
                                <option value="Cumberland">Cumberland</option>
                                <option value="East Lea Community">East Lea Community</option>
                                <option value="Forest Gate Community School">Forest Gate Community School</option>
                                <option value="Kingsford Community School">Kingsford Community School</option>
                                <option value="Langdon School">Langdon School</option>
                                <option value="Lister">Lister</option>
                                <option value="Little Ilford">Little Ilford</option>
                                <option value="Plashet School">Plashet School</option>
                                <option value="Rokeby School">Rokeby School</option>
                                <option value="Sarah Bonnell">Sarah Bonnell</option>
                                <option value="St Angela's R C School ">St Angela's R C School</option>
                                <option value="St Bonaventure's Catholic Comprehensive School">St Bonaventure's Catholic Comprehensive School</option>
                                <option value="Stratford School">Stratford School</option>
                                <option value="The Royal Docks Community">The Royal Docks Community</option>
                                <option value="Canon Palmer School ">Canon Palmer School</option>
                                <option value="Forest Boys School">Forest Boys School</option>
                                <option value="Forest Girls School">Forest Girls School</option>
                                <option value="Trinity Catholic High">Trinity Catholic High</option>
                                <option value="Woodbridge Hill School">Woodbridge Hill School</option>
                                <option value="Loxford School of Science and Technology">Loxford School of Science and Technology</option>
                                <option value="Bethnal Green Technology College">Bethnal Green Technology College</option>
                                <option value="Bishop Challoner Catholic Collegiate">Bishop Challoner Catholic Collegiate</option>
                                <option value="Bow School of Maths and Computing">Bow School of Maths and Computing</option>
                                <option value="Central Foundation Girls’ School Voluntary Aided">Central Foundation Girls’ School Voluntary Aided</option>
                                <option value="George Green's Secondary School">George Green's Secondary School</option>
                                <option value="H Mulberry School for Girls">H Mulberry School for Girls</option>
                                <option value="J Raines Upper School">J Raines Upper School</option>
                                <option value="Langdon Park School">Langdon Park School</option>
                                <option value="Morpeth School">Morpeth School</option>
                                <option value="Oaklands Secondary">Oaklands Secondary</option>
                                <option value="Post-15 Studies Centre">Post-15 Studies Centre</option>
                                <option value="Sir John Cass’s Foundation and Red Coat CE School">Sir John Cass’s Foundation and Red Coat CE School</option>
                                <option value="St. Paul’s Way School">St. Paul’s Way School</option>
                                <option value="Stepney Green Maths and Computing College">Stepney Green Maths and Computing College</option>
                                <option value="Swanlea School">Swanlea School</option>
                                <option value="Leytonstone Business &amp; Enterprise Specialist School">Leytonstone Business &amp; Enterprise Specialist School</option>
                                <option value="McEntee School">McEntee School</option>
                                <option value="Warwick School for Boys">Warwick School for Boys</option>
                                <option value="Aveling Park Secondary">Aveling Park Secondary</option>
                                <option value="Chingford School">Chingford School</option>
                                <option value="Chingford Secondary">Chingford Secondary</option>
                                <option value="Connaught School for Girls">Connaught School for Girls</option>
                                <option value="Frederick Bremer School">Frederick Bremer School</option>
                                <option value="George Mitchell Community School">George Mitchell Community School</option>
                                <option value="Heathcote School">Heathcote School</option>
                                <option value="Highams Park School">Highams Park School</option>
                                <option value="Kelmscott School">Kelmscott School</option>
                                <option value="Leyton 6th Form College">Leyton 6th Form College</option>
                                <option value="Leytonstone School">Leytonstone School</option>
                                <option value="Norlington School For Boys">Norlington School For Boys</option>
                                <option value="Rush Croft Sports College">Rush Croft Sports College</option>
                                <option value="Sir George Monoux Sixth Form College">Sir George Monoux Sixth Form College</option>
                                <option value="The Holy Family College">The Holy Family College</option>
                                <option value="The Lammas School">The Lammas School</option>
                                <option value="Buxton School">Buxton School</option>
                                <option value="Walthamstow Academy">Walthamstow Academy</option>
                                <option value="Walthamstow School for Girls">Walthamstow School for Girls</option>
                                <option value="Willowfield School">Willowfield School</option>
                                <option value="Other">Other</option>
                                </select>

								<hr />

                                <h3>Any other information?</h3>
                                
                                <textarea rows="5" cols="30" name="More_info" id="more_info" ></textarea>





</fieldset>

<br/>
          
                            
          
<input class="submit" type="submit" name="submit_second" id="submit_second" value="forward"  data-role="button" data-theme="b"/>
          
          
</div>
          
</div>


            <!-- #third_step -->
<div data-role="page" id="third_step">
                
    <div data-role="header">
                                <h1>form: page 3/4</h1>
                                
                                 <a  data-rel="back" class="ui-btn-left" data-icon="arrow-l" data-theme="a">Back</a>
              
               					<a href="index"  data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home"></a>
                                
                        </div><!-- /header -->
            
<div data-role="content">

               
<div  data-role="fieldcontain">

<fieldset data-role="controlgroup">

                                    <input type="checkbox" name="Guidance" id="checkbox-1" class="custom" />
                                    <label for="checkbox-1">I am interested in careers guidance</label>
                    
                    
                                    <input type="checkbox" name="Apprenticeship" id="checkbox-3" class="custom" />
                                    <label for="checkbox-3">I'd like to find out about an apprenticeship</label>

</fieldset>

</div>
              
<input class="submit" type="submit" name="submit_third" id="submit_third" value="forward" data-role="button" data-theme="b" />


                
</div>     


            
</div>
            
            
            <!-- #fourth_step -->
<div data-role="page" id="fourth_step">
             
                 <div data-role="header">
                                <h1>form: page 4/4</h1>
                                
                                 <a  class="ui-btn-left" data-rel="back" data-icon="arrow-l" data-theme="a">Back</a>
              
               					<a href="index"  data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home"></a>
                                
                        </div><!-- /header -->
            
<div data-role="content">

<p>Where did you hear about us? </p>

             
                    <fieldset data-role="controlgroup">

                                <input type="checkbox" name="W_School" id="checkbox-1" class="custom" />
                                <label for="checkbox-1">School</label>
                                
                                <input type="checkbox" name="College_Website" id="checkbox-2" class="custom" />
                                <label for="checkbox-2">College Website</label>
                                
                                <input type="checkbox" name="Other_Website" id="checkbox-3" class="custom" />
                                <label for="checkbox-3">Other Website</label>
                                
                                <input type="checkbox" name="Student_at_WFC" id="checkbox-4" class="custom" />
                                <label for="checkbox-4">Previous / Current Student at WFC</label>
                                
                                <input type="checkbox" name="Careers_Event" id="checkbox-5" class="custom" />
                                <label for="checkbox-5">Careers Event</label>
             
                                <input type="checkbox" name="Newspaper" id="checkbox-6" class="custom" />
                                <label for="checkbox-6">Newspaper</label>
                                
                                <input type="checkbox" name="College" id="checkbox-7" class="custom" />
                                <label for="checkbox-7">College</label>
                                
                                <input type="checkbox" name="Leaflet" id="checkbox-8" class="custom" />
                                <label for="checkbox-8">Leaflet</label>
                                
                                <input type="checkbox" name="Open_Day" id="checkbox-9" class="custom" />
                                <label for="checkbox-9">Open Day</label>
                                
                                <input type="checkbox" name="Course_search" id="checkbox-10" class="custom" />
                                <label for="checkbox-10">Course search e.g. Choices, HotCourses</label>
                                
                                <input type="checkbox" name="Friend_Relative" id="checkbox-11" class="custom" />
                                <label for="checkbox-11">Friend/ Relative</label>
                                
                                <input type="checkbox" name="Posters" id="checkbox-12" class="custom" />
                                <label for="checkbox-12">Posters at Walthamstow Central Station</label>

</fieldset>

                            <hr />
                            
                            
                            <p> If you are a person with a disability, specific learning difficulty or specific health problem, please ensure that we know what you need so that we can make all reasonable adjustments to help you succeed.</p>
                            
                            <p> Do you consider yourself to have a disability, specific learning difficulty or specific health problem?</p>
                            
                            <p> (e.g. mobility problems, mental health difficulties, dyslexia)  </p>   

<fieldset data-role="controlgroup">

		
                            <input type="radio" name="Disability" id="radio-choice-1" value="yes" checked="checked" />
                            <label for="radio-choice-1">Yes</label>
                    
                            <input type="radio" name="Disability" id="radio-choice-2" value="no"  />
                            <label for="radio-choice-2">No</label>

     	
</fieldset>




                        <hr />
                        
                        <h2>Health Issues</h2>


<div  data-role="fieldcontain">


<fieldset data-role="controlgroup">

                    <input type="checkbox" name="No_Disabilities" id="checkbox-1" class="custom" />
                    <label for="checkbox-1">No Disabilities</label>
                    
                    <input type="checkbox" name="Blindness" id="checkbox-2" class="custom" />
                    <label for="checkbox-2">Blindness</label>
                    
                    <input type="checkbox" name="Visual_Impairment" id="checkbox-3" class="custom" />
                    <label for="checkbox-3">Visual Impairment</label>
                    
                    <input type="checkbox" name="Deafness" id="checkbox-4" class="custom" />
                    <label for="checkbox-4">Deafness</label>
                    
                    <input type="checkbox" name="Hearing_impairment" id="checkbox-5" class="custom" />
                    <label for="checkbox-5">Hearing impairment </label>
                    
                    <input type="checkbox" name="Speech" id="checkbox-6" class="custom" />
                    <label for="checkbox-6">Speech, language and communication disorders </label>
                    
                    <input type="checkbox" name="Disability_affecting_mobility" id="checkbox-7" class="custom" />
                    <label for="checkbox-7">Disability affecting mobility  </label>
                    
                    <input type="checkbox" name="Other_physical_disability" id="checkbox-8" class="custom" />
                    <label for="checkbox-8">Other physical disability  </label>
                    
                    <input type="checkbox" name="Complex_physical_disability" id="checkbox-9" class="custom" />
                    <label for="checkbox-9">Complex physical disability </label>
                    
                    <input type="checkbox" name="Mental_ill_health" id="checkbox-10" class="custom" />
                    <label for="checkbox-10"> Mental ill health Emotional/ behavioural difficulties </label>
                    
                    <input type="checkbox" name="Temporary_disability" id="checkbox-11" class="custom" />
                    <label for="checkbox-11"> Temporary disability after illness e.g post viral, accident </label>
                    
                    <input type="checkbox" name="Aspergers" id="checkbox-12" class="custom" />
                    <label for="checkbox-12">  Aspergers syndrome/ high performer ASC </label>
                    
                    <input type="checkbox" name="Profound" id="checkbox-13" class="custom" />
                    <label for="checkbox-13">       Profound complex disability </label>
                    
               
                    
                    <input type="checkbox" name="Other_medical_condition" id="checkbox-14" class="custom" />
                    <label for="checkbox-14"> Other medical condition e.g epilepsy, asthma, diabetes </label>

</fieldset>

</div>

                    <p>Other (Please specify)</p>
                    
                        <input type="text" id="Other_disability" name="Other_disability" tabindex="9"  />
                    
                    
                    <hr/>
                    
                    <h2>Learning Difficulties</h2>

<div  data-role="fieldcontain">

<fieldset data-role="controlgroup">

                    <input type="checkbox" name="Moderate-learning-difficulty" id="checkbox-1" class="custom" />
                    <label for="checkbox-1">Moderate learning difficulty</label>
                    
                    <input type="checkbox" name="Severe-learning-difficulty" id="checkbox-2" class="custom" />
                    <label for="checkbox-2">Severe learning difficulty</label>
                    
                    <input type="checkbox" name="Profound-complex" id="checkbox-3" class="custom" />
                    <label for="checkbox-3">Profound and complex learning difficulty</label>
                    
                    <input type="checkbox" name="Autistic" id="checkbox-4" class="custom" />
                    <label for="checkbox-4">  Autistic spectrum condition and learning difficulty</label>
                    
                    <input type="checkbox" name="Dyslexia" id="checkbox-5" class="custom" />
                    <label for="checkbox-5">  Dyslexia Dyscalculia Multiple learning difficulties</label>
                    
                    <input type="checkbox" name="Other-learning" id="checkbox-6" class="custom" />
                    <label for="checkbox-6">   Other (Please specify) </label>
             

</fieldset>

</div>

				<p>Other (Please specify)</p>

<input type="text" id="Other_learning_issues" name="Other learning issues" tabindex="9"  />


                <hr/>
                
                <p>Please give any dates when you will not be available for interview</p>
<input type="text" id="Available_for_interview" name="Available for interview" tabindex="9"  />
                   
                <hr />
                    
               
              
              <!--  <input class="submit" type="submit" name="submit_fourth" id="submit_fourth" value="Forward" data-role="button" data-theme="a" />   -->
                
                
<input class="send submit" type="submit" name="submit_fifth" id="submit_fifth" value="Submit" onClick="_gaq.push(['_trackEvent', 'apply-submit', 'Application Request', 'Application Request',, false]);" data-role="button" data-theme="b" />
                        
                        	<div class="success">
                            
                          	<p>thank you, your information has been submitted. </p>
                            
                            <a  data-theme="b" href="?catagory=home" data-role="button" data-transition="slide">Home</a>
                            
                            </div>
                
               
</div>
            
</div>
            
    
  
               
          
                
</form>

 <script type="text/javascript" >
 
 
 
 
  (function($){
          $countForms = 1;
          $.fn.addForms = function(){
                        var myform = 
                      
                         '<div> ' +
						
						
					//	 'Field A ('+$countForms+'):'+
                   //      ' <input type="text" name="fielda'+$countForms+'">'+

						 
						'    <p>Level</p>   '+
                                
                         '       <select name="Added_Qualification_level_'+$countForms+'" id="add_test_'+$countForms+'" class="level">   '+
                         '       <option value="">Please select</option>  '+
                         '       <option value="GCSE">GCSE</option>  '+
                         '       <option value="GNVQ">GNVQ</option>  '+
                         '       <option value="A Level">A Level</option>  '+
                         '       <option value="Foundation Degree">Foundation Degree</option>  '+
                          '      <option value="BTEC">BTEC</option>  '+
                          '      <option value="NVQ">NVQ</option>  '+
                          '      <option value="OCN">OCN</option>  '+
                          '      <option value="NCFE">NCFE</option>  '+
                          '      <option value="City &amp; Guilds">City &amp; Guilds</option>  '+
                          '      <option value="Other">Other</option>  '+
                          '      </select>  '+
                                
                            '    <p>qualification</p>  '+
                                
                           '     <input type="text" name="More_qualification_'+$countForms+'" autocomplete="off" id="Previous_qualification_'+$countForms+'" class="qualification"   />  '+
                                
                                
                          '      <p>Grade</p>  '+
                                
                         '       <input type="text" name="More_grade_'+$countForms+'" id="More_grade_'+$countForms+'" class="grade"  />  '+
                                
                         '       <p>predicted</p>  '+
                         '       <select name="More_predicted_'+$countForms+'" id="More_predicted_'+$countForms+'" class="predicted"  >  '+
                       '         <option value="">Please select</option>  '+
                          '      <option value="Predicted">Predicted</option>  '+
                      '      <option value="Actual">Actual</option>  '+
                      '          </select>  ' +
					  
		 '<br/>' +
			
		'		 <button data-role="button" data-inline="true" data-theme="b">remove</button>' +			  
					  		 '<br/>' +
							 
							  '<hr> ' +
						
						 '</div> ' 		 ;
						 
						 
		

                         myform = $("<div>"+myform+"</div>");
                   $("button", $(myform)).click(function(){ $(this).parent().parent().remove(); });
						 
						//myform.page();
						//myform('refresh');

                         $(this).append(myform).trigger("create");
                         $countForms++;
          };
    })(jQuery);         

    $(function(){
        $("#mybutton").bind("click", function(){
                $("#container").addForms();
        });
    });









$(function(){

    //first_step
 $('#myform').submit(function(){ return false; });
 
 
	
 $('#submit_first').click(function(){

		
		var error = 0;
		
					$("form").validate().element("#name");
					
					$("form").validate().element("#email");
							   
					if (!$(".required").valid() )   {  
						
						error++; 
					
						
					}
		 

        
        
        if(!error) {
          
             
				$.mobile.changePage( "#app_second_step", { transition: "slide"} );
                        
        } else {
			
			//$('.required')[0].scrollIntoView(true);
			
		  $('html,body').required({scrollTop: targetOffset} );
			
			return false;
			
		}
    });


    $('#submit_second').click(function(){
									   
									   
									   
 
     
						$.mobile.changePage( "#third_step", { transition: "slide"} );
   

    });


    $('#submit_third').click(function(){
        //update progress bar
       

        //prepare the fourth step
        var fields = new Array(
            $('#name').val(),
            $('#second_name').val(),
            $('#email').val(),
            $('#firstname').val() + ' ' + $('#lastname').val(),
            $('#age').val(),
            $('#gender').val(),
            $('#country').val()                       
        );
        var tr = $('#fourth_step tr');
        tr.each(function(){
            //alert( fields[$(this).index()] )
            $(this).children('td:nth-child(2)').html(fields[$(this).index()]);
        });
                
        //slide steps
 
		
		$.mobile.changePage( "#fourth_step", { transition: "slide"} );
		
		
    });
	
	
	  $('#submit_fourth').click(function(){
									   
									   
			//	$.mobile.changePage( "#fifth_step", { transition: "slide"} );					   
      
   

    });
	


    $('#submit_fifth').click(function(){
									   

 
 
 
var str = $("form").serialize();		   
		
			   $.ajax({
	type: "POST",
	 url: "<?PHP echo base_url(); ?>ajax/apply",
//url: "formprocess.php",
	
//  data: dataString,
data: str,
    success: function(){
//	$('.success').fadeIn(200).show();

	 alert('Your appllication has been sent, thank you');
	
	window.location.replace("<?PHP echo base_url(); ?>");
	
	

 
	
   }
   
   
   
   
});
	

    return false; // avoid to execute the actual submit of the form.
		
		
    });

});


 
 
 
 
 
 
 
 
 
 </script>