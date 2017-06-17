@extends('layouts.admin')


@section('content')

   <div class="container">
       <div class="row">
         
          <h1 class="alert alert-success"  style="text-align:center; color:#123456; width:75%"  >Edit Users</h1>
          
            <div class="col-sm-4">
                
                
                <img src="{{$user->photo ? $user->photo->file : 'http://www.placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
                
                
            </div>
          
           
           <div class="col-sm-6">
               
               
             
                   {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true])!!}
                   
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
                   
                   {!! Form::label('role', 'Role:')!!}
                   {!! Form::select('role_id', $roles, null, ['class'=> 'form-control'])!!}
                   
                </div>
                  
                <div class="form-group"> 
                   
                   {!! Form::label('is_active', 'Status:')!!}
                   {!! Form::select('is_active',array(1 => 'Active', 0 => 'Not Active'), null, ['class'=> 'form-control'])!!}
                   
                </div>
                 
                <div class="form-group"> 
                   
                   {!! Form::label('photo_id', 'Upload:')!!}
                   {!! Form::file('photo_id')!!}
                   
                </div>
                   
                  <div class="form-group">
                   
                   {!! Form::submit('Update User',['class'=> 'btn btn-primary col-md-3'])!!}
                   
                </div>
                  
                   {!! Form::close()!!}
                   
                   
                   {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]])!!}
                   
                   
                    <div class="form-group pull-right">
                   
                      {!! Form::submit('Delete User',['class'=> 'btn btn-danger col-md-12'])!!}
                   
                    </div>
                   
                   
                   
                   
                @include('includes.form_error')
                   
                  
                
                </div>
               
               
            </div>
       </div>
       
   </div>


@endsection