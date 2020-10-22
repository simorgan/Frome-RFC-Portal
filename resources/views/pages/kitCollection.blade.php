@extends('layouts.app')


@section('content')

    <div class="jumbotron messageBox messageBoxResize">
    {{--searching for a member using the ID number--}}
        <h3>Member Search</h3> 
        
    <form class="form-inline" method="GET" action="kitCollectionShowMember">
  
                
            <input type="text" name="id" class="form-control mb-2 mr-sm-2" placeholder="Enter ID" autocomplete="off">
             <button class="btn btn-primary mb-2">Search</button>
          </form>

        
@endsection