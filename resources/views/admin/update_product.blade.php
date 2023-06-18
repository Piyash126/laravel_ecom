<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- required="" meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />

    <style>
            .div_center{
                text-align:center;
                margin-top:40px;
            }

            .h2_font{
                font-size:40px;
                padding-bottom:40px;
            }

            .inputblack{
                color:black;
            }

            .center{
              margin:auto;
              width:50%;
              text-align:center;
              margin-top: 30px;
              border:3px solid white;
            }

            .lavel_design{
                display:inline-block;
                width:200px;
            }

            .div_design{
                padding-bottom:15px;
            }

            .text_color{
                color:black;
            }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="div_center">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                        {{session()->get('message')}}
                    </div>
                @endif
                <h2 class="h2_font">Update Product</h2>

                
                <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="div_design">
                    <label class="lavel_design" for="">Product Title : </label>
                    <input required="" type="text" name="title" placeholder="Write title" class="inputblack" value="{{$product->title}}">
                </div>

                <div class="div_design">
                    <label class="lavel_design" for="">Product Description: </label>
                    <input required="" type="text" name="description" placeholder="Write description" class="inputblack" value="{{$product->descrption}}">
                </div>

                <div class="div_design">
                    <label class="lavel_design" for="">Product Price : </label>
                    <input required="" type="number" name="price" placeholder="Write Price" class="inputblack" value="{{$product->price}}">
                </div>

                <div class="div_design">
                    <label class="lavel_design" for="">Discount Price : </label>
                    <input type="number" name="discount_price" placeholder="Write discount_price" class="inputblack" value="{{$product->discount_price}}">
                </div>

                <div class="div_design">
                    <label class="lavel_design" for="">Product Quantity : </label>
                    <input required="" type="number" name="quantity" placeholder="Write quantity" class="inputblack" min="0" value="{{$product->quantity}}">
                </div>

                <div class="div_design">
                    <label class="lavel_design" for="">Product Category : </label>
                    <select name="category" id="" class="text_color">
                        @foreach($category as $category)
                        <option value="" selected=""  value="{{$product->category}}">{{$product->category}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="div_design">
                    <label class="lavel_design" for="">Current Product Image : </label>
                    <img src="/product/{{$product->image}}" alt="" height="100" width="100" style="margin:auto;">
                </div>

                <div class="div_design">
                    <label class="lavel_design" for="">Change Product Image : </label>
                    <input type="file" name="image">
                </div>

                <div class="div_design">
                    <input required="" type="submit" value="Update Product" class
                    ="btn btn-primary">
                </div>
            </form>
          </div>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>