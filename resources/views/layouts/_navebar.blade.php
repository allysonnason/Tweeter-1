<div id="app">
    <nav class="navbar navbar-expand-md navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                Tweeter
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="p-2">       <a href="{{url('/tweets')}}"><span style="font-size: 1em; color: "><i class="fab fa-twitter icon-5x">News feed</i></span></a> </li>
                    <li>  </li>

                    @auth
                    <li class="p-2">    <a href="/users/{{ Auth::user()->id }}"><span style="font-size: 1em; color: "><i class="fas fa-user-circle">Profile </i></span></a> </li>
                    @endauth
                    <li>  </li>
                    <li class="p-2"> <a href="/users/"><span style="font-size: 1em; color: "><i class="fas fa-user-friends">People To Follow</i> </span></a></li>



                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span style="font-size:  color:green; ">    <i class="fab fa-signal-1"></span>   {{ Auth::user()->name }}    </i>         <img src="/storage/profile_image/{{Auth::user()->profile->profileimage}}" width="40px;"  class="rounded-circle" alt="">
<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                <span style="font-size: 1em; color:black; ">    {{ __('Logout') }} </span>
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
    </nav>
