<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use Illuminate\Support\Facades\Validator;

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
                'cert' => $request->cert
             ];

      $applicaion = Application::create($info);


     return redirect('clearance_application');

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
    public function destroy($id)
    {
        //
    }
}
