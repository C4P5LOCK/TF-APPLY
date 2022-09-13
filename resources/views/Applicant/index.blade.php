@extends('layouts.applicantdash')

@section('content')
@include('flash-message')
<h4>Welcome {{auth()->user()->fname}}!</h4>
<hr>









@endsection