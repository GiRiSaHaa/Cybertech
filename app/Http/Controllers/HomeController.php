<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $applicants=\App\Applicant::all();
        // $applicantStatus=\App\ApplicantStatus::all();
        $applicants = DB::table('applicants')
            ->join('applicant_statuses', 'applicants.id', '=', 'applicant_statuses.applicantID')
            ->select('applicants.*', 'applicant_statuses.status')
            ->get();
            
            
        return view('Admin.home',compact('applicants'));
    }
}
