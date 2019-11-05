<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addEmployer;

class AdminController extends Controller
{
     public function showAdminPanel(){
         return view('adminHomePage');
     }
    public function createEmployer(Request $request){
       
        return view('addEmployer');
        
    }
    public function addEmployer(Request $request){
        $this->validate($request,[
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required',
            'password'=>'required',
            'reType'=>'required',
            'companyName'=>'required',
            'companyDetails'=>'required',
            'companyCountry'=>'required',
            'companyState'=>'required',
            'companyZipCode'=>'required',
            'myCheck'=>'required'
            
        ]);
        
        $addEmployer=new addEmployer();
       if($request->input('password')!=$request->input('reType')){   
          
           return redirect('/addEmployer')->with('passNotMatch','Password did not match');
       }
                                                                 
        elseif(addEmployer::where('email','=',$request->input('email'))->count()>0){
            return redirect('/addEmployer')->with('emailExists','This email is already taken');
        }else{
            
        $addEmployer->firstName=$request->input('firstName');
        $addEmployer->lastName=$request->input('lastName');
        $addEmployer->email=$request->input('email');
        $addEmployer->password=$request->input('password');
        $addEmployer->companyName=$request->input('companyName');
        $addEmployer->companyDetails=$request->input('companyDetails');
        $addEmployer->companyCountry=$request->input('companyCountry');
        $addEmployer->companyState=$request->input('companyState');
        $addEmployer->companyZipCode=$request->input('companyZipCode');
        $addEmployer->save();
        return redirect('/addEmployer')->with('successfull','add Successfully');
        
        }
    }
    public function showEmployerList(){
        $addEmployer=AddEmployer::all();
        
        return view('/showEmployerList')->with('showEmployer',$addEmployer);
    }
    public function updateEmployer($id){
        $addEmployer=AddEmployer::find($id);
        return view('/updateEmployerList',['updateEmployerList'=>$addEmployer]);
        
    }
    public function editEmployer(Request $request,$id){
        $this->validate($request,[
            'FirstName'=>'required',
            'LastName'=>'required',
            'CompanyName'=>'required',
            'CompanyDetails'=>'required',
            'CompanyCountry'=>'required',
            'CompanyState'=>'required',
            'CompanyZipCode'=>'required',
            'myCheck'=>'required'
            
        ]);
      
        
        $update=array('firstName'=>$request->input('FirstName'),'lastName'=>$request->input('LastName'),'companyName'=>$request->input('CompanyName'),
                     'companyDetails'=>$request->input('CompanyDetails'),
                     'companyCountry'=>$request->input('CompanyCountry'),
                     'companyState'=>$request->input('CompanyState'),
                     'companyZipCode'=>$request->input('CompanyZipCode'));
        $updateEmployer=AddEmployer::where('id',$id);
        $updateEmployer->update($update);
        return redirect('/showEmployerList')->with('success','Updated Successfully');
    
    }
    public function deleteEmployer($id){
       
        $delete=addEmployer::where('id',$id);
        $delete->delete();
        return redirect('/showEmployerList')->with('DeleteSuccess','Deleted Successfully');
    }
  
}


