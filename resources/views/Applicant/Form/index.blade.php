@extends('layouts.applicantdash')

@section('content')




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-4">
                <div class="card card-default">
                    <div class="card-header">FORM</div>
                    <div class="card-body">
                    
                    
                <form action={{action('App\Http\Controllers\ApplicantFormController@store')}} method="POST">
                    {{-- @csrf <!{{ csrf_field()}}> --}}
                    @csrf {{csrf_field()}}
                    
                    <div class="row">
                        <div class="col-md-4 pr-md-1 text-left">
                            <div class="form-group"><label class="control-label">First Name</label>
                                <input aria-describedby="addon-right addon-left" placeholder="First Name" name="fname" class="form-control">
                            </div>
                        </div>
                     
                        <div class="col-md-4 pl-md-1 text-left">
                            <div class="form-group"><label class="control-label"> Last Name</label>
                                <input aria-describedby="addon-right addon-left" placeholder="Last Name" name="lname" class="form-control"><!---->
                             </div>
                        </div>

                        <div class="col-md-4 pl-md-1 text-left">
                            <div class="form-group"><label class="control-label"> Other Name</label>
                                <input aria-describedby="addon-right addon-left" placeholder="Other Name" name="mname" class="form-control"><!---->
                             </div>
                        </div>

                    </div><!--end of row-->

                    <div class="row">
                        <div class="col-md-4 pr-md-1 text-left"><label class="control-label">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                  </div>
                                <input id="" type="text" class="form-control" name="email" placeholder="Email">
                              </div>
                        </div>

                    
                        <div class="col-md-4 pr-md-1 text-left"><label class="control-label">Phone 1</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                  </div>
                                <input id="" type="text" class="form-control" name="phone1" placeholder="Phone 1">
                              </div>
                        </div>

                        <div class="col-md-4 pr-md-1 text-left"><label class="control-label">Phone 2</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                  </div>
                                <input id="" type="text" class="form-control" name="phone2" placeholder="Phone 2">
                              </div>
                        </div>
                     
                        

                    </div><!--end of row--> <br>

                    <div class="row">
                        <div class="col-md-6 pr-md-1 text-left"><label class="control-label">Address 1</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="bi bi-house-fill"></i></span>
                                  </div>
                                <input id="" type="text" class="form-control" name="address1" placeholder="Address 1">
                              </div>
                        </div>

                        <div class="col-md-6 pr-md-1 text-left"><label class="control-label">Address 2</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="bi bi-house-fill"></i></span>
                                  </div>
                                <input id="" type="text" class="form-control" name="address2" placeholder="Address 2">
                              </div>
                        </div>

                    </div><!--end of row--><br>



                      <div class="row"><div class="col-md-4 pr-md-1 text-left">
                          <div class="form-group"><label class="control-label">Country</label>
                            <input aria-describedby="addon-right addon-left" placeholder="Country" name="country" class="form-control">
                          </div>
                        </div>
                     
                     <div class="col-md-4 px-md-1 text-left">
                         <div class="form-group"><label class="control-label">State/City</label>
                           <input aria-describedby="addon-right addon-left" placeholder="State" name="state" class="form-control">
                        </div>
                    </div>

                      <div class="col-md-4 pl-md-1 text-left">
                          <div class="form-group"><label class="control-label">Postal Code</label>
                            <input aria-describedby="addon-right addon-left" placeholder="ZIP Code" name="zip" class="form-control">
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
                                        <input id="" v-form="nameofins" type="text" class="form-control" name="institution" placeholder="Name of Institution">
                                      </div>
                                </div>
        
                                <div class="col-md-4 pr-md-1 text-left"><label class="control-label">Degree Type</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                          </div>
                                        <input class="form-control" name="date" placeholder="Degree Type" name="qualification" name type="text"/>
                                     </div>
                                </div>
                              
                            </div><!--end of row--><br>     

                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>      
                 </form>
                   
                    </div><!--End of Card Body-->

                </div>
            </div>
        </div>
 
    </div><!--end of container-->







@endsection