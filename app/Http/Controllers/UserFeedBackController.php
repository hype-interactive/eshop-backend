<?php

namespace App\Http\Controllers;

use App\Mail\CustomMail;
use App\Models\User;
use App\Models\UserFeedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserFeedBackController extends Controller
{
    function createFeedBack(Request $request){

        $rules=[
            'message'=>'required|min:20'
        ];

      $validation =Validator::make($request->all(), $rules );

        if($validation->fails()){
            return redirect()-> back()->withErrors($validation)->withInput();
        }

        try{


        // send email
        $admins=User::where('role_id',1)->get();
        foreach($admins as $admin){
            $data=(object)[
              'first_name'=>$admin->first_name,
              'middle_name'=>$admin->middle_name,
              'comment'=>$request->message,
              'sender_name'=>auth()->user()->first_name.' '. auth()->user()->middle_name.' '.auth()->user()->last_name,
            ];
            Mail::to($admin->email)->send(New CustomMail( $data));

            Mail::to('percyegno@gmail.com')->send(New CustomMail( $data));

        }

        // save to data base  just incase

        UserFeedback::create([
          'message'=>$request->message,
          'user_id'=>auth()->user()->id,
        ]);


        session()->flash('message_sucess','your request has been submitted successfully');
        return back();

    }
    catch(\Exception $error){

        session()->flash('message_fail','something went wrong, Please contact the administrators '.$error->getMessage());
        return back();
    }



    }
}
