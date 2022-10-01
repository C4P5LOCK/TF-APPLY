@extends('layouts.applicantdash')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-4">
            <div class="card card-default">
                <div class="card-header">UPLOADS</div>
                <div class="card-body">
                   
                    @if($uploads)
                    
                    <img src="public/images/{{$file->degree}}" height="150" width="150">
                        <li><a href="{{route('uploads.show',$file->degree)}}">A-Level</a></li>
                        <li><a href="{{route('uploads.show',$file->ssce)}}">O-Level/SSCE</a></li>
                        <li><a href="#">Resume/CV</a></li>
                        {{-- <li>{{$uploads->ssce}}</li>
                        <li>{{$uploads->resume}}</li> --}}
                    @else

                            <form action={{action('App\Http\Controllers\UploadsController@store')}} method="POST">
                                @csrf {{csrf_field()}}
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Upload A Level</label>
                                            <input class="form-control" name="degree" type="file" id="formFile">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">SSCE/Equivalent</label>
                                            <input class="form-control" name="ssce" type="file" id="formFile">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Resume/CV</label>
                                            <input class="form-control" name="resume" type="file" id="formFile">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Upload</button>  
                            </form>
                            @endif
                </div>
                
               
            </div>
        </div>
    </div>
</div>
@endsection