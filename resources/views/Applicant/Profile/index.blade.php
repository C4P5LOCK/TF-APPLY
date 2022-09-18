@extends('layouts.applicantdash')

@section('content')

{{-- <h1>Applicant Profile</h1>

@if($users)

@foreach($users as $user)

    <li>{{$user->fname}},{{$user->lname}}</li>
    <li>{{$user->email}}</li>

    @endforeach

    @endif --}}

  <div class="row mt-5">
    
        <div class="col-md-3">

            <div class="card card-primary card-outline">
            <div class="card-body box-profile">
            <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="/images/{{auth()->user()->profilepic}}" alt="User profile picture">
            </div>
            <h3 class="profile-username text-center">{{auth()->user()->fname}}, {{auth()->user()->lname}}</h3>
            
            <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
            <b>Status</b> <a class="float-right">Applied</a>
            </li>
            <li class="list-group-item">
            <b>Verified</b> <a class="float-right">No</a>
            </li>
            <li class="list-group-item">
            <b>Approved</b> <a class="float-right">No</a>
            </li>
            </ul>
            <a href="{{route('profile.edit',$users->id)}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
            </div>
            
            </div>
            
        </div>
        
        <div class="col-md-9">
            <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">About</h3>
            </div>
            
            <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i> Education</strong>
            <p class="text-muted">
            {{$form->institution}}
            </p>
            <hr>
            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
            <p class="text-muted">{{$form->country}}, {{$form->state}}</p>
            <hr>
            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
            <p class="text-muted">
            <span class="tag tag-danger">UI Design</span>
            <span class="tag tag-success">Coding</span>
            <span class="tag tag-info">Javascript</span>
            <span class="tag tag-warning">PHP</span>
            <span class="tag tag-primary">Node.js</span>
            </p>
            <hr>
            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            </div>
        </div>


  </div> <!--end of row-->


@endsection