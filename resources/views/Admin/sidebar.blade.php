<style>
    @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@500;600;700;800&display=swap');
    
    :root {
        --primary-color: #4f46e5;
        --primary-light: #818cf8;
        --sidebar-bg: linear-gradient(180deg, #1e293b 0%, #0f172a 100%);
        --sidebar-text: #e2e8f0;
        --sidebar-hover: rgba(255, 255, 255, 0.1);
        --sidebar-active: rgba(79, 70, 229, 0.2);
    }
    
    .sidebar {
        background: var(--sidebar-bg);
        color: var(--sidebar-text);
        width: 280px;
        min-height: 100vh;
        transition: all 0.3s ease;
        box-shadow: 4px 0 15px rgba(0, 0, 0, 0.2);
        font-family: 'Tajawal', sans-serif;
        font-weight: 600;
        direction: rtl;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    }
    
    .sidebar .nav-link {
        color: var(--sidebar-text);
        padding: 12px 20px;
        margin: 4px 10px;
        border-radius: 8px;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        font-size: 1.3rem;
        font-weight: 700;
        letter-spacing: -0.1px;
    }
    
    .sidebar .nav-link:hover, .sidebar .nav-link.active {
        background: var(--sidebar-hover);
        color: #ffffff;
        transform: translateX(-5px);
        box-shadow: 0 4px 12px -1px rgba(0, 0, 0, 0.15), 0 2px 6px -1px rgba(0, 0, 0, 0.1);
        font-weight: 700;
    }
    
    .sidebar .nav-link.active {
        background: var(--sidebar-active);
        color: #ffffff;
        font-weight: 700;
        box-shadow: 0 4px 12px -1px rgba(79, 70, 229, 0.3);
    }
    
    .sidebar .menu-icon {
        margin-right: 10px;
        margin-left: 0;
        font-size: 1.6rem;
        color: var(--primary-light);
        min-width: 36px;
        text-align: center;
        margin-right: 12px;
        filter: drop-shadow(0 2px 2px rgba(0, 0, 0, 0.3));
    }
    
    .sidebar .menu-title {
        font-weight: 800;
        font-size: 1.3rem;
        margin-right: 12px;
        letter-spacing: -0.1px;
    }
    
    .sidebar .sub-menu {
        background: rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        margin: 8px 10px 12px 20px;
        padding: 6px 0;
        border-right: 2px solid var(--primary-light);
    }
    
    .sidebar .sub-menu .nav-link {
        padding: 12px 35px 12px 25px;
        font-size: 1.05rem;
        font-weight: 700;
        opacity: 0.95;
        margin: 3px 0;
        border-radius: 6px;
        border-right: 3px solid transparent;
        transition: all 0.25s ease;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
        background: rgba(0, 0, 0, 0.15);
    }
    
    .sidebar .sub-menu .nav-link:hover {
        background: rgba(255, 255, 255, 0.1);
        border-right-color: var(--primary-light);
        transform: translateX(-3px);
        box-shadow: 2px 0 8px rgba(0, 0, 0, 0.1);
    }
    
    .sidebar .profile {
        padding: 20px 15px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        margin-bottom: 10px;
        background: rgba(0, 0, 0, 0.2);
        border-radius: 0 0 10px 10px;
    }
    
    .sidebar .profile-desc {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .sidebar .profile-pic img {
        width: 45px;
        height: 45px;
        border: 2px solid var(--primary-color);
        border-radius: 50%;
        object-fit: cover;
        transition: all 0.3s ease;
    }
    
    .sidebar .profile-pic img:hover {
        transform: scale(1.05);
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.5);
    }
    
    .sidebar .profile-name h5 {
        margin: 0;
        font-size: 1.05rem;
        font-weight: 700;
        color: #fff;
        letter-spacing: -0.3px;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }
    
    .sidebar .profile-name span {
        font-size: 0.85rem;
        color: #a5b4fc;
        font-weight: 500;
        letter-spacing: -0.2px;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    }
    
    .sidebar .nav-category {
        color: #94a3b8;
        font-size: 1rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 12px 20px 10px;
        margin: 15px 0 8px;
        font-weight: 700;
        color: #cbd5e1;
        background: rgba(0, 0, 0, 0.2);
        border-radius: 6px;
        border-right: 3px solid var(--primary-light);
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
    }
    
    .sidebar .dropdown-menu {
        background: #1e293b;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .sidebar .dropdown-item {
        color: #e2e8f0;
    }
    
    .sidebar .dropdown-item:hover {
        background: rgba(255, 255, 255, 0.1);
    }
</style>

<nav class="sidebar" id="sidebar">
    <div class="sidebar-brand-wrapper d-flex align-items-center justify-content-center py-4">
        <a class="brand-logo" href="#" style="color: white; font-size: 1.6rem; font-weight: 900; text-decoration: none; font-family: 'Tajawal', sans-serif; text-shadow: 0 2px 3px rgba(0, 0, 0, 0.3);">
            <i class="mdi mdi-view-dashboard" style="margin-left: 10px; font-size: 1.5rem; vertical-align: middle;"></i>
            <span style="vertical-align: middle;">لوحة التحكم</span>
        </a>
    </div>
    <ul class="nav flex-column px-2">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator d-flex align-items-center">
                    <div class="position-relative">
                        <img class="img-xs rounded-circle" src="{{ asset('images/IMG_1434.JPG') }}" alt="Profile" onerror="this.src='https://ui-avatars.com/api/?name=Khalid&background=4f46e5&color=fff&size=128';">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name mr-3">
                        <h5 class="mb-0 font-weight-normal">خالد محمد</h5>
                        <span class="d-flex align-items-center">
                            <span class="dot-indicator bg-success mr-2"></span>
                            متصل الآن
                        </span>
                    </div>
                </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <!-- <li class="nav-item nav-category">
            <span class="nav-link"> </span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-view-dashboard"></i>
                </span> -->
                <span class="menu-title">الرئيسية</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-package-variant"></i>
              </span>
              <span class="menu-title">المنتجات</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="{{url('/view_product')}}">
                        <i class="mdi mdi-plus-circle-outline ml-2" style="font-size: 1.2rem;"></i>
                        <span>إضافة منتج جديد</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="{{url('/show_product')}}">
                        <i class="mdi mdi-format-list-bulleted ml-2" style="font-size: 1.2rem;"></i>
                        <span>عرض المنتجات</span>
                    </a>
                </li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('view_catagorey')}}">
              <span class="menu-icon">
                <i class="mdi mdi-shape"></i>
              </span>
              <span class="menu-title">الأقسام</span>
            </a>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('order')}}">
              <span class="menu-icon">
                <i class="mdi mdi-cart-outline"></i>
              </span>
              <span class="menu-title">الطلبات</span>
            </a>
          </li>

             </ul>
      </nav>
     