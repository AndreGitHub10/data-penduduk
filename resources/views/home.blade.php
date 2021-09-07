@extends('layouts.app')

@section('content')
<head>
<link rel="stylesheet" href="assets/css/sidebar.css">
</head>

<!-- <div class="container"> -->
    
    <div class="sidebar-container">
  <div class="sidebar-logo">
    Data Warga
  </div>
  <ul class="sidebar-navigation">
    
    <li>
      <a href="#">
        <i class="fa fa-home" aria-hidden="true"></i> RW
      </a>
    </li>
    <li>
      <a href="{{ route('rt') }}">
        <i class="fa fa-tachometer" aria-hidden="true"></i> RT
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-tachometer" aria-hidden="true"></i> Warga
      </a>
    </li>
   
    <li>
      <a href="#">
        <i class="fa fa-users" aria-hidden="true"></i> Pengaturan
      </a>
    </li>

    

        
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    
    </li>
  </ul>

</div>

<div class="content-container">

  <div class="container-fluid">
    @yield('content2')
    <!-- Main component for a primary marketing message or call to action -->
    <!-- <div class="jumbotron">
      <h1>Data Keseluruhan Warga</h1>
      <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
      <p>To see the difference between static and fixed top navbars, just scroll.</p>
      <p>
        <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
      </p>
    </div> -->

  </div>
</div>
</div>
@endsection
