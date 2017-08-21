<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admission_application');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validator = Validator::make($request->all(), [
            'name' => 'required', 
            'jamb_reg' =>'required', 
            'jamb_score' =>'required', 
            'course' => 'required', 
            'state' => 'required',
            'local_government' => 'required', 
            'nationality' => 'required', 
            'country_of_residence' => 'required', 
            'dob' => 'required', 
            'gender' => 'required', 
            'mobile' => 'required', 
            'email' => 'required', 
            // 'cert' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('admission_application')
                        ->withErrors($validator)
                        ->withInput();
        }


      $info = [ 
                'user_id' => Auth::id(),
                'name' => $request->name,
                'jamb_reg' => $request->jamb_reg,
                'jamb_score' => $request->jamb_score,
                'course' => $request->course,
                'state' => $request->state,
                'local_government' => $request->local_government,
                'nationality' => $request->nationality,
                'country_of_residence' => $request->country_of_residence,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'cert' => '',
                'subject1' => $request->subject1,
                'grade1' => $request->grade1,                
                'subject2' => $request->subject2,
                'grade2' => $request->grade2,                
                'subject3' => $request->subject3,
                'grade3' => $request->grade3,                
                'subject4' => $request->subject4,
                'grade4' => $request->grade4,                
                'subject5' => $request->subject5,
                'grade5' => $request->grade5,                
                'subject6' => $request->subject6,
                'grade6' => $request->grade6,                
                'subject7' => $request->subject7,
                'grade7' => $request->grade7,       
             ];

      $applicaion = Application::create($info);


     return view('application_success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get_lga($state)
    {
        //
        dd($state);
    }
}
