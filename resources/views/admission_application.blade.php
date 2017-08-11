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
							    <select class="form-control" id="exampleSelect1" name="state">
							      <option>Electrical/Electronics Engr</option>
							      <option>Comp. sci</option>
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
							      <option>Electrical/Electronics Engr</option>
							      <option>Comp. sci</option>
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
