<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('adminlte/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('adminlte/dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{url('adminlte/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{url('adminlte/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{url('adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{url('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  @section('css')
  @show
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  @include('layoutsuser.sidebar')


  @include('layoutsuser.header')

  <div class="content-wrapper">
      @yield('content')
  </div>

@include('layoutsuser.footer')
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{url('adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('adminlte/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{url('adminlte/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{url('adminlte/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{url('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{url('adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('adminlte/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{url('adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{url('adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{url('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('adminlte/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('adminlte/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('adminlte/dist/js/demo.js')}}"></script>

<!-- DataTables -->
<script src="{{url('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script>
  function kelapKelip() {
      $('#coba2').fadeOut(); 
      $('#coba2').fadeIn(); 
      }
  setInterval(kelapKelip, 1000); 
</script>

<script>
  function kelapKelip() {
      $('#coba').fadeOut(); 
      $('#coba').fadeIn(); 
      }
  setInterval(kelapKelip, 400); 
</script>

<script>
  function kelapKelip() {
      $('#coba1').fadeOut(); 
      $('#coba1').fadeIn(); 
      }
  setInterval(kelapKelip, 1400); 
</script>

<script>
  $(function () {
    $('#tq1').DataTable()
    $('#tq2').DataTable({
      'lengthChange': false,
      'paging'      : false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : true
      /*'aLengthMenu' : [[2, 5, 10, 20, -1], [2, 5, 10, 20, "All"]],
      'iDisplayLength': 2*/
    })
    $('#tdash').DataTable({
      'lengthChange': true,
      'paging'      : true,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : true,
      'aLengthMenu' : [[5, 10, 20, -1], [5, 10, 20, "Semua"]],
      'iDisplayLength': 5,
      'language'    :{
        'url': "Indonesian.json"
      }
    })
    $('#tdash2').DataTable({
      'lengthChange': true,
      'paging'      : true,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : true,
      'aLengthMenu' : [[5, 10, 20, -1], [5, 10, 20, "Semua"]],
      'iDisplayLength': 5,
      'language'    :{
        'url': "Indonesian.json"
      }
    })
    $('#tuser').DataTable({
      'lengthChange': true,
      'paging'      : true,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : true,
      'aLengthMenu' : [[3, 5, 10, 20, -1], [3, 5, 10, 20, "Semua"]],
      'iDisplayLength': 3
    })
    $('#datepicker1').datepicker({
      autoclose: true,
      format:'yyyy-mm-dd'
    })
    $('#datepicker2').datepicker({
      autoclose: true,
      format:'yyyy-mm-dd'
    })
    $('#datepicker3').datepicker({
      autoclose: true,
      format: " yyyy",
      viewMode: "years", 
      minViewMode: "years"
    })
  })
</script>
 @section('js')
 
  @show
</body>
</html>