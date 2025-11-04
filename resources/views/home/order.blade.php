<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/v1057-logo-05.png') }}" type="image/x-icon">
    <title>طلباتي - OutFit_Shope</title>
    
    <!-- Bootstrap 5 RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --success: #10b981;
            --danger: #ef4444;
            --warning: #f59e0b;
            --info: #3b82f6;
            --light: #f8fafc;
            --dark: #1e293b;
            --border: #e2e8f0;
            --card-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            background-color: #f8f9fa;
            font-family: 'Tajawal', sans-serif;
            color: #334155;
        }

        .page-header {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .page-title {
            font-weight: 700;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
        }

        .page-title i {
            font-size: 1.75rem;
        }

        .order-card {
            background: white;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
            margin-bottom: 1.5rem;
            overflow: hidden;
            transition: var(--transition);
            border: 1px solid var(--border);
        }

        .order-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .order-header {
            background-color: #f8f9fa;
            padding: 1rem 1.5rem;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .order-id {
            font-weight: 600;
            color: var(--dark);
            margin: 0;
        }

        .order-date {
            color: #64748b;
            font-size: 0.875rem;
            margin: 0;
        }

        .order-body {
            padding: 1.5rem;
        }

        .product-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid var(--border);
        }

        .product-title {
            font-weight: 600;
            margin-bottom: 0.25rem;
            color: var(--dark);
        }

        .product-price {
            font-weight: 700;
            color: var(--primary);
            margin: 0.5rem 0;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.35rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: capitalize;
        }

        .status-processing {
            background-color: #fef3c7;
            color: #92400e;
        }

        .status-delivered {
            background-color: #d1fae5;
            color: #065f46;
        }

        .status-cancelled {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .status-paid {
            background-color: #dbeafe;
            color: #1e40af;
        }

        .status-pending {
            background-color: #e2e8f0;
            color: #475569;
        }

        .btn-cancel {
            background-color: #fef2f2;
            color: #dc2626;
            border: 1px solid #fecaca;
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-cancel:hover {
            background-color: #fee2e2;
            color: #b91c1c;
        }

        .no-orders {
            text-align: center;
            padding: 3rem 1rem;
            background: white;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
        }

        .no-orders i {
            font-size: 3rem;
            color: #e2e8f0;
            margin-bottom: 1rem;
        }

        .no-orders h4 {
            color: #64748b;
            margin-bottom: 0.5rem;
        }

        .no-orders p {
            color: #94a3b8;
            margin-bottom: 1.5rem;
        }

        @media (max-width: 767.98px) {
            .order-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .product-info {
                margin-top: 1rem;
            }
            
            .order-actions {
                margin-top: 1rem;
                width: 100%;
            }
            
            .btn {
                width: 100%;
            }
        }

        /* RTL Support */
        [dir="rtl"] {
            font-family: 'Tajawal', sans-serif;
        }
    </style>
   </head>
   <body>
    <!-- Header Section -->
    @include('home.header')
    
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title">
                <i class="fas fa-shopping-bag"></i>
                طلباتي
            </h1>
        </div>
    </div>

    <!-- Orders Section -->
    <div class="container py-4">
        @if($order->count() > 0)
            @foreach($order as $orderItem)
            <div class="order-card">
                <div class="order-header">
                    <div>
                        <h6 class="order-id mb-1">الطلب #{{ $orderItem->id }}</h6>
                        <p class="order-date mb-0">
                            <i class="far fa-calendar-alt me-1"></i>
                            {{ $orderItem->created_at->format('Y/m/d - h:i A') }}
                        </p>
                    </div>
                    <span class="status-badge status-{{ strtolower($orderItem->delivery_status) }}">
                        @if($orderItem->delivery_status === 'delivered')
                            <i class="fas fa-check-circle me-1"></i>
                        @elseif($orderItem->delivery_status === 'processing')
                            <i class="fas fa-truck me-1"></i>
                        @elseif($orderItem->delivery_status === 'cancelled')
                            <i class="fas fa-times-circle me-1"></i>
                        @endif
                        {{ __('messages.' . $orderItem->delivery_status) }}
                    </span>
                </div>
                
                <div class="order-body">
                    <div class="row align-items-center">
                        <div class="col-md-2 col-4">
                            <img src="{{ asset('product/' . $orderItem->image) }}" class="product-img" alt="{{ $orderItem->product_title }}">
                        </div>
                        <div class="col-md-6 col-8">
                            <h5 class="product-title">{{ $orderItem->product_title }}</h5>
                            <div class="d-flex align-items-center mb-2">
                                <span class="me-3">
                                    <i class="fas fa-box-open text-muted me-1"></i>
                                    {{ $orderItem->quantity }} {{ __('messages.pieces') }}
                                </span>
                                <span class="product-price">
                                    {{ number_format($orderItem->price, 2) }} ر.س
                                </span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="status-badge status-{{ strtolower($orderItem->payment_status) }} me-2">
                                    <i class="fas {{ $orderItem->payment_status === 'paid' ? 'fa-check-circle' : 'fa-clock' }} me-1"></i>
                                    {{ ucfirst($orderItem->payment_status) }}
                                </span>
                                @if($orderItem->delivery_status === 'processing')
                                    <span class="badge bg-warning bg-opacity-10 text-warning">
                                        <i class="fas fa-clock me-1"></i>
                                        {{ __('messages.in_progress') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-3 text-md-end order-actions">
                            @if($orderItem->delivery_status === 'processing')
                                <a onclick="return confirm('{{ __('messages.confirm_cancel_order') }}')" 
                                   href="{{ url('cancel_order', $orderItem->id) }}" 
                                   class="btn btn-cancel btn-sm">
                                    <i class="fas fa-times-circle me-1"></i>
                                    {{ __('messages.cancel_order') }}
                                </a>
                            @else
                                <button class="btn btn-outline-secondary btn-sm" disabled>
                                    <i class="fas fa-info-circle me-1"></i>
                                    {{ $orderItem->delivery_status === 'cancelled' ? __('messages.order_cancelled') : __('messages.cancel_not_allowed') }}
                                </button>
                            @endif
                            
                            <a href="#" class="btn btn-outline-primary btn-sm mt-2">
                                <i class="fas fa-eye me-1"></i>
                                {{ __('messages.view_details') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="no-orders">
                <i class="fas fa-shopping-bag"></i>
                <h4>{{ __('messages.no_orders_found') }}</h4>
                <p>{{ __('messages.no_orders_description') }}</p>
                <a href="{{ route('home') }}" class="btn btn-primary">
                    <i class="fas fa-shopping-cart me-2"></i>
                    {{ __('messages.start_shopping') }}
                </a>
            </div>
        @endif
    </div>

    <!-- Footer Section -->
    @include('home.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Enable Bootstrap tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
        
        // RTL Support
        document.documentElement.dir = '{{ app()->getLocale() === "ar" ? "rtl" : "ltr" }}';
    </script>
</body>
</html>
