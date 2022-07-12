<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('Admin.css')
    <style>
        .center{
            margin:auto;
            width: 50%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }
        .font_size{
            text-align: center;
            font-size:40px;
            padding-top:20px;
            font-family:bold;  
        }
        .img_size{
            width: 150px ;
            height: 150px;
        }
        .th_color{
            background:skyblue;
        }
        .th_deg{
            padding: 30px;
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

            <h2 class="font_size">All product</h2>
    <table class="center">
            <tr class="th_color">
                <th class="th_deg">product title</th>
                <th class="th_deg">description</th>
                <th class="th_deg">Quantity</th>
                <th class="th_deg">catagorey</th>
                <th class="th_deg">price</th>
                <th class="th_deg">discount price</th>
                <th class="th_deg">product Image</th>
                <th class="th_deg">Delete </th>
                <th class="th_deg">Edit</th>
            </tr>    
                    @foreach($product as $product)
            <tr>
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->Quantity}}</td>
                <td>{{$product->catagorey}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->discount_price}}</td>
                <td>
                <img class="img_size" src="/product/{{$product->image}}">

                </td>
                        <td>
                            <a class="btn btn-danger"  onclick="return confirm('are you sure to delete this ')" href="{{url('delete_product',$product->id)}}">Delete</a>
                        </td>

                        <td>
                        <a  class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
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