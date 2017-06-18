@extends('layouts.admin')




@section('content')


     <h1>Categories</h1>
     
     <div class="col-md-4">
         {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store'])!!}
                   
               <div class="form-group"> 
                   
                   {!! Form::label('name', 'Name:')!!}
                   {!! Form::text('name', null, ['class'=> 'form-control'])!!}
                   
                </div>
                  
                   
                  <div class="form-group">
                   
                   {!! Form::submit('Create Categories',['class'=> 'btn btn-primary'])!!}
                   
                </div>
                  
                   {!! Form::close()!!}
                   
              
     </div>
     
     <div class="col-md-8">
         
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
      
       @if($categories)
       
          @foreach($categories as $category)
        
       <tr>
        <td>{{$category->id}}</td>
        <td><a href="{{route('categories.edit', $category->id)}}">{{$category->name}}</a></td>
        <td>{{$category->created_at ? $category->created_at->diffForHumans() : "No date"}}</td>
        <td>{{$category->updated_at ? $category->updated_at->diffForHumans() : "No date"}}</td>
         
        
       @endforeach
       
    @endif   
    </tbody>
  </table> 
         
         
     </div>
   

@endsection