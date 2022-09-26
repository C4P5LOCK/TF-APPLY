<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\Models\User;
use App\Models\Upload;

class UploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = auth()->user();
        $uploads = Upload::where('user_id',$user->id)->first();
        return view('Applicant.Uploads.index',compact('uploads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();

        $user = auth()->user();

        if($file = $request->file('degree')){
            $name = time().$file->getClientOriginalName();
            $file->move('images',$name);
            $input['degree'] = $name;
        }

        if($file = $request->file('ssce')){
            $name = time().$file->getClientOriginalName();
            $file->move('images',$name);
            $input['ssce'] = $name;
        }

        if($file = $request->file('resume')){
            $name = time().$file->getClientOriginalName();
            $file->move('images',$name);
            $input['resume'] = $name;
        }
        
        $user->upload()->create($input);

        $useruploadid = User::where('id',$user->id)->first();
        $useruploadid->upload_id = $user->upload->id; //the upload_id column from user table where the user is = the id on upload table where the user is
        $useruploadid->save();

        
        //Upload::create($input);
        //return dd($input);
         
         

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
