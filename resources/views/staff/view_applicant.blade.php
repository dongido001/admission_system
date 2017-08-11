@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                
                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> Name </b>
                      </div>
                      <div class="col-md-6">
                         {{ $applicant->name }}
                      </div>
                    </div> <br>

                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> Jamb Reg. </b>
                      </div>
                      <div class="col-md-6">
                         {{ $applicant->jamb_reg }}
                      </div>
                    </div> <br>
                    
                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> Jamb Score </b>
                      </div>
                      <div class="col-md-6">
                         {{ $applicant->jamb_score }}
                      </div>
                    </div> <br> 
                                       
                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> Course </b>
                      </div>
                      <div class="col-md-6">
                         {{ $applicant->course }}
                      </div>
                    </div> <br> 
                                                          
                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> State </b>
                      </div>
                      <div class="col-md-6">
                         {{ $applicant->state }}
                      </div>
                    </div> <br> 
                                                                             
                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> Gender </b>
                      </div>
                      <div class="col-md-6">
                         {{ $applicant->gender }}
                      </div>
                    </div> <br> 

                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> Mobile </b>
                      </div>
                      <div class="col-md-6">
                         {{ $applicant->mobile }}
                      </div>
                    </div> <br>  

                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> Email </b>
                      </div>
                      <div class="col-md-6">
                         {{ $applicant->email }}
                      </div>
                    </div> <br>    
                    <hr>

                    <div class="row">

                     <div class="col-md-6">

                       <div class="row">
                        <div class="col-md-6 text-right" >
                          <b> {{ $applicant->subject1 }} </b>
                        </div>
                        <div class="col-md-6">
                           {{ $applicant->grade1 }}
                        </div>
                       </div> <br> 

                       <div class="row">
                        <div class="col-md-6 text-right" >
                          <b> {{ $applicant->subject2 }} </b>
                        </div>
                        <div class="col-md-6">
                           {{ $applicant->grade2 }}
                        </div>
                       </div> <br> 
                       
                       <div class="row">
                        <div class="col-md-6 text-right" >
                          <b> {{ $applicant->subject3 }} </b>
                        </div>
                        <div class="col-md-6">
                           {{ $applicant->grade3 }}
                        </div>
                       </div> <br> 


                       <div class="row">
                        <div class="col-md-6 text-right" >
                          <b> {{ $applicant->subject4 }} </b>
                        </div>
                        <div class="col-md-6">
                           {{ $applicant->grade4 }}
                        </div>
                       </div> <br> 

                   </div> <!-- end col-md-6 -->

                     <div class="col-md-6"> <!-- col-md-start-->

                       <div class="row">
                        <div class="col-md-6 text-right" >
                          <b> {{ $applicant->subject5 }} </b>
                        </div>
                        <div class="col-md-6">
                           {{ $applicant->grade5 }}
                        </div>
                       </div> <br> 

                       <div class="row">
                        <div class="col-md-6 text-right" >
                          <b> {{ $applicant->subject6 }} </b>
                        </div>
                        <div class="col-md-6">
                           {{ $applicant->grade6 }}
                        </div>
                       </div> <br> 

                       <div class="row">
                        <div class="col-md-6 text-right" >
                          <b> {{ $applicant->subject7 }} </b>
                        </div>
                        <div class="col-md-6">
                           {{ $applicant->grade7 }}
                        </div>
                       </div> <br> 


                   </div> <!-- end col-md-6 -->
                                                                             

                  </div> <br> 


                   <form method="POST" action="/staff/offer_admission">
                      
                      {{ csrf_field() }}

                      <input type="hidden" value="{{ $applicant->user_id }}" name="student_id">
                      <input type="hidden" value="{{ $applicant->course }}" name="dept_id">
                      <button role="submit" class="btn btn-primary"> Give Admission </button>
                   </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
