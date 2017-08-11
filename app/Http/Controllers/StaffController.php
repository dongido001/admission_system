<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Admission;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_applicants()
    {
        //
        
        $data['applicants'] = Application::all();

        return view('staff.list_applicants', $data);

    }

    
    public function view_applicant(Request $request, $id)
    {
        //
        
        $data['applicant'] = Application::where('id', $id)->first();

        return view('staff.view_applicant', $data);

    }    

    public function offer_adamission(Request $request)
    {
        //
        // dd($request->dept_id);
        $offer = Admission::updateOrCreate([

                "user_id"       =>  $request->student_id,
                "department_id" =>  $request->dept_id,
                "department_id" =>  1,
            ]);


        Application::where('user_id', Auth::id())->update( ['admitted' => 1] );

        return redirect('staff/list_applicants');

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
