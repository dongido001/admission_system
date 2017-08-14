@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Apply for admission </div>

                <div class="panel-body">

					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif

					<form action="/admission_application" method="POST">

					 <input type="hidden" name="_token" value="{{ csrf_token() }}">

					  <div class="row">  <!-- Row start -->
                         <div class="col-md-4">
							  <div class="form-group">
							    <label for="name">Name</label>
							    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
							  </div>
                         </div>
                         <div class="col-md-4">
							  <div class="form-group">
							    <label for="jamb_reg">Jamb Reg Number</label>
							    <input type="text" class="form-control" id="jamb_reg" name="jamb_reg" placeholder="Jamb Reg Number">
							  </div>
                         </div>
                     
                        <div class="col-md-4">
						  <div class="form-group">
						    <label for="jamb_score">Jamb Score</label>
						    <input type="text" class="form-control" id="jamb_score" placeholder="Jamb Score" name="jamb_score">
						  </div>
                        </div>

                       </div> <!-- Row end -->

                       <div class="row"> <!-- start Row -->

                         <div class="col-md-4">
							  <div class="form-group">
							    <label for="faculty">Desired course of study</label>
							    <select class="form-control" id="exampleSelect1" name="course">
							      <option>Electrical/Electronics Engr</option>
							      <option>Comp. sci</option>
							    </select>
							  </div>
                         </div>

                         <div class="col-md-4">
							  <div class="form-group">
							    <label for="faculty">State of Origin</label>
							    <select class="form-control" id="exampleSelect1" name="state" required>

              <option value="" selected="selected" disabled>- Select -</option>
              <option value="Abuja FCT">Abuja FCT</option>
              <option value="Abia">Abia</option>
              <option value="Adamawa">Adamawa</option>
              <option value="Akwa Ibom">Akwa Ibom</option>
              <option value="Anambra">Anambra</option>
              <option value="Bauchi">Bauchi</option>
              <option value="Bayelsa">Bayelsa</option>
              <option value="Benue">Benue</option>
              <option value="Borno">Borno</option>
              <option value="Cross River">Cross River</option>
              <option value="Delta">Delta</option>
              <option value="Ebonyi">Ebonyi</option>
              <option value="Edo">Edo</option>
              <option value="Ekiti">Ekiti</option>
              <option value="Enugu">Enugu</option>
              <option value="Gombe">Gombe</option>
              <option value="Imo">Imo</option>
              <option value="Jigawa">Jigawa</option>
              <option value="Kaduna">Kaduna</option>
              <option value="Kano">Kano</option>
              <option value="Katsina">Katsina</option>
              <option value="Kebbi">Kebbi</option>
              <option value="Kogi">Kogi</option>
              <option value="Kwara">Kwara</option>
              <option value="Lagos">Lagos</option>
              <option value="Nassarawa">Nassarawa</option>
              <option value="Niger">Niger</option>
              <option value="Ogun">Ogun</option>
              <option value="Ondo">Ondo</option>
              <option value="Osun">Osun</option>
              <option value="Oyo">Oyo</option>
              <option value="Plateau">Plateau</option>
              <option value="Rivers">Rivers</option>
              <option value="Sokoto">Sokoto</option>
              <option value="Taraba">Taraba</option>
              <option value="Yobe">Yobe</option>
              <option value="Zamfara">Zamfara</option>
     <option value="Outside Nigeria">Outside Nigeria</option>
	 
							    </select>
							  </div>
                         </div>

                         <div class="col-md-4">
							  <div class="form-group">
							    <label for="faculty">Local Govenrment</label>
							    <select class="form-control" id="exampleSelect1" name="local_government">
							      <option>Electrical/Electronics Engr</option>
							      <option>Comp. sci</option>
							    </select>
							  </div>
                         </div>
                       </div> <!--End row -->

                       <div class="row"> <!-- start Row -->

                         <div class="col-md-3">
							  <div class="form-group">
							    <label for="faculty">Nationality</label>
							    <select class="form-control" id="exampleSelect1" name="nationality">

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
	<option value="NG" selected>Nigeria</option>
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
                         </div>

                         <div class="col-md-3">
							  <div class="form-group">
							    <label for="faculty">Country of residence</label>
							    <select class="form-control" id="exampleSelect1" name="country_of_residence">
							      <option>Electrical/Electronics Engr</option>
							      <option>Comp. sci</option>
							    </select>
							  </div>
                         </div>

                         <div class="col-md-3">
							  <div class="form-group">
							    <label for="dob">Date of Birth</label>
							    <input type="date" class="form-control" id="dob" placeholder="Date of Birth" name="dob">
							  </div>
                         </div>

                         <div class="col-md-3">
							  <div class="form-group">
							    <label for="faculty">Gender</label>
							    <select class="form-control" id="gender" name="gender">
							      <option>Male</option>
							      <option>Female</option>
							    </select>
							  </div>
                         </div>
                       </div> <!--End row -->

                       <div class="row"> <!-- start Row -->

                         <div class="col-md-4">
							  <div class="form-group">
							    <label for="mobile">Mobile Number</label>
							    <input type="text" class="form-control" id="mobile" aria-describedby="mobile" placeholder="Mobile Number" name="mobile">
							  </div>
						 </div>

                         <div class="col-md-4">
							  <div class="form-group">
							    <label for="exampleInputEmail1">Email address</label>
							    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
							    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							  </div>
						 </div>
						  <div class="col-md-4">
							  <div class="form-group">
							    <label for="exampleInputFile">Certificate</label>
							    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="cert">
							    <small id="cert" class="form-text text-muted">Certificate from past school/A’ level/ND/NCE/JUPEB (File to be uploaded for direct entry applicant)</small>
							  </div>
						  </div>
                       </div> <!--End row -->

                        <div class="row">
                            
                            <div class="col-md-6">
                             @for( $i = 1; $i < 8; $i++ )
                               <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
							          <label for="faculty">Subject</label>
			                       		<select name="subject{{$i}}" class="form-control" required>
									          <option value="" selected="selected" disabled>--Select--</option>
									          <option value="Chemistry">Chemistry</option>
									          <option value="Biology">Biology</option>
									          <option value="Computer">Computer Studies</option>
									          <option value="Economics">Economics</option>
									          <option value="English Language">English Language</option>
									          <option value="Food and Nutrition">Food and Nutrition</option>
									          <option value="Further Mathematics">Further Mathematics</option>
									          <option value="Geography">Geography</option>
									          <option value="Government">Government</option>
									          <option value="Literature In English">Literature In English</option>
									          <option value="Accounting">Accounting</option>
									          <option value="Mathematics">Mathematics</option>
									          <option value="Physics">Physics</option>
									          <option value="Yoruba">Yoruba</option>
									          <option value="Hausa">Hausa</option>
									          <option value="Igbo">Igbo</option>
									          <option value="IRK">IRK</option>
									          <option value="CRK">CRK</option>
								        </select>
								      </div>
                                  </div>                                  

                               <div class="col-md-6">
                                    <div class="form-group">
							          <label for="faculty">Grade</label>
								          <select name="grade{{$i}}" class="form-control" required>
								            <option selected disabled>Select </option>
								            <option value="A1">A1</option>
								            <option value="B2">B2</option>
								            <option value="B3">B3</option>
								            <option value="C4">C4</option>
								            <option value="C5">C5</option>
								            <option value="C6">C6</option>
								            <option value="D7">D7</option>
								            <option value="E8">E8</option>
								            <option value="F9">F9</option>
								            <option value="A/R">A/R</option>
							              </select>
								      </div>
                                  </div>  

                               </div>
                            @endfor

					        </div>


                        </div>

					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
