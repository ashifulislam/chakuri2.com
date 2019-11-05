@if(count($errors)>0)
 @foreach($errors->all() as $error)
     {{$error}}
 @endforeach

@endif


        @include('layout/header')
        
        
      @if(session('emailExists'))
          {{session('emailExists')}}
        @endif  
       
       
<!DOCTYPE html>
<html lan="en">
    <head>
        <meta charset="UTF-8">
        <title>
            {{config('app.name')}}
        </title>
        <link rel="stylesheet" href="{{url('css/addEmployeer.css')}}">
        
    </head>
    <body>
        @include('layout/sideBar')
        <div class="SignUp">
        <form name="createEmployer"  method="post" action="{{url('/edit',array($updateEmployerList->id))}}" >
                    {{csrf_field()}}
                <h1 style="color:#fff;"> Add Employer</h1><br>
                <h2 style="color:#fff;"> <u>Add Personal Info</u></h2><br><br>
                <input type="text" placeholder="enter First Name" name="FirstName"
                value="<?php
                       echo $updateEmployerList->firstName?>">
                <br><br>
                <input type="text" placeholder="enter Last Name" name="LastName"
                value="<?php
                           echo $updateEmployerList->lastName;
                           ?>">
                <br><br>
               
                
                <h2 style="color:#fff;"> <u>Add Company's Info</u></h2>
                <br><br>
                <input type="text" placeholder="enter company name" name="CompanyName" value="<?php echo $updateEmployerList->companyName?>">
                <br><br>
                <input type="text" placeholder="enter company details" name="CompanyDetails" value="<?php echo $updateEmployerList->companyDetails?>" >
                <br><br>
                <h2 style="color:#fff;"> <u> Add Company's Location</u></h2>
                <br><br>
                <input type="text" placeholder="enter company's country" name="CompanyCountry" value="<?php echo $updateEmployerList->companyCountry?>" >
                <br><br>
                 <input type="text" placeholder="enter company's state" name="CompanyState" value="<?php echo $updateEmployerList->companyState?>">
                <br><br>
                 <input type="number" placeholder="enter company's zip Code" name="CompanyZipCode" value="<?php echo $updateEmployerList->companyZipCode?>">
                <br><br>
                
                
              
                <input type="checkbox" name="myCheck" id="myCheck">I agree with the terms and conditions<br>
                
                <input type="submit" name="signup" value="Update Employer"><br><br><br>
                Do you want to update again?<a href="{{url('addEmployer')}}"> &nbsp; Update Employer</a> 
                
            </form>
        </div>
    </body>
</html>




