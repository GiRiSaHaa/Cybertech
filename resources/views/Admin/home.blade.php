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
                <table class="table table-striped" id="mydata">
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
                        
                      <tr>
                        <td>{{ $n++ }}</td>
                        <td>{{$applicant->fullName }}</td>
                        <td>{{$applicant-> position }}</td>
                        <td>{{$applicant->mobile }}</td>
                        <td>
                            <div class="form-group">
                                <?php if($applicant->status=='Pending'){ ?>
                              <select class="form-control" id="sel1">
                                <option value="{{ $applicant->id }}" <?=(($applicant->status=='Selected')?'selected':'')?>>Selected</option>
                                <option value="{{ $applicant->id }}" <?=(($applicant->status=='Rejected')?'selected':'')?>>Rejected</option>
                                <option value="{{ $applicant->id }}" <?=(($applicant->status=='Pending')?'selected':'')?>>Pending</option>
                              </select>
                                <?php }else{ ?>
                                    <select class="form-control" id="sel1">
                                <option value="{{ $applicant->id }}" <?=(($applicant->status=='Selected')?'selected':'')?>>Selected</option>
                                <option value="{{ $applicant->id }}" <?=(($applicant->status=='Rejected')?'selected':'')?>>Rejected</option>
                              </select>
                                <?php } ?>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <a href="view_applicant?id={{$applicant->id}}" class="btn btn-sm btn-warning">View</a>
                        </td>
                      </tr>
                        
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>

@endsection
