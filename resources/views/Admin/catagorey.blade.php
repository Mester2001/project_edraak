<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('Admin.css')
    <style type="text/css">
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .h2_font{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .input_color{
            color : black;
        }
        .center{
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top:30px;
            border:3px solid white;
            background-color:skyblue;
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
            <div class="div_center">

                <h2 class="h2_font">Add Catagorey</h2>
                <form action="{{url('/add_catagorey')}}" method="POST">
                @csrf
                    <input type="text" name="catagorey" placeholder="write catagorey name">
                    <input type="submit" class="btn btn-primary" name="submit value= Add Catagorey">
                     </form>
                    
            </div>
        <table class="center">
        
        <tr>
            <td>catagorey_name</td>
            <td>Action</td>
    </tr>
   
            @foreach($data as $data)
            <tr>
                <td>{{$data->catagorey_name}}</td>
                <td>
                    <a onclick="return confirm('Are You Sure TO Delet')" class="btn btn-danger" href="{{url('delete_catagorey',$data->id)}}">Delete</a>
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