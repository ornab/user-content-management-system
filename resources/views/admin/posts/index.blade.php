@extends('layouts.admin')




@section('content')

 @if(Session::has('deleted_post'))
    
     <p class="alert alert-danger">{{ session('deleted_post') }}</p>
  
  @endif



     <h1>Posts</h1>
     
     
     <table class="table table-striped  table-bordered table-hover ">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>User</th>
        <th>Category</th>
        <th>Title</th>
        <th>Body</th>
        <th>Post</th>
        <th>Comment</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
      
       @if($posts)
       
          @foreach($posts as $post)
        
       <tr>
        <td>{{$post->id}}</td>
        <td> <img height="50" src="{{$post->photo ? $post->photo->file : 'http://www.placehold.it/400x400'}}" alt=""> </td>
        <td><a href="{{route('posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
        <td>{{$post->category ? $post->category->name : "Uncategorized"}}</td>
        <td>{{$post->title}}</td>
        <td>{{str_limit($post->body, 30)}}</td>
        <td><a href="{{route('home.post', $post->id)}}">View Post</a></td>
        <td><a href="{{route('comments.show', $post->id)}}">View Comments</a></td>
        <td>{{$post->created_at->diffForHumans()}}</td>
        <td>{{$post->updated_at->diffForHumans()}}</td>
        
       @endforeach
       
    @endif   
    </tbody>
  </table> 


@endsection