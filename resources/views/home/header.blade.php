<style>
    .nav-link {
        font-size: 1rem;
        font-weight: 500;
        padding: 0.5rem 1rem !important;
        margin: 0 0.25rem;
        transition: all 0.2s ease-in-out;
    }
    .nav-link:hover {
        transform: translateY(-2px);
    }
    .navbar-nav {
        align-items: center;
    }
    .nav-item {
        margin: 0 0.25rem;
    }
</style>

<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container">
                  <a class="navbar-brand me-4" href="{{url('/redirect')}}">
                      <img src="images/v1057-logo-05.png" alt="Logo" width="150" class="d-inline-block align-text-top">
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                           <a class="nav-link d-flex align-items-center {{ request()->is('/') ? 'active' : '' }}" href="{{url('/')}}" title="الرئيسية">
                               <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-house-door me-2" viewBox="0 0 16 16">
                                   <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                               </svg>
                               <span>الرئيسية</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link position-relative d-flex align-items-center {{ request()->is('show_cart') ? 'active' : '' }}" href="{{url('show_cart')}}" title="عربة التسوق">
                               <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart3 me-2" viewBox="0 0 16 16">
                                   <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                               </svg>
                               <span>عربة التسوق</span>
                               @auth
                               @php
                                   $cartCount = auth()->user()->carts->count();
                               @endphp
                               @if($cartCount > 0)
                               <span id="cartCounter" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem; padding: 0.25em 0.4em; transform: translate(-50%, -50%) !important;">
                                   {{ $cartCount }}
                               </span>
                               @endif
                               @endauth
                           </a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href=""></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link d-flex align-items-center {{ request()->is('show_order') ? 'active' : '' }}" href="{{url('show_order')}}" title="الطلبات">
                               <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bag-check me-2" viewBox="0 0 16 16">
                                   <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                   <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                               </svg>
                               <span>الطلبات</span>
                           </a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href=""></a>
                        </li>
                        @if(Auth::user()==null)
                        <li class="nav-item">
                           <a class="btn btn-outline-primary btn-sm px-3 me-2" href="{{ route('login') }}">تسجيل الدخول</a>
                        </li>
                        <li class="nav-item">
                           <a class="btn btn-primary btn-sm px-3" href="{{ route('register') }}">حساب جديد</a>
                        </li>
                        @else   
                           <li class="nav-item"> 
                              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                 <button class="btn btn-danger" type="submit"> {{ __('Log Out') }}  </button>
                              </form>
                           </li>
                        @endif
                           <div>
                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                              </div>
                  </div>
               </nav>
            </div>
         </header>
         