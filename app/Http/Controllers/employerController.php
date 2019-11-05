<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobCategory;
class employerController extends Controller
{
    public function createJob(){
        return view('addJobCategory');
    }
    public function addCategory(Request $request){
        $this->validate($request,[
            'jobCategoryName'=>'required'
            
        ]);
    $jobCategory=new jobCategory();
    $jobCategory->jobCategoryName=$request->input('jobCategoryName');
    $jobCategory->jobCategoryType =$request->input('categoryType');
    $jobCategory->save();
        return 'saved Successfully';
    //return redirect('/addJobCategory')->with('info','savedSuccessfully');
        
        
    }
    public function showJobCategory(){
        $jobCategory=jobCategory::all();
        return view('/showJobCategory')->with('jobCategory',$jobCategory);
        
    }
}
