<?php

namespace App\Http\Controllers;

use App\Mail\Admissionnotifier;
use Illuminate\Http\Request;
use App\Application;
use App\Helpers\AdmissionHelper;
use App\Admission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

        $data['applicant_waec'] = AdmissionHelper::checkResult( Application::where('id', $id)->first()->toArray() );

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
                "quota"         =>  0,
            ]);


        Application::where('user_id', $request->student_id)->update( ['admitted' => 1] );
        
        //You can notify applicant with SMS
         $msg = "Congratulation!, you have been offerd admission. \n, please login to your profile and login.";
        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);

        // send email
        mail($request->email,"Admission System",$msg);

        // dd(Mail::to('dongidomed@gmail.com')
        //                  ->send(new Admissionnotifier()));

        return redirect('staff/list_applicants');

    }

    public function deny_adamission(Request $request)
    {
        //

        Application::where('user_id', $request->student_id)->update( ['admitted' => 0] );
        
        //You can notify applicant with sms

        //You can notify applicant with SMS
        $msg = "Sorry!, you have not been given admission at this point. Please re-try next season.";
        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);

        // send email
        mail($request->email,"Admission System",$msg);


        return redirect('staff/list_applicants');

    }

    public function staff_login(Request $request)
    {
        //
        //default pass

        $access = [
            
            'admin@unn.edu.ng' => 'admin',

            'cjdesny@gmail.com' => '123450000',

            'afuluenupopsy@gmail.com' => '123450000'
        ];

        if( !in_array($request->email, array_keys($access)) ){

                return redirect('staff/show_login')->with('status', 'Login failed');
    
        }


        if( @$access[$request->email] != $request->password ){

            return redirect('staff/show_login')->with('status', 'Login failed');
        }

        //You can notify applicant with sms

        //set session
        session(['staff' => 'staff']);

        return redirect('staff/list_applicants');

    }


    public function show_staff_login(Request $request)
    {
        //

        return view('staff.login');

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
