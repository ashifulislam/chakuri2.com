<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Collection;
use App\Registration;

class authenticationController extends Controller
{
    public function showLoginForm(){
       return view('Login');
    }
    public function showRegistrationForm(){
        
        return view('Registration');
    }
     public function performLogin(Request $request){
        $this->validate($request,[
            'Email'=>'required',
            'Pass'=>'required'
        ]);
       
     if(Registration::where('email','=',$request->input('Email'))->where('password','=',$request->input('Pass'))->count()>0){
          $request->session()->put('email',$request->input('email'));
         return redirect('/adminHomePage');
        
     }
        else{
           
            return redirect('/Login')->with('LogInUnsuccess','Invalid username or password');
          
        }
      
    }
     public function performreg(Request $request){
       $this->validate($request,[
           'fullname'=>'required',
           'email'=>'required',
           'password'=>'required',
           'age'=>'required',
           'religion'=>'required',
           'gender'=>'required',
           'myCheck'=>'required'
       ]);
        
        $registration =new Registration();
         if($request->input('password')!=$request->input('reType')){
               return redirect('/Registration')->with('passNotMatch','Password did not match');
         }
        else if (Registration::where('email', '=', $request->input('email'))->count() > 0) {
         return redirect('/Registration')->with('emailExists','This email is already taken');}
       else{
       $registration->fullname=$request->input('fullname');
       $registration->email=$request->input('email');
       $registration->password=$request->input('password');
       $registration->age=$request->input('age');
       $registration->religion=$request->input('religion');
       $registration->gender=$request->input('gender');
        $registration->save();
        return redirect('/Registration')->with('info','Saved Successfully');
         }
         
       
         
         
       
    }
}
