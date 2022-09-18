<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Form;
use Illuminate\Http\Request;

class ApplicantProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $users = User::where('id',$user->id)->first();
        $form = Form::where('user_id',$user->id)->first();

      
        return view('Applicant.Profile.index',compact('users','form'));
        // return dd($form);
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
        $user = auth()->user();
        //$users = User::where('id',$user->id)->first();
        // $form = Form::where('user_id',$user->id)->first();

        return view ('Applicant.Profile.edit',compact('user'));
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
        $input = $request->all();
       
        $user = User::findOrFail($id);
        if($file = $request->file('profilepic')){
            $name = time().$file->getClientOriginalName();
            $file->move('images',$name);

            $input['profilepic'] = $name;
        }
        
             $user->update($input);
             //return dd($input);
             return back()->with('success','Profile updated succesfully!');

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

    public function try()
    {
        $user = User::all();
        return dd($user);
    }
}
