<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantDashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        // $user = auth()->user();
        // $form = Form::where('user_id',$user->id)->first();
        // return view ('layouts.applicantdash',compact('formm'));

        //return dd($form);
    }
}
