  
      @if(session('success'))
          {{session('success')}}
        @endif  
    @if(session('emailExists'))
      {{session('emailExists')}}
    @endif
 @if(session('DeleteSuccess'))
 {{session('DeleteSuccess')}}
 @endif

<!DOCTYPE html>
 <html>
     <head>
        @include('layout/header') 
       
         <link rel="stylesheet" href="{{url('css/showEmployer.css')}}">
         <link rel="stylesheet" href="{{url('css/all.css')}}">
     </head>
     <body>
        
         <form name="showList" action="{{url('addEmployer')}}">
            {{csrf_field()}}
           
             <table >
             
                <tr>
                   
                    <th colspan="11"><h2>Employer List</h2></th>
                </tr>
                 <tr>
                    <th>
                        ID
                    </th>
                     <th>
                         First Name
                     </th>
                     <th>
                         Last Name
                     </th>
                      <th>
                         Email
                     </th>
                      <th>
                         Company Name
                     </th>
                     <th>
                         Company Details
                     </th>
                      <th>
                         Company Country
                     </th>
                     <th>
                         Company State
                     </th>
                      <th>
                         Company Zip Code
                     </th>
                     <th>
                         Update
                     </th>
                      <th>
                         Delete
                     </th>
                     
                    
                 </tr>
                 <tr>
                   @if(count($showEmployer)>0)
                    @foreach($showEmployer->all() as $showEmployer)
                    <td>
                         {{$showEmployer->id}}
                    </td>
                    <td>
                         {{$showEmployer->firstName}}
                    </td>
                    <td>
                        {{$showEmployer->lastName}}
                    </td>
                      <td>
                        {{$showEmployer->email}}
                    </td>
                      <td>
                        {{$showEmployer->companyName}}
                    </td>
                      <td>
                        {{$showEmployer->companyDetails}}
                    </td>
                      <td>
                        {{$showEmployer->companyCountry}}
                    </td>
                      <td>
                        {{$showEmployer->companyState}}
                    </td>
                    
                  <td>
                        {{$showEmployer->companyZipCode}}
                    </td>
                     <td>
                         <a href='{{url("/updateEmployerList/{$showEmployer->id}")}}' style="color:black;">Update</a>
                    </td>
                     <td>
                        <a onclick="return confirm('Are you sure want to delete Employer?')" href='{{url("/deleteEmployerList/{$showEmployer->id}")}}' style="color:black">Delete</a>
                    </td>
                   
                 </tr>
                  @endforeach
                    @endif
             </table>
             <input type="submit" name="submit" value="Add New Employer">
            
         </form>
     </body>
 </html>