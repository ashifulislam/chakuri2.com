@extends('layout.master')

@section('content') 
  @if(session('info'))
     {{session('info')}}
  @endif
 <div class="personal_info">
           
 @if(count($errors)>0)
      @foreach($errors->all() as $errors)
            {{$errors}}
      @endforeach
   @endif
      <div class="p_form">
    <form action="{{url('addJobCategory')}}" method="post" name="form1">
      {{csrf_field()}}
        <h1 style="color:#fff;"> add Job Category</h1>
		<input type="text" name="jobCategoryName" placeholder="Enter your job Category name"><br> <br>
         <select name="categoryType"id="religion">
            <option value="select">select</option> 
            <option value="Government">Government</option> 
            <option value="Private">Private</option>
             
         </select>
        
        <br>
        <input type="submit" value="save">
 
        
	</form>
      </div>
    </div>
@endsection