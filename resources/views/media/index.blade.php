@extends('layouts.admin')




@section('content')


    <h1>Media</h1>
    
    
     <table class="table table-striped  table-bordered table-hover ">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created</th>
        <th>Updated</th>
         
      </tr>
    </thead>
    <tbody>
      
       @if($photos)
       
          @foreach($photos as $photo)
        
       <tr>
        <td>{{$photo->id}}</td>
        <td>{{$photo->file}}</td>
        <td>{{$photo->created_at ? $photo->created_at->diffForHumans() : "No date"}}</td>
        <td>{{$photo->updated_at ? $photo->updated_at->diffForHumans() : "No date"}}</td>
         
        
       @endforeach
       
    @endif   
    </tbody>
  </table> 
  
  

@endsection