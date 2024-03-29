<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{url('/redirect')}}"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                     <div class="logo_footer">
                        <a href="#"><img width="150" src="images/v1057-logo-05.png" alt="#" /></a>
                           </div>
                        <li class="nav-item active">
                           <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('show_cart')}}">cart</a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href=""></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('show_order')}}">order</a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href=""></a>
                        </li>
                        @if(Auth::user()==null)
                        <li class="nav-item">
                           <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">login</a>
                        </li>

                        <li class="nav-item">
                           <a class="btn btn-success" href="{{ route('register') }}">register</a>
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
         