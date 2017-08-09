<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Clearance;

class ClearanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('clearance_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('admission_application'); 
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
        //

        $validator = Validator::make($request->all(), [
            'utme_slip' => 'required',
            'unn_screening_acknowledge' => 'required',
            'birth_certificate' => 'required',
            'advert' => 'required',
            'student_personal_information' => 'required',
            'fees_receipt' => 'required',
            'letter_of_attestation' => 'required',
            'local_government_identification_cert' => 'required',
            'o_level_cert' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('clearance_application')
                        ->withErrors($validator)
                        ->withInput();
        }


      $info = [ 
                'utme_slip' => $request->utme_slip,
                'unn_screening_acknowledge' => $request->unn_screening_acknowledge,
                'birth_certificate' => $request->birth_certificate,
                'advert' => $request->advert,
                'student_personal_information' => $request->student_personal_information,
                'fees_receipt' => $request->fees_receipt,
                'letter_of_attestation' => $request->letter_of_attestation,
                'local_government_identification_cert' => $request->local_government_identification_cert,
                'o_level_cert' => $request->o_level_cert,
             ];

      $applicaion = Clearance::create($info);


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
