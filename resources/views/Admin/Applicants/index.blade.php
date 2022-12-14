@extends('layouts.admindash')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-4">
            <div class="card card-default">
                <div class="card-header">All TF-Apply Applicants</div>
                <div class="card-body">

                    @if(count($applicants)>0)
        <table class="table table-striped">
            <thead class="thead">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
            </tr>
            </thead>

            <tbody>
                
                    @foreach($applicants as $applicant)
            <tr>
                <th scope="row">{{$applicant->id}}</th>
                <td>{{$applicant->fname}}</td>
                <td>{{$applicant->lname}}</td>
                <td>{{$applicant->mname}}</td>
                <td>{{$applicant->email}}</td>
                <td>{{$applicant->phone}}</td>
                <td>{{$applicant->address1}}</td>
                <td><a href="{{route('applicants.show',$applicant->id)}}">View</a></td>
                <td>
                    <form method="post" action="{{route('applicants.destroy',$applicant->id)}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
                
            </tr>
                   @endforeach
            </tbody>
        </table>

        @else
        <h2>No Applicants yet</h2>
        @endif
          


  
                </div>
            </div>
        </div>
    </div>
</div>









@endsection