@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
              <a href="{{ url('/home')}}" class="list-group-item list-group-item-action active">
                Applicants
                <span class="badge badge-danger badge-pill float-right">14</span>
              </a>
              <a href="#" class="list-group-item list-group-item-action">Admin Controls</a>
              
            </div>
        </div>
        <div class="col-md-9">
            <div class="card" style="padding:15px">
                <div class="row">
                  <div class="col-md-3">
                    <a class="btn btn-default" href="/home"><button>Go Back</button></a>
                  </div>
                  <div class="col-md-9">
                    <button class=" btn btn-info float-right">Share Details via email</button>
                  </div>
                </div>
                <div class="row">
                  <div class="panel">
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9"></div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card" style="padding:15px">
              <div class="panel">
                <div class="panel-body">
                  <h3><b>PERSONAL DETAILS</b></h3>
                    <ul class="list-group ">
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">Full Name<span class="float-right">:</span></div>
                    <div class="col-md-8">{{ ucfirst($applicant->fullName) }}</div>
                    </div>
                  </li>
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">Address<span class="float-right">:</span></div>
                    <div class="col-md-8">{{ $applicant->address }}</div>
                    </div>
                  </li>
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">e-mail<span class="float-right">:</span></div>
                    <div class="col-md-8">{{ $applicant->email }}</div>
                    </div>
                  </li>
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">Mobile Number<span class="float-right">:</span></div>
                    <div class="col-md-8">{{ $applicant->mobile }}</div>
                    </div>
                  </li>
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">Date of Birth<span class="float-right">:</span></div>
                    <div class="col-md-8">{{ $applicant->dob }}</div>
                    </div>
                  </li>
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">NIC<span class="float-right">:</span></div>
                    <div class="col-md-8">{{ $applicant->nic }}</div>
                    </div>
                  </li>
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">CV<span class="float-right">:</span></div>
                    <div class="col-md-8"><a href="/downloadcv?cv={{$applicant->cv}}" _blank >{{ $applicant->cv }}</a>
                      <a href="\storage\app\applicantCV\{{$applicant->cv}}" target="_blank"><button class="btn btn-sm btn-warning float-right">view</button></a>
                      <span class="float-right"> &nbsp;&nbsp;</span> 
                      <a href="/downloadcv?cv={{$applicant->cv}}" _blank ><button class="btn btn-sm btn-primary float-right">Download CV</button></a>
                    </div>
                    </div>
                  </li>
                </ul>
                <br>
                <h3><b>PROFESSIONAL DETAILS</b></h3>
                    <ul class="list-group ">
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">Applied For<span class="float-right">:</span></div>
                    <div class="col-md-8">{{ ucfirst($applicant->position) }}</div>
                    </div>
                  </li>
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">Previously worked company<span class="float-right">:</span></div>
                    <div class="col-md-8">{{ $applicant->lastCompany }}</div>
                    </div>
                  </li>
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">Last position<span class="float-right">:</span></div>
                    <div class="col-md-8">{{ $applicant->lastPosition }}</div>
                    </div>
                  </li>
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">Last salary <span class="float-right">:</span></div>
                    <div class="col-md-8">{{ $applicant->lastSalary }}</div>
                    </div>
                  </li>
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">Experience in years <span class="float-right">:</span></div>
                    <div class="col-md-8">{{ $applicant->experience }}</div>
                    </div>
                  </li>
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">Expertise areas <span class="float-right">:</span></div>
                    <div class="col-md-8">{{ $applicant->expertiseAreas }}</div>
                    </div>
                  </li>
                </ul>

                <br>
                <h3><b>ACCOUNT DETAILS</b></h3>
                    <ul class="list-group ">
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">Bank Account Number<span class="float-right">:</span></div>
                    <div class="col-md-8">{{ ucfirst($applicant->bankAccNo) }}</div>
                    </div>
                  </li>
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">Account Holder's Name<span class="float-right">:</span></div>
                    <div class="col-md-8">{{ $applicant->nameAccountHolder }}</div>
                    </div>
                  </li>
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">Bank Name<span class="float-right">:</span></div>
                    <div class="col-md-8">{{ $applicant->bankName }}</div>
                    </div>
                  </li>
                  <li class="list-group-item viewMemberDiv">
                    <div class="row">
                      <div class="col-md-4">Branch<span class="float-right">:</span></div>
                    <div class="col-md-8">{{ $applicant->branch }}</div>
                    </div>
                  </li>
                </ul>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
@endsection
