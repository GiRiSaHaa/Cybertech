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
              <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
              
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Applied Position</th>
                        <th>Phone Number</th>
                        <th>Status</th>
                        <th style="text-align: center;">View</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $n=1; ?>
                      @foreach($applicants as $applicant)
                      @foreach($applicantStatus as $status)
                      <tr>
                        <td>{{ $n++ }}</td>
                        <td>{{$applicant['fullName']}}</td>
                        <td>{{$applicant['position']}}</td>
                        <td>{{$applicant['mobile']}}</td>
                        <td>{{ ($status->applicantID==$applicant['id'])?$status->status:"" }}</td>
                        <td style="text-align: center;">
                            <a href="" class="btn btn-warning">View</a>
                        </td>
                      </tr>
                      @endforeach
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
