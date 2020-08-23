<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Real Estate Business Management System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>-->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/fonticons.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/fonts/stylesheet.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/plugins.css') }}" />

        
        <link rel="stylesheet" href="{{ URL::asset('assets/css/navmenu.css') }}">
        
        <!--Theme custom css -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}" />

        <script src="{{ URL::asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>

    </head>
    <body style="background-color:#669999 !important;">
       

        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <nav id="main-nav">
            <ul style="background-color:#669999 !important;">
                
                <li><a href="#about"><span>About Me</span></a></li>
                <li><a href="#features"><span>Features</span></a></li>
            @if (Route::has('login'))
                
                    @if (Auth::check())
                      <li>  <a href="{{ url('/home') }}"><span>Dashboard</span></a></li>
                       <li>
                                        <a style="color:black !important;" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                          <span>  Logout </span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                    @else
                <li><a href="{{ url('/login') }}"><span>Login</span></a></li>
                
                <li><a href="{{ url('/register') }}"><span>Register</span></a></li>
                 
                    @endif
               
            @endif
<li><a href="{{ route('manual.help') }}"><span>Help</span></a></li>

                
                
            </ul>
            <a href="#" class="cd-close-menu">Close<span></span></a>
        </nav>      
        
        
        


<figure class="main_area">

        <div id="home" class="home home-main-content">
            <div class="home-overlay-fluid">
                <div class="container">
                    <div class="row">
                        <div class="main_home_content text-center wow fadeInUp" data-wow-duration="1.5s">
                            <div class="div-menu">
                                <header class="cd-header">
                                    <a class="cd-menu-trigger" href="#main-nav"><span></span></a>
                                </header>
                            </div>
                        
                            <div class="logo_img">
                                <img src="../../../../images/logo.jpg" alt="" />
                            </div>
                            <h3>Real Estate Business Management System</h3>
                            <div class="separator"></div>
                            <p>Property Buy and Sell Inside Pokhara City</p>
                            <a href="{{ url('nonusers/viewproperty')}}" class="btn btn-lg">View Properties</a>
                        </div>
                          
                        
                        
                        
                    </div>
                </div>
            </div>
        </div><!-- End of Banner Section -->


        <section id="about" class="about" style="background-color:#669999 !important;">
            <div class="about_overlay" style="background-color:#669999 !important;">
                <div class="container chikobiko">
                     
                    <div class="row">
                            <div class="head_title text-center">
                                <h2 style="color:#0000cc;"><i class="fa fa-star"></i> About Us <i class="fa fa-star"></i></h2>
                            </div>
                        
                        <div class="main_about_content text-center wow fadeIn" data-wow-duration="2s">
                           <div class="col-md-12">
                                <div class="about_top_content">
                                    <i class="fa fa-quote-left" style="color:red;"></i>
                                    <p style="color:#FFFFFF;">Real Estate Business Management , is a office situated in Pokhara. We help you to view, add your property to make them sell.</p>
                                    <i class="fa fa-quote-right" style="color:red;"></i>
                                </div>
                                
                            
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of Features Section -->
        
        <section id="features" class="features">
            <div class="features_overlay">
                <div class="container bangbang">
                    <div class="row">
                            <div class="head_title text-center wow pulse" data-wow-duration="2s">
                                <h2><i class="fa fa-star"></i> Features <i class="fa fa-star"></i></h2>
                            </div>
                        <div class="main_features wow pulse" data-wow-duration="2s">
                            <div class="main_features_content">
                            
                                <div class="single_features">
                                    <div class="col-md-6">
                                        <div class="single_features_text">
                                            <h2><i class="fa fa-file-code-o"></i>Buy Property</h2>
                                            <p>We Real Estate Business Management , is a office situated in Pokhara. We help you to buy your property.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="single_features_text">
                                            <h2><i class="fa fa-file-code-o"></i>Sell Property</h2>
                                            <p>We Real Estate Business Management , is a office situated in Pokhara. We help you to Sell  your property..</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="single_features">
                                    <div class="col-md-6">
                                        <div class="single_features_text">
                                            <h2><i class="fa fa-file-code-o"></i>Add Property</h2>
                                            <p>We Real Estate Business Management , is a office situated in Pokhara. Add your property to sell them here</p>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="single_features_text">
                                            <h2><i class="fa fa-file-code-o"></i>View Property</h2>
                                            <p>We Real Estate Business Management , is a office situated in Pokhara. We help you to View property and to buy them</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="main_footer text-center wow fadeInUp" data-wow-duration="2s">
                        <p>Created and Designed by <i class="fa"> A Softwarican Student</i>  <a href="www.facebook.com/technicallysick">&copy; <u> Milan Babu Adhikari. </u></a> </p>
                    </div>
                </div>
            </div>
        </footer>


</figure>
       





        <!-- STRAT SCROLL TO TOP -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/isotope.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        
    </body>
</html>
