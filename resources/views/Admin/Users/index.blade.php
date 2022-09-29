@extends('layouts.admindash')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-4">
            <div class="card card-default">
                <div class="card-header">All Users</div>
                <div class="card-body">


        <table class="table table-striped">
            <thead class="thead">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Email</th>
            </tr>
            </thead>

            <tbody>
                @if(count($users)>1)
                    @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->fname}}</td>
                <td>{{$user->lname}}</td>
                <td>{{$user->mname}}</td>
                <td>{{$user->email}}</td>
                <td>View</td>
                <td>Delete</td>
            </tr>
                   @endforeach
            </tbody>
        </table>

        @else
<h2>No users yet</h2>
@endif
  
                </div>
            </div>
        </div>
    </div>
</div>









@endsection