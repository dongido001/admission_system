@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
              
              @if ( !$application )

                <div class="panel-body text-center">
                    <h3> You are yet to Apply for Admission </h3>
                    <div class="row">
                        <a href="/admission_application" ><button class="btn btn-primary" role="link">  Complete Application Here </button> </a>
                    </div>
                </div>

              @elseif ( $is_admitted AND !$clearance )

                <div class="panel-body text-center">

                    <h3> Congratulation!, You have been Admitted, please complete your clearance  </h3>
                    <div class="row">
                        <a href="/clearance_application" > <button class="btn btn-primary" role="link">  Complete Clearance </button> </a>
                    </div>
                </div> 

              @elseif ( $is_admitted AND $clearance )
                 
                <div class="panel-body text-center">

                    <h3> Print Admission letter </h3>
                </div> 

              @else
                 
                <div class="panel-body text-center">

                    <h3> Admission is ongoing, please check back later to see of you are admitted. </h3>
                </div> 

              @endif

            </div>
        </div>
    </div>
</div>
@endsection
