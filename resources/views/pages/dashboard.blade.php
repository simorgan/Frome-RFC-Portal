@extends('layouts.app')


@section('content')


{{--Message box to display any changes that have been made, 
and to show any notice or personal messages that have been 
sent throught the portal--}}
<div class="alert alert-success messageBox" role="alert">
  <h4>Welcome  {{ Auth::user()->name }}</h4> 
    <h5 class="alert-heading"><u>Notices</u></h5>
  {{--if statment needed here to check for unread messages--}}
    <p>You have no notices</p>
 
  </div>
    
@endsection