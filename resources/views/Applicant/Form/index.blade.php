@extends('layouts.applicantdash')

@section('content')
@include('flash-message')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-4">
                <div class="card card-default">
                    <div class="card-header">FORM</div>
                    <div class="card-body">

                
                @if(auth()->user()->form_id != 0)
                    "You have Submitted the Form, You can still Edit or Review";
                
                @else

                

                <form action={{action('App\Http\Controllers\ApplicantFormController@store')}} method="POST">
                    {{-- @csrf <!{{ csrf_field()}}> --}}
                    @csrf {{csrf_field()}}
                    
                    <div class="row">
                        <div class="col-md-4 pr-md-1 text-left">
                            <div class="form-group"><label class="control-label">First Name</label>
                                <input aria-describedby="addon-right addon-left" placeholder="First Name" name="fname" value="{{auth()->user()->fname}}" class="form-control">
                                @if($errors->has('fname'))
                                    <div class="error">{{ $errors->first('fname','First Name required') }}</div>
                                 @endif
                            </div>
                        </div>
                     
                        <div class="col-md-4 pl-md-1 text-left">
                            <div class="form-group"><label class="control-label"> Last Name</label>
                                <input aria-describedby="addon-right addon-left" placeholder="Last Name" name="lname" value="{{auth()->user()->lname}}" class="form-control"><!---->
                                @if($errors->has('lname'))
                                    <div class="error">{{ $errors->first('lname','Last Name required') }}</div>
                                 @endif
                             </div>
                        </div>

                        <div class="col-md-4 pl-md-1 text-left">
                            <div class="form-group"><label class="control-label"> Other Name</label>
                                <input aria-describedby="addon-right addon-left" placeholder="Other Name" name="mname" value="{{ old('mname') }}" class="form-control"><!---->
                                @if($errors->has('mname'))
                                <div class="error">{{ $errors->first('mname','Middle Name required') }}</div>
                                @endif
                            </div>
                        </div>

                    </div><!--end of row-->

                    <div class="row">
                        <div class="col-md-6 pr-md-1 text-left"><label class="control-label">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                  </div>
                                <input id="" type="text" class="form-control" name="email" value="{{auth()->user()->email}}" placeholder="Email">
                                @if($errors->has('email'))
                                    <div class="error">{{ $errors->first('email','Email required') }}</div>
                                 @endif
                              </div>
                        </div>

                    
                        <div class="col-md-6 pr-md-1 text-left"><label class="control-label">Phone</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                  </div>
                                <input id="" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone">
                                @if($errors->has('phone'))
                                    <div class="error">{{ $errors->first('phone','Phone Required') }}</div>
                                 @endif
                              </div>
                        </div>

                    </div><!--end of row--> <br>

                    <div class="row">
                        <div class="col-md-6 pr-md-1 text-left"><label class="control-label">Address 1</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="bi bi-house-fill"></i></span>
                                  </div>
                                <input id="" type="text" class="form-control" name="address1" value="{{ old('address1') }}" placeholder="Address 1">
                                
                              </div>
                        </div>

                        <div class="col-md-6 pr-md-1 text-left"><label class="control-label">Address 2</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="bi bi-house-fill"></i></span>
                                  </div>
                                <input id="" type="text" class="form-control" name="address2" value="{{ old('address2') }}" placeholder="Address 2">
                              </div>
                        </div>

                    </div><!--end of row--><br>



                      <div class="row"><div class="col-md-4 pr-md-1 text-left">
                          <div class="form-group"><label class="control-label">Country</label>
                            <input aria-describedby="addon-right addon-left" placeholder="Country" value="{{ old('country') }}" name="country" class="form-control">
                          </div>
                        </div>
                     
                     <div class="col-md-4 px-md-1 text-left">
                         <div class="form-group"><label class="control-label">State/City</label>
                           <input aria-describedby="addon-right addon-left" placeholder="State" value="{{ old('state') }}" name="state" class="form-control">
                        </div>
                    </div>

                      <div class="col-md-4 pl-md-1 text-left">
                          <div class="form-group"><label class="control-label">Postal Code</label>
                            <input aria-describedby="addon-right addon-left" placeholder="ZIP Code" name="zip" value="{{ old('zip') }}" class="form-control">
                          </div>
                      </div>

                    </div><!--end of row-->

                        <hr>
                        <h3>EDUCATION</h3>        
                        <div class="add">
                            <div class="row">
                                <div class="col-md-6 pr-md-1 text-left"><label class="control-label">Institution Attended</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-house-fill"></i></span>
                                          </div>
                                        <input id="" type="text" class="form-control" name="institution" value="{{ old('institution') }}" placeholder="Name of Institution">
                                      </div>
                                </div>
        
                                <div class="col-md-4 pr-md-1 text-left"><label class="control-label">Degree Type</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                          </div>
                                          <select class="form-control" name="qualification">
                                            <option>Select</option>
                                            <option>Bsc/BTech</option>
                                            <option>HND</option>
                                            <option>ND</option>
                                          </select>
                                     </div>
                                </div>
                              
                            </div><!--end of row--><br>     

                        </div>
<div class="row">
                        <div class="col-sm-4 mb-3">
                            <label for="formFile" class="form-label">Upload Degree (A Level) </label>
                            <input class="form-control" type="file" id="formFile">
                        </div>

                        <div class="col-sm-4 mb-3">
                            <label for="formFile" class="form-label">Upload SSCE</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>

                        <div class="col-sm-4 mb-3">
                            <label for="formFile" class="form-label">Upload CV</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
</div>
                        <button type="submit" class="btn btn-primary">Submit</button>      
                 </form>
                
                @endif
                    </div><!--End of Card Body-->

                </div>
            </div>
        </div>
  
    </div><!--end of container-->





               
                {{-- @endif --}}

@endsection