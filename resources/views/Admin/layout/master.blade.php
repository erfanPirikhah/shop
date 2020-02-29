<html style="height: auto;"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پنل مدیریت | داشبورد اول</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/admin/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/admin/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/admin/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="/admin/dist/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="/admin/dist/css/custom-style.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  
  <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <body class="sidebar-mini" style="height: auto;">

    @include('sweet::alert')
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- Navbar -->
      @include('Admin.layout.nav')
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
          @include('Admin.layout.aside')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height: 675px;">

      

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
      </div>


    </div>


    <!-- ./alart ------------------- -->
    <script>
      function archiveFunction() {
          event.preventDefault(); // prevent form submit
          var form = event.target.form; // storing the form
                  swal({
            title: "آیا مطعمن هستید ؟",
            //  text: "But you will still be able to retrieve this file.",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "بله!",
            cancelButtonText: "خیر",
            closeOnConfirm: false,
            closeOnCancel: false
          },
          function(isConfirm){
            if (isConfirm) {
              form.submit();          // submitting the form when user press yes
            } else {
              swal("عملیات موفقیت آمیز نبود ");
            }
          });
       }
    </script>

      <!-- ./ end alart ------------------- -->

    <!-- ./wrapper -->
    
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    

    </body>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="/admin/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="/admin/plugins/morris/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/knob/jquery.knob.js"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
  <script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="/admin/plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="/admin/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="/admin/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/admin/dist/js/demo.js"></script>
  @yield('script')

  
  <div class="daterangepicker dropdown-menu opensright"><div class="calendar first right"><div class="calendar-date"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i></th><th colspan="5" class="month">Feb 2020</th><th class="next available"><i class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="available off in-range" data-title="r0c0">26</td><td class="available off in-range" data-title="r0c1">27</td><td class="available off in-range" data-title="r0c2">28</td><td class="available off in-range" data-title="r0c3">29</td><td class="available off in-range" data-title="r0c4">30</td><td class="available off in-range" data-title="r0c5">31</td><td class="available in-range" data-title="r0c6">1</td></tr><tr><td class="available in-range" data-title="r1c0">2</td><td class="available in-range" data-title="r1c1">3</td><td class="available in-range" data-title="r1c2">4</td><td class="available in-range" data-title="r1c3">5</td><td class="available in-range" data-title="r1c4">6</td><td class="available in-range" data-title="r1c5">7</td><td class="available in-range" data-title="r1c6">8</td></tr><tr><td class="available in-range" data-title="r2c0">9</td><td class="available in-range" data-title="r2c1">10</td><td class="available in-range" data-title="r2c2">11</td><td class="available in-range" data-title="r2c3">12</td><td class="available in-range" data-title="r2c4">13</td><td class="available in-range" data-title="r2c5">14</td><td class="available in-range" data-title="r2c6">15</td></tr><tr><td class="available in-range" data-title="r3c0">16</td><td class="available in-range" data-title="r3c1">17</td><td class="available in-range" data-title="r3c2">18</td><td class="available in-range" data-title="r3c3">19</td><td class="available in-range" data-title="r3c4">20</td><td class="available in-range" data-title="r3c5">21</td><td class="available in-range" data-title="r3c6">22</td></tr><tr><td class="available active end-date" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available" data-title="r4c5">28</td><td class="available" data-title="r4c6">29</td></tr><tr><td class="available off" data-title="r5c0">1</td><td class="available off" data-title="r5c1">2</td><td class="available off" data-title="r5c2">3</td><td class="available off" data-title="r5c3">4</td><td class="available off" data-title="r5c4">5</td><td class="available off" data-title="r5c5">6</td><td class="available off" data-title="r5c6">7</td></tr></tbody></table></div></div><div class="calendar second left"><div class="calendar-date"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i></th><th colspan="5" class="month">Jan 2020</th><th class="next available"><i class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="available off" data-title="r0c0">29</td><td class="available off" data-title="r0c1">30</td><td class="available off" data-title="r0c2">31</td><td class="available" data-title="r0c3">1</td><td class="available" data-title="r0c4">2</td><td class="available" data-title="r0c5">3</td><td class="available" data-title="r0c6">4</td></tr><tr><td class="available" data-title="r1c0">5</td><td class="available" data-title="r1c1">6</td><td class="available" data-title="r1c2">7</td><td class="available" data-title="r1c3">8</td><td class="available" data-title="r1c4">9</td><td class="available" data-title="r1c5">10</td><td class="available" data-title="r1c6">11</td></tr><tr><td class="available" data-title="r2c0">12</td><td class="available" data-title="r2c1">13</td><td class="available" data-title="r2c2">14</td><td class="available" data-title="r2c3">15</td><td class="available" data-title="r2c4">16</td><td class="available" data-title="r2c5">17</td><td class="available" data-title="r2c6">18</td></tr><tr><td class="available" data-title="r3c0">19</td><td class="available" data-title="r3c1">20</td><td class="available" data-title="r3c2">21</td><td class="available" data-title="r3c3">22</td><td class="available" data-title="r3c4">23</td><td class="available" data-title="r3c5">24</td><td class="available active start-date" data-title="r3c6">25</td></tr><tr><td class="available in-range" data-title="r4c0">26</td><td class="available in-range" data-title="r4c1">27</td><td class="available in-range" data-title="r4c2">28</td><td class="available in-range" data-title="r4c3">29</td><td class="available in-range" data-title="r4c4">30</td><td class="available in-range" data-title="r4c5">31</td><td class="available off in-range" data-title="r4c6">1</td></tr><tr><td class="available off in-range" data-title="r5c0">2</td><td class="available off in-range" data-title="r5c1">3</td><td class="available off in-range" data-title="r5c2">4</td><td class="available off in-range" data-title="r5c3">5</td><td class="available off in-range" data-title="r5c4">6</td><td class="available off in-range" data-title="r5c5">7</td><td class="available off in-range" data-title="r5c6">8</td></tr></tbody></table></div></div><div class="ranges"><ul><li>Today</li><li>Yesterday</li><li>Last 7 Days</li><li class="active">Last 30 Days</li><li>This Month</li><li>Last Month</li><li>Custom Range</li></ul><div class="range_inputs"><div class="daterangepicker_start_input"><label for="daterangepicker_start">From</label><input class="input-mini" type="text" name="daterangepicker_start" value=""></div><div class="daterangepicker_end_input"><label for="daterangepicker_end">To</label><input class="input-mini" type="text" name="daterangepicker_end" value=""></div><button class="applyBtn btn btn-small btn-sm btn-success">Apply</button>&nbsp;<button class="cancelBtn btn btn-small btn-sm btn-default">Cancel</button></div></div></div><div class="jvectormap-label"></div></body></html>