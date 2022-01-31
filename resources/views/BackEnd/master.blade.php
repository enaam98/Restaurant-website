
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('/BackEndSourseFile')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/BackEndSourseFile')}}/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{asset('/BackEndSourseFile')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


  @include('BackEnd.include.menu')
  

  @include('BackEnd.include.sidebar')


  <div class="content-wrapper">

    
    <div class="content-header">
      <div class="container-fluid">
        @yield('content')
       
         
        </div>
      </div>
    </div>
    </div>
    
   

  @include('BackEnd.include.footer')



</div>


<!-- jQuery -->
<script src="{{asset('/BackEndSourseFile')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/BackEndSourseFile')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('/BackEndSourseFile')}}/dist/js/adminlte.min.js"></script>
<script src="{{asset('/BackEndSourseFile')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('/BackEndSourseFile')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
     
    });
  });
</script>
</body>
</html>
