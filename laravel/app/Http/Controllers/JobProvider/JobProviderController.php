<?php

namespace App\Http\Controllers\JobProvider;

use App\Http\Controllers\Controller;
use App\Models\JobProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class JobProviderController extends Controller
{
   
    function create(Request $request){
        //Validate Inputs
        $request->validate([
            'name'=>'required',
            'company_name'=>'required',
            'members'=>'required',
            'email'=>'required|email|unique:job_providers,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $provider = new JobProvider();
        $provider->name = $request->name;
        $provider->company_name = $request->company_name;
        $provider->members = $request->members;
        $provider->email = $request->email;
        $provider->password = Hash::make($request->password);
        $save = $provider->save();

        if( $save ){
            return redirect()->back()->with('success','You are now registered successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
      
  }

  function check(Request $request){
      //Validate inputs
      $request->validate([
         'email'=>'required|email|exists:job_providers,email',
         'password'=>'required|min:5|max:30'
      ],[
          'email.exists'=>'This email is not exists on users table'
      ]);

      $creds = $request->only('email','password');
      
      if( Auth::guard('provider')->attempt($creds) ){
          return redirect()->route('provider.home');
      }else{
          return redirect()->route('provider.login')->with('fail','Incorrect credentials');
      }
  }

  function logout(){
      Auth::guard('provider')->logout();
      return redirect('/');
  }


}












