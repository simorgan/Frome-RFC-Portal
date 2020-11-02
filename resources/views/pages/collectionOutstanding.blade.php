@extends('layouts.app')


@section('content')


  <div class="jumbotron messageBox messageBoxResize" style="padding-top:1rem;">
  <p>Total Orders Placed: {{$memberCountDone}}</p>
  <p>Total Orders Completed: {{$memberCountDone - $memberCount}}</p>
  <p>Total Orders Outstanding: {{$memberCount}}</p>
   <hr>
    
   <h4 style="text-align:center;" class='alert alert-primary'><u>Orders not Colleted</u></h4>
    @foreach($members as $member)
    @if($member['top'] == 0 || $member['shorts'] == 0 || $member['socks']== 0)


        {{--|member name and id|--}}
        <p><u><strong>{{$member['name']}} </strong></u></p>
        <p> ID: {{$member['id']}}</p>        

    {{--|Table to show the stash and voucher status|--}}
    <table id="myTable" class="table table-borderless tableText tableResize" style="text-align:center; table-layout: fixed; width: 100%; ">

        <tr>
            <th class="colResize" >Top</th> {{--|table head for the tick or cross if voucher sent|--}}

            
                <th>Shorts</th>{{--|if voucher has been sent |--}}
                                       
                <th>Socks</th>{{--|if voucher has not been sent|--}}
     
        </tr>
        <tr style="border-bottom: 2px solid lightgray;">
            <td class="colResize" style="text-align:center;">

            {{--|check if voucher has been sent|--}}
            @if ($member['top'] == '1')
                <i class='far fa-check-circle' style='font-size:25px; color:green'></i>{{--|show if voucher has been sent|--}}   
            @else
                <i class='far fa-times-circle' style='font-size:25px; color:red'></i>{{--|show if voucher has not been sent|--}}  
            @endif
            </td>
            <td class="colResize" style="text-align:center;">

              {{--|check if voucher has been sent|--}}
              @if ($member['shorts'] == '1')
                  <i class='far fa-check-circle' style='font-size:25px; color:green'></i>{{--|show if voucher has been sent|--}}   
              @else
                  <i class='far fa-times-circle' style='font-size:25px; color:red'></i>{{--|show if voucher has not been sent|--}}  
              @endif
              </td>
              <td class="colResize" style="text-align:center;">

                {{--|check if voucher has been sent|--}}
                @if ($member['socks'] == '1')
                    <i class='far fa-check-circle' style='font-size:25px; color:green'></i>{{--|show if voucher has been sent|--}}   
                @else
                    <i class='far fa-times-circle' style='font-size:25px; color:red'></i>{{--|show if voucher has not been sent|--}}  
                @endif
                </td>
        </tr>  


 

    </table>
    
    
    
    @endif
    @endforeach
  


          
        
          

  </div>
  
@endsection
