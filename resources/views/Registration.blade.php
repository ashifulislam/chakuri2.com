@if(count($errors)>0)
    @foreach($errors->all() as $errors)
    
       {{$errors}}
    
    @endforeach
@endif
@if(session('info'))
   {{session('info')}}

@endif
@if(session('emailExists'))
    {{session('emailExists')}}
@endif
@if(session('passNotMatch'))
     {{session('passNotMatch')}}
@endif

<!DOCTYPE html>
<html lan="en">
    <head>
        <meta charset="UTF-8">
        <title>
            {{config('app.name')}}
        </title>
        <link rel="stylesheet" href="{{url('css/Registration.css')}}">
        <script type="text/javascript" src="registrationForm.js"> </script>
    </head>
    <body>
        <div class="SignUp">
            <form name="regForm" method="post" action="{{url('regOperation')}}">
               {{csrf_field()}}
                <h2 style="color:#fff;"> SignUp</h2>
                <input type="text" placeholder="enter your fullname" name="fullname">
                
                <br><br>
                <input type="email" placeholder="enter your email" name="email" >
                <br><br>
                <input type="password" placeholder="enter your password" name="password" >
                <br><br>
                <input type="password" placeholder="enter your retTypePassword" name="reType" onchange="checkMatchPassword();" >
                <br><br>
                <input type="number" placeholder="age" name="age" onchange="checkAge();" >
                <br>
                <select name="religion" id="religion">
                    <option name="religion" value="religion">Religion</option>
                    <option name="religion" value="muslim">Muslim</option>
                    <option name="religion" value="Hindu">Hindu</option>


                </select>
                <br>
                <div class="gender">
                Gender:
               <input type="radio" name="gender" value="male"> Male
               <input type="radio" name="gender" value="female"> Female<br><br>
                </div>
                <input type="checkbox" name="myCheck" id="myCheck">I agree with the terms and conditions<br>
                
                <input type="submit" name="signup" value="Sign Up"><br><br><br>
                Are You Registered?<a href="{{url('Login')}}"> &nbsp; LogIn</a> 

                
            </form>
        </div>
    </body>
</html>




