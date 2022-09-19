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
            <a href="" class="btn btn-primary btn-block"><b></b></a>
            </div>
            
            </div>
            
        </div>
        
        <div class="col-md-9">
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Profile</h3>        
            </div>

            <div class="card-body">
                <form action={{action('App\Http\Controllers\ApplicantProfileController@update',$user->id)}} method="POST" enctype="multipart/form-data">
                    {{-- @csrf <!{{ csrf_field()}}> --}}
                    @csrf {{csrf_field()}}
                    @method('PATCH')
    
                   
                    <div class="form-group"><label class="control-label">First Name</label>
                        <input aria-describedby="addon-right addon-left" placeholder="First Name" name="fname" value="{{auth()->user()->fname}}" class="form-control">
                        @if($errors->has('fname'))
                            <div class="error">{{ $errors->first('fname','First Name required') }}</div>
                            @endif
                    </div>

                    <div class="form-group"><label class="control-label">Last Name</label>
                        <input aria-describedby="addon-right addon-left" placeholder="Last Name" name="lname" value="{{auth()->user()->lname}}" class="form-control">
                        @if($errors->has('lname'))
                            <div class="error">{{ $errors->first('fname','First Name required') }}</div>
                            @endif
                    </div>

                    <div class="form-group"><label class="control-label">Other Name</label>
                        <input aria-describedby="addon-right addon-left" placeholder="Other Name" name="mname" value="{{$form ? $form->mname: 'Nil'}}" class="form-control">
                        @if($errors->has('mname'))
                            <div class="error">{{ $errors->first('fname','First Name required') }}</div>
                            @endif
                    </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Choose Profile Pic</label>
                            <input class="form-control" name="profilepic" type="file" id="formFile">
                          </div>
                    </div>

                     
                        
                    <button type="submit" class="btn btn-primary">Update</button>  
                    
                </form>

            </div>
            </div>
        </div>
            
           


  </div> <!--end of row-->


@endsection