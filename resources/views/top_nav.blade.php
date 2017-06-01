      <!--Fixed Navigation bar started-->
<div class="navbar navbar-default navbar-inverse navbar-fixed-top">

    <div class="container">

      <a class="navbar-brand" href="#"><img src="img/Rajshahi-University-logo.jpg" width="35px" height="35px"/></a>
      <a class="navbar-brand" href="#">RU Guest House </a>

      <div class="collapse navbar-collapse" id="app-navbar-collapse">

                     <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                        </li>

                          <!--  <ul class="dropdown-menu" role="menu"> -->
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        
                    @endif
                </ul>

                </div>
    </div>

</div>

      <!--Fixed Navigation bar ended-->
