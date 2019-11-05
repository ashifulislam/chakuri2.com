@if(session('LogInSuccess'))
       {{session('LogInSuccess')}}
@endif

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        @include('layout/header')
        @include('layout/sideBar')
    </body>
</html>

<?php
return 'hello world';

?>