@extends('layouts.app')


@section('content')

    <div class="jumbotron messageBox messageBoxResize">
        
        <form class="form-inline" method="POST" action="kitCollectionId">
            @csrf 
           
            <input type="text" name="id" class="form-control mb-2 mr-sm-2" id="" placeholder="Enter ID">
             <button class="btn btn-primary mb-2">Search</button>
          </form>
@endsection