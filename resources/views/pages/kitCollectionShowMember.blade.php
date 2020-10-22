@extends('layouts.app')

{{--|page shown when the members ID is searched for--}}
@section('content')

  <div class="jumbotron messageBox messageBoxResize" style="padding-top:1rem;">
        
    <p>
      <a href="/kitMemberSearch" title="Placeholder link title" class="text-decoration-none">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
            </svg>
        Back</a>
    </p>

    @if (Empty($member)) <!--|Message alert if the ID is not found in the Database|-->
    <p class="alert alert-danger text-center">ID Not Found! Please Check the ID, or check <a href="kitCollection">Here</a>.</p>
    @else
      {{--|member name and id|--}}
    <p class="d-inline"><u><strong>{{$member['name']}} </strong></u></p>
    <p class="d-inline float-right"><u><strong> ID-{{$member['id']}}</strong></u></p>

      
    @if ($member['top'] == 1 && $member['shorts'] == 1 && $member['socks'] == 1  )
      {{--|Show Kit Collected if all kit has been collected|--}}
      <div class="alert alert-danger" style="text-align: center; margin-top:1rem;"><p>Kit Collection Has been completed. <br> All kit has been collected by {{$member['name']}}. </p>
            <p>Top issued by {{$member['topIssuedBy']}} <br> on {{date("d-m-Y", strtotime($member['topCollectDate']))}}</p>
            <p>Shorts issued by {{$member['shortsIssuedBy']}} <br> on {{date("d-m-Y", strtotime($member['shortCollectDate']))}}</p>
            <p>Socks issued by {{$member['socksIssuedBy']}} <br> on {{date("d-m-Y", strtotime($member['sockCollectDate']))}}</p>
      </div>
        
    @else
      {{--|Table to show the stash status|--}}
    <table id="myTable" class="table table-borderless tableText tableResize" style=" table-layout: fixed; width: 100%; ">
    
      <form action="kitCollection/{{$member['id']}}" method="POST">
        {{--form to submit kit collection if true--}}
        @method('PATCH')
        <input type="hidden" value="{{$member['id']}}">
         @csrf
         <tr>
           <th>
               Top
           </th>
          </tr>
        @if ($member['top'] != 1)
        {{--show this if top have not been collected--}}
          <tr style="padding-left: 3rem; text-align:center">
           <td >  
            <label>Size:</label>
            <select name="topSize" class="btn btn-sm btn-light ">
              <option name="{{$member['topSize']}}">{{$member['topSize']}}</option> <!--|load in the size stored in the database|-->
              <option name="S">S</option>
              <option name="M">M</option>
              <option name="L">L</option>
              <option name="XL">XL</option>
              <option name="XXL">XXL</option>
              <option name="XXXL">XXXL</option>
            </select>
          </td>

          <td>   
              <input type="checkbox" name="checkBoxTop" class="largerCheckbox" style="justify-content:center;"> <p> Collected </p>
          </td>
        </tr>

        @else
           {{--if top has been collected show that is has and the name issued by--}}
        <td class="alert alert-danger"> Top issued by {{$member['topIssuedBy']}} on {{date("d-m-Y", strtotime($member['topCollectDate']))}}</td>
             
        @endif

          <tr>
            <th>
                Shorts
            </th>
          </tr>
        @if ($member['shorts'] != 1)
        {{--show this if shorts have not been collected--}}
            <tr style="padding-left: 3rem; text-align:center">
            <td>  
             <label>Size:</label>
             <select name="shortSize" class="btn btn-sm btn-light ">
             <option name="{{$member['shortSize']}}">{{$member['shortSize']}}</option><!--|load in the size stored in the database|-->
               <option >30</option>
               <option >32</option>
               <option >34</option></option>
               <option >36</option>
               <option >38</option>
               <option >40</option>
             </select>
           </td>
           <td>   
               <input type="checkbox" name="checkBoxShorts" class="largerCheckbox" style="justify-content:center;"> <p> Collected </p>
           </td>
         </tr>
            @else
            {{--if shorts has been collected show that is has and the name issued by--}}
         <td class="alert alert-danger">Shorts issued by {{$member['shortsIssuedBy']}} on {{date("d-m-Y", strtotime($member['shortCollectDate']))}}</td>
              
            @endif


           <tr>
            <th>
                Socks
            </th>
         </tr>
            @if ($member['socks'] != 1)
             {{--show this if socks have not been collected--}}
            <tr style="padding-left: 3rem; text-align:center">
            <td >  
          
           </td>
           <td>   
               <input type="checkbox" name="checkBoxSocks" class="largerCheckbox" style="justify-content:center;"> <p> Collected </p>
           </td>
         </tr>
            @else
              {{--if top has been collected show that is has and the name issued by--}}
         <td class="alert alert-danger">Socks issued by {{$member['socksIssuedBy']}} on {{date("d-m-Y", strtotime($member['sockCollectDate']))}}</td>
              
            @endif
     

    </table>
    <div class="d-flex align-items-end flex-column">
    <button class="btn btn-secondary p-2">Submit</button>
</div>
</form>
            @endif
          @endif


@endsection