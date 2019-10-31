<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name') }}</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap/dashboard.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Scripts -->
  <script src="{{ asset('js/vendors/AC_RunActiveContent.js') }}"></script>
</head>

<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm fixed-top">
    <i class="material-icons">account_balance_wallet</i>
    <!-- <h5 class="my-0 mr-md-auto font-weight-normal">{{ config('app.name') }}</h5> -->
    <h5 class="my-0 mr-md-auto font-weight-normal">MyPilotStore.com</h5>

    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="#">Settings</a>
      <a class="p-2 text-dark" href="#">Support</a>
    </nav>

    <div>
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
      </a>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">
            My Account
        </a>

        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
            @csrf
        </form>
      </div>
    </div>
  </div>


  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky" style="padding-top:35px;">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('dashboard', [])}}">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('comps.index', [])}}">
                <span data-feather="book-open"></span>
                Compositions
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('atracks', [])}}">
                <span data-feather="headphones"></span>
                AudioTracks
              </a>
            </li>
            <li hidden class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Customers
              </a>
            </li>
            <li hidden class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Reports
              </a>
            </li>
            <li hidden class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Integrations
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span hidden>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span hidden data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul hidden class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Current month
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"  style="padding-top:70px;">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">@yield('header')</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div>
              @yield('header_buttons')
            </div>

            <div hidden>
              <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
        </div>

        @yield('content')
      </main>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
  <script src="{{ asset('js/react/App.js') }}"></script>
  <script src="{{ asset('js/bootstrap/dashboard.js') }}"></script>

  @yield('addtl_scripts')
</body>
</html>
