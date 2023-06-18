<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
        .title_deg{
            text-align:center;
            font-weight:bold;
            font-size:25px;
            padding-bottom:40px;
        }

        .table_deg{
          border:2px solid white;
          width: 70%;
          margin:auto;
          text-align:center;
        }

        .th_deg{
          background-color:blue;
        }
    </style>
    <!-- Required meta tags -->
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
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
                <h1 class="title_deg">All Orders</h1>

                <table class="table_deg">
                    <tr class="th_deg">
                        <th >Name</th>
                        <th>Email</th>
                        <th >Address</th>
                        <th >Product-title</th>
                        <th >Quantity</th>
                        <th >Prince</th>
                        <th >Payment Status</th>
                        <th >Delivery Status</th>
                        <th >Image</th>
                        <th >Delivered</th>
                        <th >Print PDF</th>
                        <th >Send Email</th>
                    </tr>
                  @foreach($order as $order)
                    <tr>
                      <td>{{$order->name}}</td>
                      <td>{{$order->email}}</td>
                      <td>{{$order->address}}</td>
                      <td>{{$order->product_title}}</td>
                      <td>{{$order->quantity}}</td>
                      <td>{{$order->price}}</td>
                      <td>{{$order->payment_status}}</td>
                      <td>{{$order->delivery_status}}</td>
                      <td>
                        <img src="/product/{{$order->image}}" alt="">
                      </td>
                    <td>
                    @if($order->delivery_status=='processing')
                    <a href="{{url('delivered',$order->id)}}" class="btn btn-primary" onclick="return confirm('Are you Sure this Product is Delivered')">Delivered</a>
                    @else
                    <p>Delivered</p>
                    @endif
                    </td>
                    <td><a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print PDF</a></td>
                    <td><a href="{{url('send_email',$order->id)}}" class="btn btn-info">Send Email</a></td>
                    </tr>
                  @endforeach
                </table>
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