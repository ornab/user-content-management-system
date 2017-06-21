@extends('layouts.admin')




@section('content')

  
     
     
@if(count($comments) > 0)

    <h1>Comments</h1>
     
      <table class="table table-striped  table-bordered table-hover ">
    <thead>
      <tr>
        <th>Id</th>
        <th>Author</th>
        <th>Email</th>
        <th>Body</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
      
         @foreach($comments as $comment)
        
       <tr>
        <td>{{$comment->id}}</td>
        <td>{{$comment->author}}</td>
        <td>{{$comment->email}}</td>
        <td>{{str_limit($comment->body, 40)}}</td>
        <td>{{$comment->created_at->diffForHumans()}}</td>
        <td>{{$comment->updated_at->diffForHumans()}}</td>
        
       @endforeach
        
       
    </tbody>
  </table> 
       
       
        
    @else
       
         <h1 class="text-center">No Comments</h1>
       
    
   
    @endif 
     
  


@endsection