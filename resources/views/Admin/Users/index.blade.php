@extends('layouts.admindash')

@section('content')

<h1>All Users</h1>

@if(count($users)>1)
@foreach($users as $user)

    <li>{{$user->fname}}</li>
    <li>{{$user->email}}</li>
<hr>
@endforeach
@else
<h2>No users yet</h2>
@endif






@endsection