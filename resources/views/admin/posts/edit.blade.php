@extends('layouts.admin')




@section('content')



    
     
     
     
     <div class="container">
       <div class="row">
         
               
                <h1  class="alert alert-success" style="text-align:center; color:#123456; width:65%">Edit Post</h1>
                
              
                
                <div class="col-md-4">
                
                
                <img src="{{$post->photo ? $post->photo->file : 'http://www.placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
                
                
            </div>
            
            
            <div class="col-md-4">
             
                   {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true])!!}
                   
               <div class="form-group"> 
                   
                   {!! Form::label('title', 'Title:')!!}
                   {!! Form::text('title', null, ['class'=> 'form-control'])!!}
                   
                </div>
                  
                 <div class="form-group"> 
                   
                   {!! Form::label('category_id', 'Category:')!!}
                   {!! Form::select('category_id', $categories, null, ['class'=> 'form-control'])!!}
                   
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
                   
                   {!! Form::submit('Update Post',['class'=> 'btn btn-primary col-md-4'])!!}
                   
                </div>
                  
                   {!! Form::close()!!}
                   
                   
                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]])!!}
                   
                   
                    <div class="form-group pull-right">
                   
                      {!! Form::submit('Delete Post',['class'=> 'btn btn-danger col-md-12'])!!}
                   
                    </div>
                   
                   
                   
                @include('includes.form_error')
                   
                  
                
                </div>
               
               
            </div>
       </div>
       
   </div>



@endsection