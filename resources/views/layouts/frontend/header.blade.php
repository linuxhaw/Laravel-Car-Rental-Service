<!--  -->

<!doctype html>
            <html lang="en">
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">

                    <title>Hackney Online Car Rental Service</title>
                    <link rel="stylesheet" href="/css/style.css">

                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <!-- Fonts -->
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                   <script src="/js/jquery.js"></script>
                   <script src="/js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

                </head>
                <body style="overflow-x:hidden;">
                <nav class="navbar navbar-expand-lg navbar-light  fixed-top" id="nav-bar">
  <a class="navbar-brand" href="#"><img src="images/hackney.png" width="75px" height="70px" alt="Hackney"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/faq">FAQs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/carlisting">Cars</a>
      </li>
      <div class="flex-center position-ref full-height" style="margin-left:690px;padding-top:6px;">
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    
                          <li class="nav-item dropdown">
                <a  class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown"   >
                         {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background: -webkit-linear-gradient(#184652,rgb(13, 42, 43));padding:20px;width:240px;">
                          <a href="/frontend/profile" >
                <i class="fa fa-user"></i> Profile
              </a><br>
              <a href="/frontend/activities" >
                <i class="fa fa-car"></i> Your activities
              </a><br>
              <a href="/frontend/change-password" >
                <i class="fa fa-cog"></i> Change Password
              </a><br>

                                <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>
                                {{ __('Logout') }}
                 </a>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                       </form>
                          </div>
                        </li>
                          
                                @else
                                    <a  href="{{ route('login') }}">Login</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif

    </ul>
  </div>
</nav>

                    
                       