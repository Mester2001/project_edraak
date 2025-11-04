<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>OutFit_Shope</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style>
          .size-selection {
              margin: 15px 0;
          }
          .size-option {
              display: inline-block;
              margin: 5px;
          }
          .size-option input[type="radio"] {
              display: none;
          }
          .size-option label {
              display: block;
              padding: 8px 15px;
              border: 1px solid #ddd;
              border-radius: 4px;
              cursor: pointer;
              transition: all 0.3s;
          }
          .size-option input[type="radio"]:checked + label {
              background-color: #4f46e5;
              color: white;
              border-color: #4f46e5;
          }
          .size-option label small {
              font-size: 0.8em;
              opacity: 0.8;
          }
          .available-quantity {
              color: #4CAF50;
              font-weight: bold;
              margin: 10px 0;
          }
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->




      <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width: 50%; padding: 30px">
               
                     <div class="img-box">
                        <img src="product/{{$product->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$product->title}}
                        </h5>

                     @if($product->discount_price!=null)

                       <h6 style="color:red">
                       discount price
                       <br>
                          ${{$product->discount_price}}
                        </h6>
                        

                        <h6 style="text-decoration:line-through;color:blue">
                        price
                        <br>
                          $ {{$product->price}}
                        </h6>

                           @else

                     
                        <h6 class="color:blue">
                           price
                           <br>
                          $ {{$product->price}}
                        </h6>


                 @endif
                        
                <h6>product catagorey : {{$product->catagorey}} </h6>
                <h6>product details : {{$product->description}} </h6>
                
                @if($product->sizes->count() > 0)
                    <div class="size-selection mb-3">
                        <h6>Select Size:</h6>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach($product->sizes as $size)
                                @if($size->pivot->quantity > 0)
                                    <div class="size-option">
                                        <input type="radio" id="size_{{ $size->id }}" name="size_id" value="{{ $size->id }}" 
                                               data-max-quantity="{{ $size->pivot->quantity }}" required>
                                        <label for="size_{{ $size->id }}">
                                            {{ $size->name }}
                                            <small>({{ $size->pivot->quantity }} available)</small>
                                        </label>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <h6 class="available-quantity" style="display: none;">
                        Available quantity: <span id="available-quantity">0</span>
                    </h6>
                @else
                    <h6>Available quantity: {{ $product->quantity }}</h6>
                @endif

                <form action="{{ url('add_cart', $product->id) }}" method="post" id="addToCartForm">
                    @csrf
                    @if($product->sizes->count() > 0)
                        <input type="hidden" name="size_id" id="selected_size_id">
                    @endif
                    
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <input type="number" name="quantity" id="quantity" value="1" min="1" 
                                   style="width: 100px" class="form-control" required>
                        </div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"></i> Add To Cart
                            </button>
                        </div>
                    </div>
                </form>

                     </div>
                  </div>
               </div>

      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
     
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <script>
          $(document).ready(function() {
              // Handle size selection
              $('input[name="size_id"]').change(function() {
                  const maxQuantity = parseInt($(this).data('max-quantity'));
                  $('#available-quantity').text(maxQuantity);
                  $('.available-quantity').show();
                  $('#quantity').attr('max', maxQuantity).val(1);
                  $('#selected_size_id').val($(this).val());
              });

              // Validate form before submission
              $('#addToCartForm').on('submit', function(e) {
                  if ($('input[name="size_id"]').length > 0 && !$('input[name="size_id"]:checked').val()) {
                      e.preventDefault();
                      alert('Please select a size');
                      return false;
                  }
                  return true;
              });

              // Validate quantity input
              $('#quantity').on('change', function() {
                  const max = parseInt($(this).attr('max'));
                  const value = parseInt($(this).val());
                  
                  if (value > max) {
                      $(this).val(max);
                      alert('The maximum available quantity is ' + max);
                  } else if (value < 1) {
                      $(this).val(1);
                  }
              });
          });
      </script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>