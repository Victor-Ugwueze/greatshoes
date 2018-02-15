<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                 <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('/storage/logo/great-shoes.svg')}}" />
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav menu-left">
                        <li><a class="nav-link" href="">men</a></li>
                        <li><a class="nav-link" href="">women</a></li>
                        <li><a class="nav-link" href="">our story</a></li>
                        <li><a class="nav-link" href="">visit us</a></li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav menu-right ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="">refer a friend</a></li>
                            <li><a class="nav-link" href="">more</a></li>
                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            <span  style="margin-left: 0; margin-right: 5%;"><i class="fas fa-shopping-bag"></i>{{0}}</span>
        </nav>