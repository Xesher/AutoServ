<!-- Right Side Of Navbar -->
<ul class="navbar-nav  d-flex flex-row mr-5 ml-5 header__login">
    <!-- Authentication Links -->
    @guest
        <li class="nav-item mr-2 ml-2">
            <a class="nav-link header__login--log" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item mr-2 ml-2">
            <a class="nav-link header__login--reg" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle header__login--auth" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>