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
        <th>Delete</th>
         
      </tr>
    </thead>
    <tbody>
      
       @if($photos)
       
          @foreach($photos as $photo)
        
       <tr>
        <td>{{$photo->id}}</td>
 
        
        <td><img height="50" src="{{$photo->file ? $photo->file : 'http://www.placehold.it/400x400'}}" alt=""> </td>
        
        
        <td>{{$photo->created_at ? $photo->created_at->diffForHumans() : "No date"}}</td>
        <td>{{$photo->updated_at ? $photo->updated_at->diffForHumans() : "No date"}}</td>
        
        <td>
            
            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediaController@destroy', $photo->id]])!!}
                   
                   <div class="form-group">
                   
                   {!! Form::submit('Delete',['class'=> 'btn btn-danger'])!!}
                   
                </div>
                   
                   {!! Form::close()!!}
                   
            
            
            
            
        </td>
        
         
        
       @endforeach
       
    @endif   
    </tbody>
  </table> 
  
  

@endsection