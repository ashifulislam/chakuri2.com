


@if(count($errors)>0)
 @foreach($errors->all() as $error)
     {{$error}}
 @endforeach

@endif

@if(session('emailExists'))
    {{session('emailExists')}}
@endif
@if(session('passNotMatch'))
   
   {{session('passNotMatch')}}
@endif
   @if(session('successfull'))
   
   {{session('successfull')}}
@endif    
        @include('layout/header')
       
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
        <form name="createEmployer"  method="post" action="{{url('addEmployerOperation')}}" >
                    {{csrf_field()}}
                <h1 style="color:#fff;"> Add Employer</h1><br>
                <h2 style="color:#fff;"> <u>Add Personal Info</u></h2><br><br>
                <input type="text" placeholder="enter First Name" name="firstName">
                <br><br>
                <input type="text" placeholder="enter Last Name" name="lastName">
                <br><br>
                <input type="email" placeholder="enter email" name="email" >
                <br><br>
                <input type="password" placeholder="enter password" name="password" onchange="checkMatchPassword();" >
                <br><br>
                <input type="password" placeholder="enter  retTypePassword" name="reType" onchange="checkMatchPassword();" >
                <br><br>
                <h2 style="color:#fff;"> <u>Add Company's Info</u></h2>
                <br><br>
                <input type="text" placeholder="enter company name" name="companyName" >
                <br><br>
                <input type="text" placeholder="enter company details" name="companyDetails" >
                <br><br>
                <h2 style="color:#fff;"> <u> Add Company's Location</u></h2>
                <br><br>
                <input type="text" placeholder="enter company's country" name="companyCountry" >
                <br><br>
                 <input type="text" placeholder="enter company's state" name="companyState" >
                <br><br>
                 <input type="number" placeholder="enter company's zip Code" name="companyZipCode" >
                <br><br>
                
                
              
                <input type="checkbox" name="myCheck" id="myCheck">I agree with the terms and conditions<br>
                
                <input type="submit" name="signup" value="Add Employer"><br><br><br>
                Do you want to add again?<a href="{{url('addEmployer')}}"> &nbsp; Add Employer</a> 
                
            </form>
        </div>
    </body>
</html>




