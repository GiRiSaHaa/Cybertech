<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $applicants=\App\Applicant::all();
        $applicantStatus=\App\ApplicantStatus::all();
        return view('Admin.home',compact('applicants','applicantStatus'));
    }
}
