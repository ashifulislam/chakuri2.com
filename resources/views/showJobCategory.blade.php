
   @include('layout/header')

    <!DOCTYPE html>
    <html>
        <head>
             <link rel="stylesheet" href="{{url('css/jobCategory.css')}}">

        </head>
        <body>
           @include('layout/sidebar')
            <table >
              <tr colspan="2"><h2>Show Job Category</h2>
                  
              </tr>
               <tr>
                   
                    <th>
                  
                    job Category Name
                </th>
               
                    <th>
                  
                    job Category Type
                </th>
               </tr>
               <tr>
                    @if(count($jobCategory)>0)
                        @foreach($jobCategory->all() as $jobCategory)
                   <td>
                    
                        {{$jobCategory->jobCategoryName}}
                       
                       
                   </td>
                   <td>
                      {{$jobCategory->jobCategoryType}}
                   </td>
               </tr>
                 @endforeach
                     @endif
                
            </table>
        </body>
    </html>
    
