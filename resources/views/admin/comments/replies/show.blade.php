@extends('layouts.admin')




@section('content')

  
     
     
@if(count($replies) > 0)

    <h1>Replies</h1>
     
      <table class="table table-striped  table-bordered table-hover ">
    <thead>
      <tr>
        <th>Id</th>
        <th>Author</th>
        <th>Email</th>
        <th>Body</th>
        <th>Post</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Moderate</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      
         @foreach($replies as $reply)
        
       <tr>
        <td>{{$reply->id}}</td>
        <td>{{$reply->author}}</td>
        <td>{{$reply->email}}</td>
        <td>{{str_limit($reply->body, 40)}}</td>
        <td><a href="{{route('home.post', $reply->comment->post->id)}}">View Comment</a></td>
        <td>{{$reply->created_at->diffForHumans()}}</td>
        <td>{{$reply->updated_at->diffForHumans()}}</td>
        
        <td>
            
            @if($reply->is_active == 1)
            
                  {!! Form::open(['method'=>'PATCH', 'action'=>['CommentRepliesController@update', $reply->id]]) !!}
                  
                     <input type="hidden" name="is_active" value="0">
                  
                       
                      <div class="form-group">
                          
                          {!! Form::submit('Un-Approve', ['class'=>'btn btn-info']) !!}
                          
                      </div>
                       
                  
                       {!!Form::close()!!}
                  
                  
                  @else
                  
                   {!! Form::open(['method'=>'PATCH', 'action'=>['CommentRepliesController@update', $reply->id]]) !!}
                  
                     <input type="hidden" name="is_active" value="1">
                  
                       
                      <div class="form-group">
                          
                          {!! Form::submit('Approve', ['class'=>'btn btn-success']) !!}
                          
                      </div>
                       
                  
                     {!!Form::close()!!}
              
            @endif
            
            
     </td>
        
        <td>
            
            {!! Form::open(['method'=>'DELETE', 'action'=>['CommentRepliesController@destroy', $reply->id]]) !!}
                  
       
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
       
         <h1 class="text-center">No Replies</h1>
       
    
   
    @endif 
     
  


@endsection