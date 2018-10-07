<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


use Carbon\Carbon;
use DB;


class ApplicantController extends Controller
{
    public function saveApplicant(Request $request)
    {
    	// dd($request);
    	// $validatedData = $request->validate([
	    //     'name' => 'required|unique:posts|max:255',
	    //     'address' => 'required',
	    // ]);

    	if($request->hasfile('fileToUpload'))
         {
            $file = $request->file('fileToUpload');
            $name=$request->get('name')."-".$request->get('positionApply')."-".date("dmY").".".$file->getClientOriginalExtension();
            $path = $request->file('fileToUpload')->storeAs('applicantCV',$name);
            
            // echo $path;
            // dd($request);
         }
         
        $applicant= new \App\Applicant;
        $applicant->fullName=$request->get('name');
        $applicant->address=$request->get('address');
        $applicant->email=$request->get('email');
        $applicant->mobile=$request->get('mobileNumber');
        $applicant->dob=$request->get('birthday');
        $applicant->nic=$request->get('nicNumber');
        $applicant->cv=$name;

        $applicant->position=$request->get('positionApply');
        $applicant->lastCompany=$request->get('lastcompany');
        $applicant->lastPosition=$request->get('lasttittle');
        $applicant->lastSalary=$request->get('lastsalary');
        $applicant->experience=$request->get('experience');
        $applicant->expertiseAreas=$request->get('notes');

        $applicant->bankAccNo=$request->get('accNumber');
        $applicant->nameAccountHolder=$request->get('accName');
        $applicant->bankName=$request->get('bankName');
        $applicant->branch=$request->get('branch');

        $applicant->agreement=true;

        $applicant->save();

        $lastApplicant = \App\Applicant::latest()->first();

        // echo $lastApplicant->id;
        $applicantStatus= new \App\ApplicantStatus;
        $applicantStatus->applicantID=$lastApplicant->id;
        $applicantStatus->status="Pending";

        $applicantStatus->save();

        toastr()->success('Submited Successfully!');
        
        return redirect('/');
    }

    public function changeStatus(Request $request)
    {
        DB::table('applicant_statuses')
            ->where('applicantID', $request->get('id'))
            ->update(['status' => $request->get('status')]);

    }

    public function viewApplicant(Request $request){
        $applicant = DB::table('applicants')
            ->join('applicant_statuses', 'applicants.id', '=', 'applicant_statuses.applicantID')
            ->select('applicants.*', 'applicant_statuses.status')
            ->where('applicants.id', $request->id)
            ->first();
        return view('Admin.view_applicant',compact('applicant'));
    }

    public function downloadcv(Request $request){
         $file= storage_path(). "\app\applicantCV\\".$request->cv;

        $headers = array(
          'Content-Type: application/pdf',
        );

    return Response::download($file, $request->cv, $headers);
    }
}
