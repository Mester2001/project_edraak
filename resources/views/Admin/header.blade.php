<nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="public/images/IMG_1434.JPG" alt="logo" ></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
</div>
</botton>

  
           
                        @if(Route::has('login'))
                   
                        @auth
                        <li class="nav-item">
                
                        <x-app-layout>
                  
                                    {{ __('Log Out') }}
                          
                    </x-app-layout>
</li>
                </div>
                        @else
                                @endauth     
                         @endif
                         <div>
                </nav>     