@extends('layouts.applicantdash')

@section('content')

<h1>Applicant Profile</h1>

@if($users)

@foreach($users as $user)

    <li>{{$user->fname}},{{$user->lname}}</li>
    <li>{{$user->email}}</li>

    @endforeach

    @endif








@endsection