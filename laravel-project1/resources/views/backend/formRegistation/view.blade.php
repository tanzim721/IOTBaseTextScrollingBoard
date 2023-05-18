<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/summernote/summernote-bs4.min.css">
  <!-- jQuery -->
  <script src="{{asset('public/backend')}}/plugins/jquery/jquery.min.js"></script>
  <!-- notify js cdn -->
  <style type="text/css">
    .notifyjs-corner{
      z-index: 1000 !important;
    }
    /*footer {
            position: fixed;
            height: 50px;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            padding: 10px;
        }*/
        
  </style>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
      @include('backend.layoutsUser.sidevar')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Students details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                Student Details
                <!-- <a class="btn btn-success float-right btn-sm" href="{{route('users.add')}}"><i class="fa fa-plus-circle"></i> Add Student</a> -->
                
              </div><!-- /.card-header -->
              <div class="card-body">
                <!-- <table id="example1" class="table table-bordered table-hover"> -->
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>SN.</th>
                      <th>Roll</th>
                      <th>Registation</th>
                      <th>Email</th>
                      <th>Gender</th>
                      <th>Full name in Bangla</th>
                      <th>Full name in English</th>
                      <th>Date of Birth</th>
                      <th>Father's name</th>
                      <th>Mother's name</th>
                      <th>Gardian's name</th>
                      <th>Address</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($allData as $key => $student)
                    <tr>
                      <td>{{$key+1}}.</td>
                      <td>{{$student->userRoll}}</td>
                      <td>{{$student->userRegistation}}</td>
                      <td>{{$student->email}}</td>
                      <td>{{$student->gender}}</td>
                      <td>{{$student->bName}}</td>
                      <td>{{$student->eName}}</td>
                      <td>{{$student->birth}}</td>
                      <td>{{$student->fName}}</td>
                      <td>{{$student->mName}}</td>
                      <td>{{$student->gName}}</td>
                      <td>{{$student->address}}</td>
                      <td>
                        <a href="" class="btn btn-sam btn-primary" title="Edit"><i class="fa fa-edit"></i></a> 
                        <a href="" class="btn btn-sm btn-danger" id="delete" title="Delete"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>  
              </div>
              <!-- /.card-body -->
            </div>

          </section>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @if(session()->has('success'))
    <script type="text/javascript">
      $(function(){
        $.notify("{{session()->get('success')}}",{globalPosition:'top center', className:'success'});
      });
    </script>
  @endif


  <div class="">
    <footer class="main-footer ">
      <strong>Copyright &copy; <?php echo "2015-".date("Y"); ?> <a href="#">BSMRH</a> </strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b class="pr-1">Tanzimul Islam </b>
      </div>
    </footer>
  </div>
  

  <!-- <aside class="control-sidebar control-sidebar-dark">
  </aside> -->
</div>

<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/backend')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('public/backend')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('public/backend')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('public/backend')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/backend')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('public/backend')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public/backend')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('public/backend')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/backend')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/backend')}}/dist/js/adminlte.js"></script> 
<!-- AdminLTE for demo purposes -->
 <!-- <script src="{{asset('public/backend')}}/dist/js/demo.js"></script>  -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="{{asset('public/backend')}}/dist/js/pages/dashboard.js"></script> 

<!-- DataTables  & Plugins -->
<script src="{{asset('public/backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- jquery-validation -->
<script src="{{asset('public/backend')}}/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/jquery-validation/additional-methods.min.js"></script>
<script>
  
</script>
<script type="text/javascript">
  
</script>
</body>
</html>




