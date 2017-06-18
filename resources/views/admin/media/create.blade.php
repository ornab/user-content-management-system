@extends('layouts.admin')


@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.0/min/dropzone.min.css">

@endsection



@section('content')


    <h1>Create Media</h1>
    
    
    
     <div class="container">
       <div class="row">
           <div class="col-md-8">
               
                 
             
                   {!! Form::open(['method'=>'POST', 'action'=>'AdminMediaController@store', 'class'=>'dropzone'])!!}
                   
              
                  
                   {!! Form::close()!!}
                   
                   
                   
                 
                   
                  
                
                </div>
               
               
            </div>
       </div>
    
    
  
  
  

@endsection




@section('scripts')
   
   
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.0/min/dropzone.min.js"></script>
   
   
   
   

@endsection



