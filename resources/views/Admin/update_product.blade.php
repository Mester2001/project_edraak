<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">
    @include('Admin.css')

    <style type="text/css">
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .font_size{

            font-size: 40px;
            padding-bottom: 40px;
        }
            .text_color{
                color: black;
                padding-bottom: 20px;
            }
            lable{
                display: inline-block;
                width: 200px;
            }
            .div_design{
                padding-bottom: 15px;
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
                <h1  class="font_size">update product </h1>
                <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data"> 
                @csrf
                <div class="div_design">
                <lable>product Title</lable>
                <input class="text_color" type="text" name="title" placeholder="Wite a title" required="" value="{{$product->title}}">
        </div>
        <div class="div_design">
                <lable>product description</lable>
                <input class="text_color" type="text" name="description" placeholder="Wite a description" required=""  value="{{$product->description}}">
        </div>
        <div class="div_design">
                <lable>product price</lable>
                <input class="text_color" type="number" name="price" placeholder="Wite a price" required=""  value="{{$product->price}}" >
        </div>
        
        <div class="div_design">
                <lable>discount price</lable>
                <input class="text_color" type="number" name="dis_price" placeholder="Wite a discount_price"   value="{{$product->discount_price}}">
        </div>

                <div class="div_design">
                <lable>product quantity</lable>
                <input class="text_color" type="number" min="0" name="Quantity" placeholder="Wite a Quantity" required=""  value="{{$product->quantity}}">
        </div>

        <div class="div_design">
 
                <lable>product catagorey :</lable>
                <select class="text_color" name="catagorey"  enctype="multipart/form-data" required="">
                    <option value="{{$product->catagorey}}" selected="">
                        {{$product->catagorey}}
                    </option>
                   
                    @foreach($catagorey as $catagorey)
                    <option>{{$catagorey->catagorey_name}}</option>
                    @endforeach
                 
                    </select>
                  
                </div>

                <div class="div_design">
                <lable> current product Image : </lable>
                <div class="div_design" enctype="multipart/form-data"> 
                <img style="margin:auto;" height="100" width="100" src="/product/{{$product->image}}">
                </div>





                    <div class="div_design">
                <lable> change product Image : </lable>
                <input class="text_color" type="file" name="image">
        </div>
                <div class="div_design">
                <input type="submit" value=" update product" class="btn btn-primary">
        </div>
        </form>

</div>
</div>    
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
 
    @include('Admin.script')
    <!-- End custom js for this page -->
  </body>
</html>