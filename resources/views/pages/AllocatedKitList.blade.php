@extends('layouts.app')


@section('content')
<div class="jumbotron messageBox messageBoxResize">
@foreach ($members as $member) {{--|  Looping through the called members   |--}}

        {{--|member name and id|--}}
        <p><u><strong>{{$member['name']}} </strong></u></p>
        <p> ID: {{$member['id']}}</p>

            {{--|Show Kit Collected if all kit has been collected|--}}
            @if ($member['top'] == 1 && $member['shorts'] == 1 && $member['socks'] == 1  )
                <p class="text-danger" style="text-align: center;"><strong>Kit Collected!</strong></p>
            @endif

    {{--|Table to show the stash and voucher status|--}}
    <table id="myTable" class="table table-borderless tableText tableResize" style="text-align:center; table-layout: fixed; width: 100%; ">

        <tr>
            <th class="colResize" >Voucher Sent</th> {{--|table head for the tick or cross if voucher sent|--}}

            @if ($member['stashEmail'] == '1')
                <th>Voucher Sent To</th>{{--|if voucher has been sent |--}}
            @else                               
                <th>Voucher To Be Sent To</th>{{--|if voucher has not been sent|--}}
            @endif
        </tr>
        <tr>
            <td class="colResize" style="text-align:center;">

            {{--|check if voucher has been sent|--}}
            @if ($member['stashEmail'] == '1')
                <i class='far fa-check-circle' style='font-size:25px; color:green'></i>{{--|show if voucher has been sent|--}}   
            @else
                <i class='far fa-times-circle' style='font-size:25px; color:red'></i>{{--|show if voucher has not been sent|--}}  
            
            @endif
            </td>
            <td>
                {{$member['email']}}{{--|show the members email|--}}
            </td>
        </tr>  


        <tr style="border-bottom: 2px solid lightgray;">
            @if ($member['stashEmail'] == 1){{--|form to resent the voucher email|--}}
                <td colspan="2"> 
                    <form action="" method="">
                    <input type="hidden" value="{{$member['id']}}">
                    <input type="submit" class="btn btn-primary btn-block" value="Resend Voucher"> 
                    </form>  
                </td>

            @else{{--|form to send or resend the voucher email, and update the DB[stashEmail]|--}}
                <td colspan="2"> 
                    <form action=""> 
                    <input type="hidden" value="1">
                    <input type="submit" class="btn btn-primary btn-block" value="Email Voucher"> 
                    </form>  
                </td>
             @endif
        </tr>

    </table>

@endforeach
</div>

<div style="text-align: center"> {{$members->links()}}</div> 
@endsection
