@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"> Clearance Form [ Please upload all relevant document ]</div>

                <div class="panel-body">

					<form method="POST" action="/clearance_application">
					 <input type="hidden" name="_token" value="{{ csrf_token() }}">
					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif


                      <div class="row">
                         <div class="col-md-6">
							  <div class="form-group">
							    <label for="exampleInputFile">UTME result slip</label>
							    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
							  </div>
                         </div>
                         <div class="col-md-6">
							  <div class="form-group">
							    <label for="exampleInputFile">UNN screening acknowledgement slip</label>
							    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
							  </div>
                         </div>
                      </div> 

                                           
                      <div class="row">
                         <div class="col-md-6">
							  <div class="form-group">
							    <label for="exampleInputFile">Birth certificate</label>
							    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
							  </div>
                         </div>
                         <div class="col-md-6">
							  <div class="form-group">
							    <label for="exampleInputFile">Advert/shopping application slip</label>
							    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
							  </div>
                         </div>
                      </div>

                      <div class="row">
                         <div class="col-md-6">
							  <div class="form-group">
							    <label for="exampleInputFile">Students’ personal information printed from the school website</label>
							    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
							  </div>
                         </div>
                         <div class="col-md-6">
							  <div class="form-group">
							    <label for="exampleInputFile">All fees receipt</label>
							    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
							  </div>
                         </div>
                      </div>

                      <div class="row">
                         <div class="col-md-6">
							  <div class="form-group">
							    <label for="exampleInputFile">Letter of attestation from applicant sponsor</label>
							    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
							  </div>
                         </div>
                         <div class="col-md-6">
							  <div class="form-group">
							    <label for="exampleInputFile">Local government identification certificate</label>
							    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
							  </div>
                         </div>
                      </div>

                      <div class="row">
                         <div class="col-md-6">
							  <div class="form-group">
							    <label for="exampleInputFile">UNN admission list where applicant name is visible</label>
							    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
							  </div>
                         </div>
                         <div class="col-md-6">
							  <div class="form-group">
							    <label for="exampleInputFile">Credentials required for admission into the admitted course- A’ Level and O’
Level</label>
							    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
							  </div>
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
