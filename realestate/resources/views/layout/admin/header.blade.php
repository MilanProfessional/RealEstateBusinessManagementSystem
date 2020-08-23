
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
  <div class="row">
  <div class="col-md-1">
     <img  src="../../../../images/logo.jpg" alt="logo" style="height:50px; float:left" />
     </div>
     <div class="col-md-11">
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a> Admin Panel</a></li>
          <li class="dropdown">
                                <a href="{{ route('logout') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                     <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a style="color:black !important;" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                                                    <li><a href="{{ route('manual.adminhelp') }}">Help</a> </li>

      </ul>
    </div>
 </div>
 </div>
 </div>
</nav> 
 
