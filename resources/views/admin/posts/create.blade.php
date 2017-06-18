@extends('layouts.admin')




@section('content')



    
     
     
     
     <div class="container">
       <div class="row">
           <div class="col-md-4">
               
                <h1 class="alert alert-success"  style="text-align:center; color:#123456" >Create Post</h1>
             
                   {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true])!!}
                   
               <div class="form-group"> 
                   
                   {!! Form::label('title', 'Title:')!!}
                   {!! Form::text('title', null, ['class'=> 'form-control'])!!}
                   
                </div>
                  
                 <div class="form-group"> 
                   
                   {!! Form::label('category_id', 'Category:')!!}
                   {!! Form::select('category_id',[''=>'Choose Categories'] + $categories, null, ['class'=> 'form-control'])!!}
                   
                </div>
                
                <div class="form-group"> 
                   
                   {!! Form::label('photo_id', 'Photo:')!!}
                   {!! Form::file('photo_id')!!}
                   
                </div>
                
                <div class="form-group"> 
                   
                   {!! Form::label('body', 'Description:')!!}
                   {!! Form::textarea('body', null, ['class'=> 'form-control'])!!}
                   
                </div>
                
                
                   
                  <div class="form-group">
                   
                   {!! Form::submit('Create Post',['class'=> 'btn btn-primary'])!!}
                   
                </div>
                  
                   {!! Form::close()!!}
                   
                   
                   
                @include('includes.form_error')
                   
                  
                
                </div>
               
               
            </div>
       </div>
       
   </div>



@endsection