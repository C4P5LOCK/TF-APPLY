
@extends('layouts.admindash')

@section('content')

<section class="content">
    <div class="container-fluid">
    
    <div class="row">
        <div class="col-12">
        <div class="callout callout-info">
    </div>
    
    <div class="invoice p-3 mb-3">
        
        <div class="row">
            <div class="col-12">
            <h5>
            <i class="fas fa-globe"></i> TF Apply.
            <small class="float-right">Date: {{$date->toDayDateTimeString()}}</small>
            </h5>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                BIO-DATA
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
            
                <h6><strong>First Name:</strong></h6><p>{{$applicant->fname}}</p>
                <h6><strong>Last Name:</strong></h6><p>{{$applicant->lname}}</p>
                <h6><strong>Other Name(s):</strong></h6><p>{{$applicant->mname ? $applicant->mname : 'Nil'}}</p>
                <h6><strong>Phone:</strong></h6><p>{{$applicant->phone}}</p>
            </div>
            
            <div class="col-sm-6">
                
                <h6><strong>E-mail:</strong></h6><p>{{$applicant->email}}</p>
                <h6><strong>Address:</strong></h6><p>{{$applicant->address1}}</p>
                <h6><strong>Location:</strong></h6><p>{{$applicant->state}},{{$applicant->country}}</p>
            
            </div>
        </div>
    
    
    <div class="row">
        <div class="col-12 table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                <th>Education</th>
                <th>Degree Type</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                <td>{{$applicant->institution}}</td>
                <td>{{$applicant->qualification}}
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    
    
    
    
    
    
    </div>
    </div>
    </div>
    </section>
@endsection