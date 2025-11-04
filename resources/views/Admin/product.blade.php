<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>إضافة منتج جديد</title>
    @include('Admin.css')
    <style>
        [dir="rtl"] {
            --text-align: right;
            --float-direction: right;
            --margin-direction: left;
            --padding-direction: left;
            --border-radius: 0 8px 8px 0;
        }
        
        [dir="ltr"] {
            --text-align: left;
            --float-direction: left;
            --margin-direction: right;
            --padding-direction: right;
            --border-radius: 8px 0 0 8px;
        }
        :root {
            --primary-color: #4f46e5;
            --primary-light: #818cf8;
            --text-primary: #1a202c;
            --text-secondary: #4a5568;
            --bg-light: #f8fafc;
            --border-color: #e2e8f0;
        }
        
        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #f1f5f9;
            color: var(--text-primary);
            line-height: 1.6;
        }
        
        .div_center {
            background: #ffffff;
            text-align: var(--text-align);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            margin: 2rem 1rem 2rem 1rem;
            max-width: calc(100% - 2rem);
            transition: all 0.3s ease;
        }
        
        @media (min-width: 768px) {
            .div_center {
                margin: 2rem 2rem 2rem 2rem;
                max-width: calc(100% - 4rem);
            }
            
            .sidebar-mini .div_center,
            .sidebar-close .div_center {
                margin-right: 5rem !important;
                margin-left: 1rem !important;
            }
            
            [dir="rtl"] .sidebar-mini .div_center,
            [dir="rtl"] .sidebar-close .div_center {
                margin-right: 1rem !important;
                margin-left: 5rem !important;
            }
        }
        
        @media (min-width: 1200px) {
            .div_center {
                max-width: 1000px;
                margin: 2rem auto;
            }
            
            .sidebar-mini .div_center,
            .sidebar-close .div_center {
                max-width: 1200px;
                margin: 2rem auto 2rem 5rem !important;
            }
            
            [dir="rtl"] .sidebar-mini .div_center,
            [dir="rtl"] .sidebar-close .div_center {
                margin: 2rem 5rem 2rem auto !important;
            }
        }
        
        .font_size {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--border-color);
        }
        
        .text_color, select, textarea {
            width: 100%;
            max-width: 500px;
            padding: 0.75rem 1rem;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background-color: var(--bg-light);
            text-align: var(--text-align);
            box-sizing: border-box;
            outline: none;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }
        
        /* Hover Effect */
        .text_color:hover, 
        select:hover, 
        textarea:hover {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
            transform: translateY(-1px);
        }
        
        /* Focus Effect */
        .text_color:focus, 
        select:focus, 
        textarea:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
            transform: translateY(-1px);
        }
        
        /* File Input Styling */
        input[type="file"] {
            width: 100%;
            max-width: 500px;
            padding: 0.5rem 0;
            cursor: pointer;
        }
        
        /* Custom File Input Button */
        .file-upload-wrapper {
            position: relative;
            width: 100%;
            max-width: 500px;
        }
        
        .file-upload-button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 1.5rem;
            background: linear-gradient(135deg, var(--primary-color), #6366f1);
            color: white;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-align: center;
            width: 100%;
            border: none;
            font-weight: 600;
            font-size: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .file-upload-button i {
            font-size: 1.5rem;
            margin-right: 0.5rem;
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-3px); }
            100% { transform: translateY(0px); }
        }
        
        .file-upload-button:hover {
            background-color: #4338ca;
            transform: translateY(-1px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .file-name {
            margin-top: 0.75rem;
            padding: 0.5rem 0.75rem;
            font-size: 0.9rem;
            color: var(--text-secondary);
            background-color: rgba(0, 0, 0, 0.02);
            border-radius: 6px;
            border: 1px dashed var(--border-color);
            transition: all 0.2s ease;
        }
        
        .file-name i {
            color: var(--primary-color);
            margin-right: 0.5rem;
        }
        
        /* Ensure form elements don't overflow on small screens */
        @media (max-width: 576px) {
            .text_color, select, textarea {
                max-width: 100% !important;
            }
            
            .div_center {
                padding: 1.25rem;
            }
            
            .font_size {
                font-size: 1.5rem;
                margin-bottom: 1.5rem;
            }
        }
        
        /* RTL specific styles */
        [dir="rtl"] .mdi {
            margin-left: 8px;
            margin-right: 0;
        }
        
        /* LTR specific styles */
        [dir="ltr"] .mdi {
            margin-right: 8px;
            margin-left: 0;
        }
        
        .text_color:focus, select:focus {
            outline: none;
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }
        
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--text-secondary);
            text-align: var(--text-align);
            width: 100%;
        }
        
        .div_design {
            margin-bottom: 1.5rem;
            text-align: var(--text-align);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 0.75rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }
        
        .btn-primary:hover {
            background-color: #4338ca;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .alert {
            border-radius: 8px;
            margin-bottom: 2rem;
            border: none;
            font-weight: 500;
        }
        
        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
        }
        
        .close {
            margin-{{ app()->getLocale() === 'ar' ? 'right' : 'left' }}: -1rem;
            padding: 0.5rem 1rem;
            font-size: 1.5rem;
            line-height: 1;
            color: inherit;
            opacity: 0.8;
            float: var(--float-direction);
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
            <div class ="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"aria-hidden="true">X</button>

                {{session()->get('message')}}
        </div>
        @endif
        <div class="div_center">

                <h1 class="font_size">
                    <i class="mdi mdi-plus-circle-outline"></i>
                    {{ __('messages.add_product') }}
                </h1>
                <form action="{{url('/add_product')}}" method="post" enctype="multipart/form-data"> 
                @csrf

                <div class="div_design">

                <label for="title">{{ __('messages.product_title') }}</label>
                <input class="text_color" type="text" name="title" placeholder="{{ __('messages.enter_title') }}" required>
        </div>


        <div class="div_design">

                <label for="description">{{ __('messages.product_description') }}</label>
                <textarea class="text_color" name="description" rows="3" placeholder="{{ __('messages.enter_description') }}" required></textarea>
        </div>

        <div class="div_design">

                <label for="price">{{ __('messages.price') }}</label>
                <input class="text_color" type="number" name="price" placeholder="{{ __('messages.enter_price') }}" step="0.01" required>
        </div>
        

        <div class="div_design">

                <label for="dis_price">{{ __('messages.discount_price') }} <small class="text-muted">({{ __('messages.optional') }})</small></label>
                <input class="text_color" type="number" name="dis_price" placeholder="{{ __('messages.enter_discount_price') }}" step="0.01">
        </div>


                <div class="div_design">

                <label for="Quantity">{{ __('messages.quantity') }}</label>
                <input class="text_color" type="number" min="0" name="Quantity" placeholder="{{ __('messages.enter_quantity') }}" required>
        </div>


        <div class="div_design">

                <label for="catagorey">{{ __('messages.category') }}</label>
                <select class="text_color" name="catagorey" enctype="multipart/form-data" required>
                    <option value="" selected disabled>{{ __('messages.select_category') }}</option>

                    @foreach($catagorey as $catagorey)
                    <option value="{{$catagorey->id}}">{{$catagorey->catagorey_name}}</option>
                    @endforeach
                    </select>
                </div>

                <!-- Size Selection Section -->
                <div class="div_design" id="sizeSection" style="display: none;">
                    <label>{{ __('messages.select_sizes') }}</label>
                    <div id="sizesContainer" class="row">
                        <!-- Sizes will be loaded here via AJAX -->
                    </div>
                </div>

                    <div class="div_design">

                <label for="image">{{ __('messages.product_image') }}</label>
                <div class="file-upload-wrapper">
                    <input type="file" name="image" id="image" class="file-input" style="display: none;">
                    <label for="image" class="file-upload-button d-flex align-items-center justify-content-center">
                        <i class="mdi mdi-cloud-arrow-up mdi-24px"></i>
                        <span class="{{ app()->getLocale() === 'ar' ? 'mr-2' : 'ml-2' }}">{{ __('messages.upload_file') }}</span>
                    </label>
                    <div id="file-name" class="file-name d-flex align-items-center">
                        <i class="mdi mdi-file-document-outline {{ app()->getLocale() === 'ar' ? 'ml-1' : 'mr-1' }}"></i>
                        <span>{{ __('messages.no_file_chosen') }}</span>
                    </div>
                </div>
                
                <script>
                    document.getElementById('image').addEventListener('change', function(e) {
                        const fileInput = e.target;
                        const fileNameElement = document.getElementById('file-name');
                        const icon = fileNameElement.querySelector('i');
                        
                        if (fileInput.files.length > 0) {
                            const file = fileInput.files[0];
                            const fileType = file.type.split('/')[0];
                            
                            // Update icon based on file type
                            if (fileType === 'image') {
                                icon.className = 'mdi mdi-image-outline mr-1';
                            } else if (fileType === 'application') {
                                icon.className = 'mdi mdi-file-pdf-box-outline mr-1';
                            } else {
                                icon.className = 'mdi mdi-file-document-outline mr-1';
                            }
                            
                            fileNameElement.querySelector('span').textContent = file.name;
                        } else {
                            icon.className = 'mdi mdi-file-document-outline mr-1';
                            fileNameElement.querySelector('span').textContent = '{{ __("No file chosen") }}';
                        }
                    });
                </script>
                    <div>
                <button type="submit" class="btn btn-primary">
                    <i class="mdi mdi-check-circle-outline"></i>
                    {{ __('Add Product') }}
                </button>
        </div>
        </form>

</div>
</div>    
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
 
    @include('Admin.script')
    <!-- End custom js for this page -->
    
    <!-- Size functionality has been removed -->
    <script>
        $(document).ready(function() {
            // Category change handler - size functionality removed
            $('select[name="catagorey"]').on('change', function() {
                // Size selection has been removed
            });

            // Show/hide quantity input when size is selected/deselected
            $(document).on('change', '.size-checkbox', function() {
                var quantityInput = $(this).closest('.form-check').find('.quantity-input');
                if ($(this).is(':checked')) {
                    quantityInput.show().prop('required', true);
                } else {
                    quantityInput.hide().prop('required', false).val('');
                }
            });
        });
    </script>
  </body>
</html>