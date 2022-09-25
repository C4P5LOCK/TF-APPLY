<?php

namespace App\Http\Controllers;
use App\Http\Requests\ApplicationFormRequest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Form;
use App\Models\User;
use Carbon\Carbon;

class ApplicantFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $form = Form::all()->first();
        $user = Auth::user();
        // return view('pages.editprofile')->withUser($user);
        return view('Applicant.Form.index',compact('user','form'));
        //return dd($form);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //here..
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplicationFormRequest $request)
    {
        //
        $user = Auth::user();
        
        $input = $request->all();
       
        $user->form()->create($inputs); //This enters the user_id to the form table
       
        //This part is suppose to update the form_id on users table to this new form id
        $userformid = User::where('id',$user->id)->first();
        $userformid->form_id = $user->form->id;
        $userformid->save();

       //return dd($inputs);
       return redirect('/applicant')->with('success','Form submitted sucessfully!');
        
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
        $date = Carbon::now();
        $form = Form::findOrFail($id);
        return view ('Applicant.Form.show',compact('form','date'))->with('id',$form->id);
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
        $form = Form::findOrFail($id);
        return view('Applicant.Form.edit',compact('form'))->with('id',$form->id);
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
        $form = Form::findOrFail($id);
        $input = $request->all();

        $form->update($input);

        return redirect('/applicant')->with('success','Form updated succesfully!');
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
