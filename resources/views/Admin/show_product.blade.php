<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
  <head>
    <!-- Required meta tags -->
    @include('Admin.css')
    <style>
        [dir="rtl"] {
            --text-align: right;
            --float-direction: right;
            --margin-direction: left;
            --padding-direction: left;
        }
        
        [dir="ltr"] {
            --text-align: left;
            --float-direction: left;
            --margin-direction: right;
            --padding-direction: right;
        }

        .center{
            margin: 40px auto 0;
            width: 95%;
            max-width: 1200px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .font_size {
            text-align: center;
            font-size: 2rem;
            padding: 1.5rem 0;
            color: #4f46e5;
            font-weight: 600;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid #e2e8f0;
        }
        .img_size {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 4px;
            border: 1px solid #e2e8f0;
        }
        
        .th_color {
            background: #4f46e5;
            color: white;
        }
        
        .th_deg {
            padding: 1rem;
            text-align: var(--text-align);
            font-weight: 500;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        table td, table th {
            padding: 0.75rem;
            border-bottom: 1px solid #e2e8f0;
            vertical-align: middle;
        }
        
        table tr:hover {
            background-color: #f8fafc;
        }
        
        .btn {
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-weight: 500;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-danger {
            background-color: #ef4444;
            color: white;
            border: none;
        }
        
        .btn-danger:hover {
            background-color: #dc2626;
        }
        
        .btn-success {
            background-color: #10b981;
            color: white;
            border: none;
        }
        
        .btn-success:hover {
            background-color: #059669;
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

          @if(session()->has('message'))
          <div class="alert alert-success">
          <button type="button" class="close" data-dismmiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}
    </div>
    @endif

            <h2 class="font_size">
                <i class="mdi mdi-package-variant"></i>
                {{ __('messages.all_products') }}
            </h2>
            <div class="table-responsive">
                <table class="center">
                    <thead>
                        <tr class="th_color">
                            <th class="th_deg">{{ __('messages.product_title') }}</th>
                            <th class="th_deg">{{ __('messages.product_description') }}</th>
                            <th class="th_deg">{{ __('messages.quantity') }}</th>
                            <th class="th_deg">{{ __('messages.category') }}</th>
                            <th class="th_deg">{{ __('messages.price') }}</th>
                            <th class="th_deg">{{ __('messages.discount_price') }}</th>
                            <th class="th_deg">{{ __('messages.product_image') }}</th>
                            <th class="th_deg">{{ __('messages.actions') }}</th>
                        </tr>    
                    </thead>
                    <tbody>
                        @foreach($product as $product)
                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>{{ Str::limit($product->description, 50) }}</td>
                            <td>{{ number_format($product->Quantity) }}</td>
                            <td>{{ $product->catagorey }}</td>
                            <td>{{ number_format($product->price, 2) }}</td>
                            <td>{{ $product->discount_price ? number_format($product->discount_price, 2) : '-' }}</td>
                            <td>
                                <img class="img_size" src="/product/{{ $product->image }}" alt="{{ $product->title }}">
                            </td>
                            <td class="d-flex" style="gap: 0.5rem;">
                                <a class="btn btn-success" href="{{ url('update_product', $product->id) }}">
                                    <i class="mdi mdi-pencil mr-1"></i>
                                    {{ __('messages.edit') }}
                                </a>
                                <a class="btn btn-danger" onclick="return confirm('{{ __('messages.confirm_delete') }}')" href="{{ url('delete_product', $product->id) }}">
                                    <i class="mdi mdi-delete mr-1"></i>
                                    {{ __('messages.delete') }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
    </table>

</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
 
    @include('Admin.script')
    <!-- End custom js for this page -->
  </body>
</html>