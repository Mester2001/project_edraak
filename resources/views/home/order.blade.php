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
      <link rel="shortcut icon" href="images/v1057-logo-05.png" type="">
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
        .center
        {
            margin:auto;
            width:70%;
            padding: 30px;
            text-align:center;
        }
        table,th,td
        {
            border: 1px solid black;
        }

        .th_deg
        {
            padding: 10px;
            background-color:skyblue;
            font-size:20px;
            font-weight:bold;
        }

      </style>
   </head>
   <body>
    
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
<div class="center">

<table>

<tr>
<th class="th_deg">Product Title</th>
<th class="th_deg">quantity</th>
<th class="th_deg">price</th>
<th class="th_deg">payment_status</th>
<th class="th_deg">delivery_status</th>
<th class="th_deg">image</th>
<th class="th_deg">cancel order</th>

</tr>
@foreach($order as $order)
<tr>
<td>{{$order->product_title}}</td>
<th>{{$order->quantity}}</th>
<th>{{$order->price}}</th>
<th>{{$order->payment_status}}</th>
<th>{{$order->delivery_status}}</th>

<td>
    <img height="100" width="120" src="product/{{$order->image}}">
</td>


<td>
@if ($order->delivery_status=='processing')
<a onclick="return confirm('Are You Sure To Cancel This Order')" class="btn btn-danger" href="{{url('cancel_order',$order->id)}}">cancel order</a>
    </td>
@else

<p style="color:blue;">Not Allowed"</p>

@endif
</td>


</tr>
@endforeach

</table>

</div>

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