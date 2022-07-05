<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('Admin.css')
    <style type="text/css">

        .title_deg
        {
            text-align:center;
            font-size:25px;
            font-weight:bold;
            padding-bottom:40px;
        }
.table_deg
{
    border:2px solid white;
    width:100%;
    margin:auto;
    text-align:center;
}
.th_deg{
    background-color:skyblue;
}
.img_size
{
    width:150px;
    height:150px;
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
            <h1 class="title_deg">All Order</h1>

        <table class="table_deg">

            <tr class="th_deg">
                <th style="padding:10px;">Name</th>
                <th style="padding:10px;">Email</th>
                <th style="padding:10px;">Address</th>
                <th style="padding:10px;">product title</th>
                <th style="padding:10px;">Quantity</th>
                <th style="padding:10px;">price</th>
                <th style="padding:10px;">payment status</th>
                <th style="padding:10px;">delivery</th>
                <th style="padding:10px;">Image</th>
                <th style="padding:10px;">delivered</th>
            </tr>
@foreach($order as $order)

            <tr>
                <td>{{$order->name}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->product_title}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->payment_status}}</td>
                <td>{{$order->delivery_status}}</td>
                <td>
                    <img src="/product/{{$order->image}}">
                </td>
              
                <td>
                    @if($order->delivery_status=='processing')
                    <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are You Sure This Product Is Delivered !!!')"  class="btn btn-primary">Delivered</a>
                    @else 
                    <p style="color:green;">
                    Delivered</p>

                    @endif
                </td>
              
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