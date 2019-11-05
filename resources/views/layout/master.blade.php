
<html>
<head>
     
	@yield('title')
 <link rel="stylesheet" href="{{url('css/jobCategory.css')}}">
</head>
 
<body>
	 @include('layout/header')
        @include('layout/sideBar')
	<br/><br/>
 
   @yield('content')    
   
	
</body>
    
    
</html>