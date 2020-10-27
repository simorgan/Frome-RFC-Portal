@extends('layouts.app')

@section('content')

    <div class="jumbotron messageBox messageBoxResize">
    {{--searching for a member using the ID number--}}
        <h4>Add Members Details</h4> 
        
    <form class="" method="POST" action="kitCollection">
        @csrf
  
                
            <input type="text" name="name" class="form-control mb-2 mr-sm-2" placeholder="Name" autocomplete="off" required>
            <input type="text" name="email" class="form-control mb-2 mr-sm-2" placeholder="Email" autocomplete="off" required>
           
            <label for="">Top Size</label>
            <select name="topSize" id="" required>
                <option value=""></option>
                <option value="N/A">N/A</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="2XL">2XL</option>
                <option value="3XL">3XL</option></option>
            </select>
         
            <label for="">Shorts Size</label>
            <select name="shortSize" id="" required>
                <option value=""></option>
                <option value="N/A">N/A</option>
                <option value="30">30</option>
                <option value="32">32</option>
                <option value="34">34</option>
                <option value="35">36</option>
                <option value="38">38</option>
                <option value="40">40</option></option>
            </select>
         <br>
             <button class="btn btn-primary mb-2">Add Member</button>
          </form>

        
@endsection