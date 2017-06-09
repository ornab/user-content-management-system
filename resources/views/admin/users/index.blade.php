@extends('layouts.admin')




@section('content')

  
   <h1>Users</h1>
  
   
     <table class="table table-striped  table-bordered table-hover ">
    <thead>
      <tr>
        <th>Id</th>
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
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        <td>
        
            @if($user->role->is_active == 1)
                
                 {{'Not Acive'}}
               
            @endif
            
                 {{'Active'}}
        
        
        
        </td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
 
      </tr>
         
          @endforeach 
      @endif
       
    </tbody>
  </table> 
    


@endsection