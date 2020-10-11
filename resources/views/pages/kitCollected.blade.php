@extends('layouts.app')


@section('content')

<div class="alert alert-success messageBox" role="alert">
  <h4>Welcome  {{ Auth::user()->name }}</h4>
    <h5 class="alert-heading"><u>Notices</u></h5>
  
    <p>You have no notices</p>

    {{$id}} <br>
    {{$top}}
    {{$shorts}}
    {{$socks}}
 
  </div>
    
@endsection

