@extends('layouts.app')

@section('content')
<style>
    .welcome-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 15px;
        padding: 3rem 2rem;
        margin: 2rem 0;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }
    .welcome-title {
        color: #2c3e50;
        font-weight: 700;
        margin-bottom: 1.5rem;
        font-size: 2.2rem;
    }
    .welcome-text {
        color: #495057;
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 2rem;
    }
    .feature-card {
        background: white;
        border-radius: 10px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }
    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.1);
    }
    .feature-icon {
        font-size: 2.5rem;
        color: #4e73df;
        margin-bottom: 1rem;
    }
    .feature-title {
        color: #2c3e50;
        font-weight: 600;
        margin-bottom: 1rem;
    }
    .feature-text {
        color: #6c757d;
        font-size: 0.95rem;
    }
    .btn-custom {
        padding: 0.5rem 1.5rem;
        border-radius: 30px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    .btn-primary-custom {
        background-color: #4e73df;
        border-color: #4e73df;
    }
    .btn-primary-custom:hover {
        background-color: #2e59d9;
        border-color: #2653d4;
        transform: translateY(-2px);
    }
    .alert {
        border: none;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
</style>

<div class="container">
    <div class="welcome-section text-center">
        <h1 class="welcome-title">مرحباً بك في متجرنا</h1>
        <p class="welcome-text">اكتشف أحدث المنتجات والعروض الحصرية لدينا. تسوق الآن واحصل على أفضل التجارب التسوقية.</p>
        
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3 class="feature-title">شحن سريع</h3>
                    <p class="feature-text">توصيل سريع وآمن لجميع أنحاء المملكة مع خدمة التتبع المباشر.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="feature-title">دفع آمن</h3>
                    <p class="feature-text">طرق دفع متعددة وآمنة مع حماية كاملة لبياناتك المالية.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="feature-title">دعم فني</h3>
                    <p class="feature-text">فريق دعم فني متاح على مدار الساعة لمساعدتك في أي استفسار.</p>
                </div>
            </div>
        </div>
        
        <div class="mt-5">
            <a href="{{ route('product') }}" class="btn btn-primary btn-custom btn-primary-custom">
                <i class="fas fa-shopping-bag me-2"></i> تصفح المنتجات
            </a>
        </div>
    </div>
</div>

@if(isset($products) && $products->count() > 0)
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">أحدث المنتجات</h2>
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card h-100 product-card">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text text-muted">{{ $product->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h5 mb-0 text-primary">{{ $product->price }} ر.س</span>
                            <a href="{{ route('product.details', $product->id) }}" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-eye"></i> عرض
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
