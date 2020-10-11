@extends('layouts.app')


@section('content')

    <div class="jumbotron messageBox messageBoxResize">
        
        <form class="form-inline" method="POST" action="kitCollectionId" enctype='multipart/form-data'>
            @csrf 
           
            <input type="text" name="id" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Enter ID">
            <input type="submit" class="btn btn-primary mb-2" value="Search">
          </form>

          @if (Empty($member))
          <p class="alert alert-danger text-center">ID Not Found! Please Check the ID, or check the kit allocated list.</p>
          @else
           {{--|member name and id|--}}
        <p><u><strong>{{$member['name']}} </strong></u></p>
        <p> ID: {{$member['id']}}</p>

            {{--|Show Kit Collected if all kit has been collected|--}}
            @if ($member['top'] == 1 && $member['shorts'] == 1 && $member['socks'] == 1  )
                <p class="text-danger" style="text-align: center;"><strong>Kit Collected!</strong></p>
            @endif

    {{--|Table to show the stash and voucher status|--}}
    <table id="myTable" class="table table-borderless tableText tableResize" style="text-align:center; table-layout: fixed; width: 100%; ">
<form action="kitCollectionSubmit" method="POST">
<input type="hidden" value="{{$member['id']}}" name="id">
    @csrf
       <tr>
           <td>
               <input type="checkbox" name="checkBoxTop">
           </td>
       </tr>
       <tr>
           <td>
               <input type="checkbox" name="checkBoxShorts">
           </td>
       </tr>
       <tr>
           <td>
               <input type="checkbox" name="checkBoxSocks">
           </td>
       </tr>

    </table>
    <button class="btn btn-light">Submit</button>
</form>
          @endif


@endsection