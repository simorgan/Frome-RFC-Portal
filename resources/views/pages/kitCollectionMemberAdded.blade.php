@extends('layouts.app')

@section('content')


{{--Confirmation that the submit has been submited --}}
<div class="alert alert-success messageBox messageBoxResize" style="text-align:center" role="alert">
    
        <strong>{{$memberAdd['name']}} Added</strong> <br>
      
        <a class="btn btn-secondary" href="/kitMemberSearch">Search For Members</a> <!-- Searching for the next member-->


</div>
    
@endsection