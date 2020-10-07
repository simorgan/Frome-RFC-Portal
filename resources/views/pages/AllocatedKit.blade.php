@extends('layouts.app')


@section('content')
    <div class="jumbotron messageBox">
        @foreach ($members as $member)
    <h5>{{$member['name']}}</h5>
            
        @endforeach
       
    </div>
    {{$members->links()}}
@endsection