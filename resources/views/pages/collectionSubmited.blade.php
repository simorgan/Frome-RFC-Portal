@extends('layouts.app')


@section('content')

{{--Confirmation that the submit has been submited --}}
<div class="alert alert-success messageBox" style="text-align:center" role="alert">
    
        <strong>Kit Collection Complete</strong> 
</div>

<a class="btn btn-secondary" href="/kitMemberSearch">Search For another member</a> <!-- Searching for the next member-->
    
@endsection