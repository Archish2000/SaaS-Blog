<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

@yield('css')

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

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

                        <a class="dropdown-item pt-2" href="{{ route('users.edit-profile') }}">
                                         My Profile
                                    </a>

                                    
                                    <a class="dropdown-item pt-2" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                     
                                        
                                <a id="navbarDropdown" class="nav-link dropdown-toggle pt-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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

        <main class="py-4">
        


        
        @auth 
        <div class="container">

        @if(session()->has('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}
        </div>
        @endif   

        @if(session()->has('error'))
        <div class="alert alert-danger">
        {{ session()->get('error') }}
        </div>
        @endif


        <div class="row">
        <div class="col-md-4">
        <ul class="list-group">
        
        @if(auth()->user()->isAdmin())
        
         <li class="list-group-item">
         <a href="{{ route('users.index') }}">
         Users
         </a>
         </li>
        @endif

        <li class="list-group-item">
        <a href="{{ route('posts.index') }}">Posts</a>
        </li>
        <li class="list-group-item">
        <a href="{{ route('categories.index') }}">Categories</a>
        </li>
        <li class="list-group-item">
        <a href="{{ route('tags.index') }}">Tags</a>
        </li>
        <li class="list-group-item">
        <a href="">About</a>
        </li>

        <ul class="list-group">
        <li class="list-group-item mt-5" >
        <a href="{{ route('trashed-posts.index') }}">Thrashed Posts</a>
        </li>
        </ul>

        </ul>
        </div>
        <div class="col-md-8">
          @yield('content')
        </div>
        </div>
           </div>

        @else
          @yield('content')

        @endauth
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script src="{{ asset('js/app.js') }}"></script>


@yield('scripts')
</body>
</html>
