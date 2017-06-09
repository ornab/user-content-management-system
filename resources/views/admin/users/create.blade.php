@extends('layouts.admin')




@section('content')

   <div class="container">
       
       <div class="row">
           <div class="col-md-4">
               
                
                    <h1 class="alert alert-success"  style="text-align:center; color:#123456" >Create Users</h1>
             
               
               <div class="form-group">
                   
                   {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store'])!!}
                   
                   
                   
                   {!! Form::label('name', 'Name:')!!}
                   {!! Form::text('name', null, ['class'=> 'form-control'])!!}
                   
                </div>
                  
                  <div class="form-group">
                   
                   {!! Form::submit('Create User',['class'=> 'btn btn-primary'])!!}
                   
                </div>
                  
                   {!! Form::close()!!}
                   
               </div>
               
               
           </div>
       </div>
       
   </div>


@endsection