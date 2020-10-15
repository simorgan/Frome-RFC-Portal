<!------------------------------------------------
  |     Bottom navbar 
------------------------------------------------->

<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light secondNav">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kit Handout</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/kitMemberSearch">Kit collections</a>
            <a class="dropdown-item" href="/kitCollection">All Seniors Allocated Kit</a>
            <a class="dropdown-item" href="#!">Add Member</a>

        
      </li>
      <li class="nav-item nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Membership</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/kitCollections">Membership</a>
            <a class="dropdown-item" href="/showSeniorMembers">Members Alocated Kit</a>
            <a class="dropdown-item" href="#!">Add Member</a>

        
      </li>
     

      <li class="nav-item nav-item dropdown ">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Membership</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/kitCollections">Membership</a>
          <a class="dropdown-item" href="/">Paid Members</a>
          <a class="dropdown-item" href="#!">Add Member</a>
      </li>
           
    </ul>
  </div>
</nav>




<!------------------------------------------------
  |     Top navbar 
------------------------------------------------->
<nav class="navbar navbar-expand navbar-dark fixed-top bg-dark">

    <a class="navbar-brand" href="/"><img class="navImgResize" style="width: 70px" src="{{ asset('/frome_logo.png') }}" alt="Frome RFC Logo"></a>
    <ul  class="nav navbar-nav text-light font-weight-bold">
      <li class="titleSize">{{$title}}</li>
  </ul>


  <!-- Right Side Of Navbar -->
  <ul class=" nav navbar-nav ml-auto ">
 
        <li class="nav-item dropdown ">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/">Dashboard</a>
              <a class="dropdown-item" href="/">Change Password</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>

</ul>
   
       




                   
      
   
  
 
  </nav>


  