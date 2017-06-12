@extends('layouts.admin')




@section('content')

  
   <h1>Users</h1>
  
   
     <table class="table table-striped  table-bordered table-hover ">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
      
       @if($users)
       
          @foreach($users as $user)
        
       <tr>
        <td>{{$user->id}}</td>
        <td><img height="50" src="{{$user->photo ? $user->photo->file : 'No User Photo '}}" alt="No Photo"></td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        <td>
        
            @if($user->role->is_active == 1)
                
                 {{'Acive'}}
               
            @endif
            
                 {{'Not Active'}}
        
        
        
        </td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
 
      </tr>
         
          @endforeach 
      @endif
       
    </tbody>
  </table> 
    


@endsection