<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Custom fonts for this template-->
  <link href="{{env('PUBLIC_PATH')}}/admin_resource/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{env('PUBLIC_PATH')}}/admin_resource/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{env('PUBLIC_PATH')}}/admin_resource/css/sb-admin.css" rel="stylesheet">

   <link rel="{{env('PUBLIC_PATH')}}/admin_resource/css/jquery-ui.css" />

    

</head>

<body id="page-top">
@include('admin.layouts.main_menu')
<div id="wrapper">

<!-- Sidebar -->
@include('admin.layouts.sidebar')
@yield('content')
</div>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="#">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{env('PUBLIC_PATH')}}/admin_resource/vendor/jquery/jquery.min.js"></script>
  <script src="{{env('PUBLIC_PATH')}}/admin_resource/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{env('PUBLIC_PATH')}}/admin_resource/vendor/jquery-easing/jquery.easing.min.js"></script>
<script> var baseURL = '{{url('/')}}'</script>
<script> var token = '{{csrf_token()}}'</script>
  <!-- Page level plugin JavaScript-->
  <script src="{{env('PUBLIC_PATH')}}/admin_resource/vendor/chart.js/Chart.min.js"></script>
  <script src="{{env('PUBLIC_PATH')}}/admin_resource/vendor/datatables/jquery.dataTables.js"></script>
  <script src="{{env('PUBLIC_PATH')}}/admin_resource/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{env('PUBLIC_PATH')}}/admin_resource/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="{{env('PUBLIC_PATH')}}/admin_resource/js/demo/datatables-demo.js"></script>
  <script src="{{env('PUBLIC_PATH')}}/admin_resource/js/demo/chart-area-demo.js"></script>
  <script src="{{env('PUBLIC_PATH')}}/admin_resource/js/jquery-2.1.3.js"></script>
    <script src="{{env('PUBLIC_PATH')}}/admin_resource/js/jquery-ui.js"></script>
@yield('script')
</body>

</html>
