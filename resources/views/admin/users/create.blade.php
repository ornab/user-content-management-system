@extends('layouts.admin')


@section('content')

   <div class="container">
       <div class="row">
           <div class="col-md-4">
               
                <h1 class="alert alert-success"  style="text-align:center; color:#123456" >Create Users</h1>
             
                   {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true])!!}
                   
               <div class="form-group"> 
                   
                   {!! Form::label('name', 'Name:')!!}
                   {!! Form::text('name', null, ['class'=> 'form-control'])!!}
                   
                </div>
                  
                 <div class="form-group"> 
                   
                   {!! Form::label('email', 'Email:')!!}
                   {!! Form::email('email', null, ['class'=> 'form-control'])!!}
                   
                </div>
                  
                <div class="form-group"> 
                   
                   {!! Form::label('password', 'Password:')!!}
                   {!! Form::password('password',['class'=> 'form-control'])!!}
                   
                </div>
                  
                  
                <div class="form-group"> 
                   
                   {!! Form::label('file', 'Upload:')!!}
                   {!! Form::file('file' )!!}
                   
                </div>
                  
                <div class="form-group"> 
                   
                   {!! Form::label('role', 'Role:')!!}
                   {!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null, ['class'=> 'form-control'])!!}
                   
                </div>
                  
                <div class="form-group"> 
                   
                   {!! Form::label('is_active', 'Status:')!!}
                   {!! Form::select('is_active',array(1 => 'Active', 0 => 'Not Active'), 0, ['class'=> 'form-control'])!!}
                   
                </div>
                  
                  <div class="form-group">
                   
                   {!! Form::submit('Create User',['class'=> 'btn btn-primary'])!!}
                   
                </div>
                  
                   {!! Form::close()!!}
                   
                   
                   
                @include('includes.form_error')
                   
                  
                
                </div>
               
               
                 
               
               
           </div>
       </div>
       
   </div>


@endsection