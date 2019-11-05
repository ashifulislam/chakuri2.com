@if(count($errors)>0)
   @foreach($errors->all() as $errors)
       {{$errors}}
   
   @endforeach

@endif

@if(session('LogInUnsuccess'))
    {{session('LogInUnsuccess')}}

@endif


<!DOCTYPE html>
<html lan="en">
    <meta charset="UTF-8">
    <head>
        <title>
            {{config('app.name')}}
        </title>
        <link rel="stylesheet" href="{{url('css/Login.css')}}">
        <script type="text/javascript" src="logInForm.js"></script>
        
    </head>
    <body>
        <div class="signIn">
            <form name="logInForm" method="post" action="{{url('loginOperation')}}"  >
               {{csrf_field()}}
                <h2 style="color:white">LogIn Form</h2>
                <input type="email" placeholder="Enter your email" name="Email" ><br>
                <input type="password" placeholder="Enter your password" name="Pass" ><br>
                <input type="submit" value="LogIn"><br>
                <br>
                <div id="container">
                    <a href="#" style="margin-right:0px font-size=13px;
                       font-family:Tahoma,Geneva,sans-serif;">Reset
                    password</a>
                    <a href="#" style="margin-right:0px font-size=13px;
                       font-family:Tahoma,Geneva,sans-serif;">Forgot
                    password</a>
                </div><br><br><br><br><br><br>
                Don't Have an Account?<a href="{{url('Registration')}}"> &nbsp; SignUp</a> 
            </form>
        </div>
    </body>
</html>