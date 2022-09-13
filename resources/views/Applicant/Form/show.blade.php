@extends('layouts.applicantdash')

@section('content')

<section class="content">
    <div class="container-fluid">
    
    <div class="row">
        <div class="col-12">
        <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> Note:</h5>
        
    </div>
    
    <div class="invoice p-3 mb-3">
        
        <div class="row">
            <div class="col-12">
            <h4>
            <i class="fas fa-globe"></i> TF Apply.
            <small class="float-right">Date: 2/10/2014</small>
            </h4>
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
            
                <h6><strong>First Name:</strong></h6><p>{{$form->fname}}</p>
                <h6><strong>Last Name:</strong></h6><p>{{$form->lname}}</p>
                <h6><strong>Other Name(s):</strong></h6><p>{{$form->mname ? $form->mname : 'Nil'}}</p>
                <h6><strong>Phone:</strong></h6><p>{{$form->phone}}</p>
            </div>
            
            <div class="col-sm-6">
                
                <h6><strong>E-mail:</strong></h6><p>{{$form->email}}</p>
                <h6><strong>Address:</strong></h6><p>{{$form->address1}}</p>
                <h6><strong>Location:</strong></h6><p>{{$form->state}},{{$form->country}}</p>
            
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
                <td>{{$form->institution}}</td>
                <td>{{$form->qualification}}
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    
    
    
    
    <div class="row no-print">
    <div class="col-12">
    <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
    <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i>
    </button>
    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
    <i class="fas fa-download"></i> Generate PDF
    </button>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    </div>
    </section>
@endsection