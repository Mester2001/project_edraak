<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="/images/v1057-logo-05.png" type="">
      <title>OutFit_Shope</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <style type="text/css">
        .center {
            margin: auto;
            width: 90%;
            max-width: 1200px;
            padding: 30px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4f46e5;
            color: white;
            font-weight: 600;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .img_deg {
            height: 80px;
            width: 80px;
            object-fit: cover;
            border-radius: 4px;
        }
        .total_deg {
            font-size: 24px;
            font-weight: 600;
            color: #2d3748;
            margin: 20px 0;
        }
        .btn-danger {
            background-color: #ef4444;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn-danger:hover {
            background-color: #dc2626;
        }
        .btn-primary {
            background-color: #4f46e5;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin: 10px 5px;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #4338ca;
        }
      </style>

   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->

         <!-- slider section -->
 
         <!-- end slider section -->

         @if(session()->has('message'))
            <div class ="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"aria-hidden="true">X</button>

                {{session()->get('message')}}
        </div>
        @endif


      <div class="center">

            <table>
                <tr>
                    <th class="th_deg">Product</th>
                    <th class="th_deg">Size</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Action</th>
                </tr>
                <?php $totalprice=0; ?>
                
                @foreach($cart as $cart)

                <tr>
                    <td>{{$cart->product_title}}</td>
                    <td>{{$cart->size_name ?? 'N/A'}}</td>
                    <td>{{$cart->quantity}}</td>
                    <td>${{number_format($cart->price, 2)}}</td>
                    <td><img class="img_deg" src="/product/{{$cart->image}}" alt="{{$cart->product_title}}"></td>
                    <td>
                        <a class="btn btn-danger" 
                           onclick="return confirm('Are you sure you want to remove this item?')"
                           href="{{url('/remove_cart', $cart->id)}}">
                            <i class="fa fa-trash"></i> Remove
                        </a>
                    </td>
                </tr>
                    <?php $totalprice = $totalprice + $cart->price ?>
                    @endforeach

                 
            </table>
            <div class="mt-4">
                <h1 class="total_deg">Total Price: ${{number_format($totalprice, 2)}}</h1>
            </div>
            <div>
                <h1 style="font-size: 25px; padding-bottom:15px; ">product to order</h1>
                <a href="{{url('cash_order')}}" class="btn btn-danger">Cash On Delivery</a>
                <a href="{{url('stripe',$totalprice)}}" class="btn btn-primary">Pay Using Card</a>



            </div>
      <!-- footer start -->

      <!-- footer end -->
     
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
    </html>