
        <style>
            .language-switcher .btn-outline-light {
                border-color: rgba(255, 255, 255, 0.3);
                transition: all 0.3s ease;
            }
            .language-switcher .btn-outline-light:hover {
                background: rgba(255, 255, 255, 0.1);
                transform: translateY(-1px);
            }
            [dir="rtl"] .language-switcher .mr-1 {
                margin-right: 0 !important;
                margin-left: 0.25rem !important;
            }
            @media (max-width: 991px) {
                .language-switcher {
                    margin: 0.5rem 0;
                    text-align: center;
                }
            }
        </style>
        <nav class="navbar p-0 fixed-top d-flex flex-row" style="background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <div class="navbar-brand brand-logo-mini">
              <h1 class="ml-2 text-white font-weight-bold">لوحة التحكم</h1>
            </div>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <div class="relative w-full max-w-xl">
  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
    <i class="fas fa-search text-indigo-400"></i>
  </div>
  <input type="text" class="form-control pl-10 bg-white/10 border-0 text-white placeholder-indigo-200 focus:ring-2 focus:ring-white/50 rounded-lg w-full" placeholder="ابحث عن منتجات...">
</div>
                </form>
              </li>
            </ul>
            <!-- Language Switcher -->
            <div class="language-switcher mx-3">
                <form action="{{ route('language.switch') }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="locale" value="{{ app()->getLocale() === 'ar' ? 'en' : 'ar' }}">
                    <button type="submit" class="btn btn-sm btn-outline-light d-flex align-items-center" style="border-radius: 20px;">
                        <i class="mdi mdi-translate mr-1"></i>
                        <span>{{ strtoupper(app()->getLocale()) === 'AR' ? 'English' : 'العربية' }}</span>
                    </button>
                </form>
            </div>
            
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link user-menu-button flex items-center px-3 py-2 bg-white text-indigo-700 font-medium rounded-lg shadow-md hover:shadow-lg transition-all duration-300" id="userDropdown" data-toggle="dropdown" aria-expanded="false" href="#">
                  <i class="mdi mdi-account-circle mdi-24px mr-2"></i>
                  <span class="hidden md:inline">{{ Auth::user()->name }}</span>
                  <i class="mdi mdi-chevron-down ml-1"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-right shadow-lg rounded-lg overflow-hidden py-1 w-64" aria-labelledby="userDropdown" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
                  <!-- User Info -->
                  <div class="px-4 py-3 border-b border-gray-100">
                    <p class="text-sm text-gray-500">{{ __('messages.signed_in_as') }}</p>
                    <p class="text-sm font-medium text-gray-900 truncate">{{ Auth::user()->email }}</p>
                  </div>
                  
                  <!-- Menu Items -->
                  <div class="py-1">
                    <a href="#" class="dropdown-menu-item">
                      <i class="mdi mdi-account-outline text-gray-500"></i>
                      <span>{{ __('messages.profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-menu-item">
                      <i class="mdi mdi-cog-outline text-gray-500"></i>
                      <span>{{ __('messages.settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-menu-item">
                      <i class="mdi mdi-bell-outline text-gray-500"></i>
                      <span>{{ __('messages.notifications') }}</span>
                      <span class="badge bg-red-500 text-white text-xs {{ app()->getLocale() === 'ar' ? 'mr-auto' : 'ml-auto' }}">3</span>
                    </a>
                  </div>
                  
                  <div class="py-1 border-t border-gray-100">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-menu-item text-red-600 hover:bg-red-50 w-full text-{{ app()->getLocale() === 'ar' ? 'right' : 'left' }}">
                        <i class="mdi mdi-logout text-red-500"></i>
                        <span>{{ __('messages.log_out') }}</span>
                      </button>
                    </form>
                  </div>
                </div>
              </li>
            </ul>
            
            <style>
            .dropdown-menu {
              border: none;
              box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
              min-width: 14rem;
              padding: 0.5rem 0;
              margin: 0.5rem 0 0;
              border-radius: 0.5rem;
              background-color: white;
            }
            
            .dropdown-menu-item {
              display: flex;
              align-items: center;
              padding: 0.5rem 1rem;
              font-size: 0.875rem;
              color: #374151;
              transition: all 0.2s ease;
              text-decoration: none;
            }
            
            .dropdown-menu-item:hover {
              background-color: #f9fafb;
              color: #1f2937;
            }
            
            .dropdown-menu-item i {
              margin-right: 0.75rem;
              width: 1.25rem;
              text-align: center;
            }
            
            .badge {
              display: inline-flex;
              align-items: center;
              justify-content: center;
              height: 1.25rem;
              min-width: 1.25rem;
              border-radius: 9999px;
              padding: 0 0.375rem;
              font-size: 0.625rem;
              font-weight: 600;
              line-height: 1;
            }
            
            .user-menu-button {
              display: flex;
              align-items: center;
              transition: all 0.2s ease;
            }
            
            .user-menu-button:hover {
              transform: translateY(-1px);
            }
            
            [dir="rtl"] .dropdown-menu-item i {
              margin-right: 0;
              margin-left: 0.75rem;
            }
            
            [dir="rtl"] .badge {
              margin-left: 0;
              margin-right: auto;
            }
            </style>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        