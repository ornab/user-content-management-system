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
        <th>Post</th>
        <th>Replies</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Moderate</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      
         @foreach($comments as $comment)
        
       <tr>
        <td>{{$comment->id}}</td>
        <td>{{$comment->author}}</td>
        <td>{{$comment->email}}</td>
        <td>{{str_limit($comment->body, 40)}}</td>
        <td><a href="{{route('home.post', $comment->post->id)}}">View Post</a></td>
        <td><a href="{{route('replies.show', $comment->id)}}">View Replies</a></td>
        <td>{{$comment->created_at->diffForHumans()}}</td>
        <td>{{$comment->updated_at->diffForHumans()}}</td>
        
        <td>
            
            @if($comment->is_active == 1)
            
                  {!! Form::open(['method'=>'PATCH', 'action'=>['PostCommentsController@update', $comment->id]]) !!}
                  
                     <input type="hidden" name="is_active" value="0">
                  
                       
                      <div class="form-group">
                          
                          {!! Form::submit('Un-Approve', ['class'=>'btn btn-info']) !!}
                          
                      </div>
                       
                  
               
                  
                  
                  @else
                  
                   {!! Form::open(['method'=>'PATCH', 'action'=>['PostCommentsController@update', $comment->id]]) !!}
                  
                     <input type="hidden" name="is_active" value="1">
                  
                       
                      <div class="form-group">
                          
                          {!! Form::submit('Approve', ['class'=>'btn btn-success']) !!}
                          
                      </div>
                       
                  
                     {!!Form::close()!!}
              
            
            
            @endif
            
            
            
            
            
        </td>
        
        <td>
            
            {!! Form::open(['method'=>'DELETE', 'action'=>['PostCommentsController@destroy', $comment->id]]) !!}
                  
       
                  
                       
                      <div class="form-group">
                          
                          {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                          
                      </div>
            
            {!!Form::close()!!}
            
            
        </td>
        
        </tr>
        
       @endforeach
        
       
    </tbody>
  </table> 
       
       
        
    @else
       
         <h1 class="text-center">No Comments</h1>
       
    
   
    @endif 
     
  


@endsection