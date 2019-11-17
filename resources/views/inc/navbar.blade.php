<nav class="navbar navbar-inverse navbar-fixed-top" >
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" style="color: white;">
                Mooc's Management
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav">
                @if (!(Auth::guest()))
                  <li><a href="{{route('home')}}" style="color: white;">DashBoard</a></li>
                  <li><a >About</a></li>
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}" style="color: white;">Login</a></li>
                    <li><a href="{{ route('register') }}" style="color: white;">Register</a></li>
                @else
                    <li >
                        <a href="" style="color: white;">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        
                            <li>
                                <a href="{{ route('logout') }}" onclick="return logout(event);" >
                                    Logout
                                </a>
                                <script type="text/javascript">
                                    function logout(event){
                                            event.preventDefault();
                                            var check = confirm("Do you really want to logout?");
                                            if(check){ 
                                               document.getElementById('logout-form').submit();
                                            }
                                     }
                                </script>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>