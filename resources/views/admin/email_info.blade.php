<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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

    <style>
        label{
            width: 150px;

            display: inline-block;
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
            <h1 style="text-align:center; font-size:25px;">Send Email to{{$order->email}}</h1>

            <form action="{{url('send_user_email',$order->id)}}" method="POST">
                @csrf
                <div class="" style="padding-left:35%; padding-top:30px;">
                    <label for="">Email Greeting</label>

                    <input style="color:black;" type="text" name="greeting">
                </div>

                <div class="" style="padding-left:35%; padding-top:30px;">
                    <label for="">First Line</label>

                    <input style="color:black;" type="text" name="firstline">
                </div>

                <div class="" style="padding-left:35%; padding-top:30px;">
                    <label for="">Email Body:</label>

                    <input style="color:black;" type="text" name="emailbody">
                </div>

                <div class="" style="padding-left:35%; padding-top:30px;">
                    <label for="">Email Button:</label>

                    <input style="color:black;" type="text" name="button">
                </div>

                <div class="" style="padding-left:35%; padding-top:30px;">
                    <label for="">Email Url:</label>

                    <input style="color:black;" style="color:black;" type="text" name="url">
                </div>

                <div class="" style="padding-left:35%; padding-top:30px;">
                    <label for="">Email Lastline:</label>

                    <input style="color:black;" type="text" name="lastline">
                </div>

                <div class="" style="padding-left:35%; padding-top:30px;">

                    <input style="color:black;" type="submit" value="Send Email" class="btn btn-primary">
                </div>

            </form>
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