
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
       <div class="logo_img">
                                <img src="../../../../images/logo.jpg" alt="logo" style="height:50px;" />
                            </div>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar" >
      <ul class="nav navbar-nav navbar-right">

      @if (Route::has('login'))
                
                    @if (Auth::check())
                       <li><a style="color:#000000 !important;" href="{{ url('/') }}" > Home  </a></li>
                    @else
               
            <li><a style="color:#000000 !important;" href="{{ url('/') }}" > Home  </a></li>   
        <li>
            <a style="color:#000000 !important;" href="{{ route('login') }}">
                                            
                                            Login
                                        </a>
        </li>

 <li>
            <a style="color:#000000 !important;" href="{{ route('register') }}">
                                            
                                            Register
                                        </a>
        </li>


                    @endif
                    @endif
        
        
        
      </ul>
    </div>
 </div>
</nav> 
 
