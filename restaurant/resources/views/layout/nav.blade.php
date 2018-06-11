    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      {{-- {{if(page(dishes)? ftfo : )}} --}}
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Taste</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#section-offer" class="nav-link">Offer</a></li>
            <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="{{route('all.dishes')}}" class="nav-link">Dishes</a></li>
            <li class="nav-item"><a href="#section-news" class="nav-link">News</a></li>
            <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
  
            @auth
              <li class="nav-item">
                  <a href="{{route('showNew.cart')}}" class="nav-link">
                    <i class="fas fa-shopping-cart"></i>
                      <span class="ml-1">Cart</span>
                      <span><b id="totalQty">{{$totalItems}}</b></span>
                  </a>
              </li>
            @endauth

            @if (Route::has('login'))

                   @auth
                       {{-- <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link">Home</a></li> --}}
                       <li class="nav-item dropdown">
                           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{ Auth::user()->name }} <span class="caret"></span>
                           </a>

                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             @if (Auth::user()->isAdmin())
                               <a href="{{route('admin.panel')}}" class="dropdown-item">Admin panel</a>
                             @else
                             <a href="{{route('user.profile')}}" class="dropdown-item">Profile</a>
                           @endif

                               <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                   {{ __('Logout') }}
                               </a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   @csrf
                               </form>

                           </div>
                       </li>
                   @else
                      {{-- <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li> --}}
                      <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#login">{{ __('Login') }}</a></li>

                       <li class="nav-item"><a href="{{ route('register') }}" class="nav-link" data-toggle="modal" data-target="#exampleModal">Register</a></li>
                   @endauth

           @endif
          </ul>
        </div>
      </div>
    </nav>
    @include('modals.login')

    @include('auth.register')
    <!-- END nav -->
