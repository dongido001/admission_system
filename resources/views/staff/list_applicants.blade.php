@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body text-center">

                    <table class="table">
                      <thead>
                        <tr>
                          <td> <b> # </b> </td>
                          <td> <b> Name </b> </td>
                          <td> <b> Jamb Reg </b> </td>
                          <td> <b> Jamb Score </b> </td>
                          <td> <b> Action </b> </td>
                          <td> <b> Status </b> </td>
                        </tr>
                      </thead>
                      <tbody>

                      @foreach ( $applicants as $applicant )
                        <tr>
                          <th scope="row">1</th>
                          <td> {{ $applicant->name }}</td>
                          <td> {{ $applicant->jamb_reg }}</td>
                          <td> {{ $applicant->jamb_score }}</td>
                          <td>  <a href="/staff/view_applicant/{{ $applicant->id }}"> View </a> </td>
                          <td> 
                             
                             @if( !$applicant->admitted )
                                
                                Not admitted
                             @else
                                
                                Admitted
                             @endif
                          </td>
                        </tr>
                       @endforeach

                      </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
