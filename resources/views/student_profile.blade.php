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
                         {{ $profile->name }}
                      </div>
                    </div> <br>                
                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> Jamb Reg. Number </b>
                      </div>
                      <div class="col-md-6">
                         {{ $profile->jamb_reg }}
                      </div>
                    </div> <br>   
                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> mobile </b>
                      </div>
                      <div class="col-md-6">
                         {{ $profile->mobile }}
                      </div> 
                    </div> <br> 
                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> email </b>
                      </div>
                      <div class="col-md-6">
                         {{ $profile->email }}
                      </div> 
                    </div> <br>                
                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> Jamb Score </b>
                      </div>
                      <div class="col-md-6">
                         {{ $profile->jamb_score }}
                      </div>
                    </div> <br>                
                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> Course </b>
                      </div>
                      <div class="col-md-6">
                         {{ $profile->course }}
                      </div>
                    </div> <br>                
                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> State </b>
                      </div>
                      <div class="col-md-6">
                         {{ $profile->state }}
                      </div>
                    </div> <br>                

                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> Local Government </b>
                      </div>
                      <div class="col-md-6">
                         {{ $profile->local_government }}
                      </div>
                    </div> <br>

                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> Nationality </b>
                      </div>
                      <div class="col-md-6">
                         {{ $profile->nationality }}
                      </div>
                    </div> <br>

                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> Country of Residence </b>
                      </div>
                      <div class="col-md-6">
                         {{ $profile->country_of_residence }}
                      </div>
                    </div> <br>

                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> Date of Birth </b>
                      </div>
                      <div class="col-md-6">
                         {{ $profile->dob }}
                      </div>
                    </div> <br>

                    <div class="row">
                      <div class="col-md-6 text-right" >
                        <b> Gender </b>
                      </div>
                      <div class="col-md-6">
                         {{ $profile->gender }}
                      </div>
                    </div> <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
