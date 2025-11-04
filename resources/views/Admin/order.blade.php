<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    @include('Admin.css')
    <style type="text/css">
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

        [dir="rtl"] {
            --text-align: right;
            --float-direction: right;
            --margin-direction: left;
            --padding-direction: right;
            --border-radius: 0.5rem 0 0 0.5rem;
        }
        
        [dir="ltr"] {
            --text-align: left;
            --float-direction: left;
            --margin-direction: right;
            --padding-direction: left;
            --border-radius: 0 0.5rem 0.5rem 0;
        }

        body {
            background-color: #f1f5f9;
            color: #334155;
            font-family: 'Tajawal', sans-serif;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 0;
            margin-bottom: 2rem;
            border-bottom: 1px solid var(--border);
        }

        .page-title {
            color: var(--dark);
            font-size: 1.75rem;
            font-weight: 700;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .page-title i {
            color: var(--primary);
            font-size: 2rem;
        }

        .card {
            background: white;
            border-radius: 0.75rem;
            box-shadow: var(--card-shadow);
            margin-bottom: 2rem;
            border: none;
            overflow: hidden;
            transition: var(--transition);
        }

        .card:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table {
            width: 100%;
            margin-bottom: 0;
            color: #334155;
            border-collapse: separate;
            border-spacing: 0;
        }

        .table thead th {
            background-color: var(--primary);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
            padding: 1rem 1.25rem;
            border: none;
            white-space: nowrap;
        }

        .table tbody tr {
            transition: var(--transition);
        }

        .table tbody tr:hover {
            background-color: rgba(79, 70, 229, 0.05);
        }

        .table td {
            padding: 1rem 1.25rem;
            vertical-align: middle;
            border-color: var(--border);
            font-size: 0.9rem;
        }

        .product-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 0.5rem;
            border: 1px solid var(--border);
            transition: var(--transition);
        }

        .product-img:hover {
            transform: scale(1.05);
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.35rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: capitalize;
            letter-spacing: 0.3px;
        }

        .status-paid {
            background-color: #d1fae5;
            color: #065f46;
        }

        .status-unpaid {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .status-processing {
            background-color: #fef3c7;
            color: #92400e;
        }

        .status-delivered {
            background-color: #dbeafe;
            color: #1e40af;
        }

        .status-cancelled {
            background-color: #f3f4f6;
            color: #6b7280;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1.25rem;
            border-radius: 0.5rem;
            font-weight: 500;
            font-size: 0.875rem;
            transition: var(--transition);
            border: 1px solid transparent;
        }

        .btn i {
            margin-left: 0.5rem;
            font-size: 1rem;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.2);
        }

        .btn-sm {
            padding: 0.25rem 0.75rem;
            font-size: 0.8125rem;
        }

        .text-success {
            color: var(--success);
        }

        .text-center {
            text-align: center !important;
        }

        .text-nowrap {
            white-space: nowrap;
        }

        .badge {
            font-weight: 600;
            padding: 0.35em 0.65em;
        }

        .no-orders {
            padding: 3rem 1rem;
            text-align: center;
            color: #64748b;
        }

        .no-orders i {
            font-size: 3rem;
            color: #e2e8f0;
            margin-bottom: 1rem;
            display: block;
        }

        @media (max-width: 991.98px) {
            .table-responsive {
                border: 1px solid var(--border);
                border-radius: 0.5rem;
                overflow: hidden;
            }
            
            .table thead {
                display: none;
            }
            
            .table, .table tbody, .table tr, .table td {
                display: block;
                width: 100%;
            }
            
            .table tr {
                position: relative;
                padding: 1rem 0;
                border-bottom: 1px solid var(--border);
            }
            
            .table td {
                padding: 0.5rem 1rem;
                text-align: var(--text-align) !important;
            }
            
            .table td::before {
                content: attr(data-label);
                font-weight: 600;
                display: inline-block;
                min-width: 120px;
                color: #64748b;
                margin-{{ var('margin-direction') }}: 0.5rem;
            }
            
            .table td:last-child {
                border-bottom: none;
            }
            
            .btn {
                width: 100%;
                margin-top: 0.5rem;
            }
        }
    </style>
  </head>
  <body>

    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('Admin.sidebar')
      <!-- partial -->
      @include('Admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
                <h1 class="page-title">
                    <i class="mdi mdi-package-variant-closed"></i>
                    {{ __('messages.all_orders') }}
                </h1>
            </div>

            <div class="card">
                <div class="card-body">
                    @if($order->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>{{ __('messages.product') }}</th>
                                        <th>{{ __('messages.customer') }}</th>
                                        <th class="text-center">{{ __('messages.quantity') }}</th>
                                        <th class="text-end">{{ __('messages.price') }}</th>
                                        <th class="text-center">{{ __('messages.payment_status') }}</th>
                                        <th class="text-center">{{ __('messages.delivery_status') }}</th>
                                        <th class="text-center">{{ __('messages.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order as $orderItem)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="/product/{{ $orderItem->image }}" 
                                                     class="product-img me-3" 
                                                     alt="{{ $orderItem->product_title }}">
                                                <div>
                                                    <h6 class="mb-0">{{ $orderItem->product_title }}</h6>
                                                    <small class="text-muted">{{ $orderItem->created_at->diffForHumans() }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <h6 class="mb-1">{{ $orderItem->name }}</h6>
                                                <small class="text-muted">{{ $orderItem->email }}</small><br>
                                                <small class="text-muted">{{ $orderItem->phone }}</small>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge bg-light text-dark">
                                                {{ number_format($orderItem->quantity) }}
                                            </span>
                                        </td>
                                        <td class="text-end">
                                            <strong>{{ number_format($orderItem->price, 2) }} ر.س</strong>
                                        </td>
                                        <td class="text-center">
                                            <span class="status-badge status-{{ strtolower($orderItem->payment_status) }}">
                                                <i class="mdi mdi-{{ $orderItem->payment_status === 'paid' ? 'check-circle' : 'clock-outline' }} me-1"></i>
                                                {{ ucfirst($orderItem->payment_status) }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <span class="status-badge status-{{ strtolower($orderItem->delivery_status) }}">
                                                @if($orderItem->delivery_status === 'delivered')
                                                    <i class="mdi mdi-check-circle me-1"></i>
                                                @elseif($orderItem->delivery_status === 'processing')
                                                    <i class="mdi mdi-truck-delivery me-1"></i>
                                                @elseif($orderItem->delivery_status === 'cancelled')
                                                    <i class="mdi mdi-close-circle me-1"></i>
                                                @endif
                                                {{ ucfirst($orderItem->delivery_status) }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center gap-2">
                                                @if($orderItem->delivery_status == 'processing')
                                                    <a href="{{ url('delivered', $orderItem->id) }}" 
                                                       onclick="return confirm('{{ __('messages.confirm_delivered') }}')" 
                                                       class="btn btn-primary btn-sm"
                                                       data-bs-toggle="tooltip" 
                                                       title="{{ __('messages.mark_delivered') }}">
                                                        <i class="mdi mdi-truck-delivery"></i>
                                                    </a>
                                                @else 
                                                    <span class="text-success">
                                                        <i class="mdi mdi-check-circle" style="font-size: 1.5rem;"></i>
                                                    </span>
                                                @endif
                                                
                                                <button type="button" 
                                                        class="btn btn-info btn-sm"
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#orderDetails{{ $orderItem->id }}"
                                                        data-bs-toggle="tooltip"
                                                        title="{{ __('messages.view_details') }}">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="no-orders">
                            <i class="mdi mdi-package-variant-remove"></i>
                            <h4>{{ __('messages.no_orders_found') }}</h4>
                            <p class="text-muted">{{ __('messages.no_orders_description') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
 
    @include('Admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
