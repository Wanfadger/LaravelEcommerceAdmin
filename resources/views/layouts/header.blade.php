

<nav>
    <div class="nav-wrapper">
        <a class="brand-logo" href="{{ route('dashboard.dashboard') }}">
            Ecommerce
        </a>
      
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav right">
                <!-- Authentication Links -->
                @guest
                    <li>
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else

                    <li>
                         <!-- data-tooltip defines the tooltip text -->
                       <a class=" tooltipped" data-position="bottom" data-tooltip="notification(s)">
                        <span  class="new badge">4</span>
                       </a>
                    </li>

                    <li>
                                  <!-- Dropdown Trigger -->
                      <a class='dropdown-trigger btn' href='#' data-target='dropdown-trigger'>
                            {{ Auth::user()->name }}
                      </a>
                    </li>

                     
                    <ul id="dropdown-trigger" class="dropdown-content">
                       <li>
                        <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                       </li>
                    </ul>

                @endguest
            </ul>
        
    </div>
</nav>

