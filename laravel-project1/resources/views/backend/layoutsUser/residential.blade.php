<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Residential form</title>

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
        
        html,body{
          background-color: rgb(18, 8, 221);
          background-size: cover;
          background-repeat: no-repeat;
          height: 100%;
          font-family: 'Numans', sans-serif;
          margin-x: 100px;
          color: rgb(249, 248, 248);
          font-weight: bold;
        }
        footer {
            height: 75px;
            width: 100%;
            background-color: black;
            padding: 10px;
        }

    </style>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  
<div class="container">
  <h2 class="text-center pt-2 pb-3">Registation Form</h2>
  <div class="row">
    <div class="card-body">
      <form method="POST" action="{{route('users.store')}}" id="myForm">
        @csrf
        <div class="form-row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
            <div class="form-group col-12">
              <label for="roll" >Roll</label>
              <input type="text" class="form-control" id="inputRoll" placeholder="Roll">
              <font style="color:red">{{($errors->has('roll'))?($errors->first('roll')):''}}</font>
            </div>
            <div class="form-group col-12">
              <label for="registation" >Registation</label>
              <input type="text" class="form-control" id="inputRegistation" placeholder="Registion">
              <font style="color:red">{{($errors->has('registation'))?($errors->first('registation')):''}}</font>
            </div>
            <div class="form-group col-12">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Email">
              <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
            </div>
            <div class="form-group col-12">
              <label for="usertype">Gender</label>
              <select name="usertype" id="usertype" class="form-control">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Femal">Female</option>
                <option value="Others">Others</option>
              </select>
            </div>
            <div class="form-group col-12">
              <label for="nameB" >Full Name Bangla</label>
              <input type="text" name="nameB" class="form-control" placeholder="Full Name Bangla">
              <font style="color:red">{{($errors->has('nameB'))?($errors->first('nameB')):''}}</font>
            </div>
            <div class="form-group col-12">
              <label for="nameE" >Full Name English</label>
              <input type="text" name="nameE" class="form-control" placeholder="Full Name English">
              <font style="color:red">{{($errors->has('nameE'))?($errors->first('nameE')):''}}</font>
            </div>
            <div class="form-group col-12">
              <label for="name" >Date of Birth</label>
              <input type="Date" name="dateOfBirth" class="form-control" placeholder="Date of Birth">
              <font style="color:red">{{($errors->has('dateOfBirth'))?($errors->first('dateOfBirth')):''}}</font>
            </div>
            <div class="form-group col-12">
              <label for="inputFatherName" >Father's Name</label>
              <input type="text" name="inputFatherName" class="form-control" placeholder="Father' Name">
              <font style="color:red">{{($errors->has('inputFatherName'))?($errors->first('inputFatherName')):''}}</font>
            </div>
            <div class="form-group col-12">
              <label for="inputMotherName" >Mother's Name</label>
              <input type="text" name="inputMotherName" class="form-control" placeholder="Mother's Name">
              <font style="color:red">{{($errors->has('inputMotherName'))?($errors->first('inputMotherName')):''}}</font>
            </div>
            <div class="form-group col-12">
              <label for="inputGardianName" >Gardian's Name</label>
              <input type="text" name="inputGardianName" class="form-control" placeholder="Gardian's Name">
              <font style="color:red">{{($errors->has('inputGardianName'))?($errors->first('inputGardianName')):''}}</font>
            </div>
            

            <!-- <div class="form-group ">
              <input type="submit" name="" value="submit" class="btn btn-primary">
            </div> -->
            <div class="d-grid gap-2 col-2 mx-auto">
              <button class="btn btn-danger button" type="button"><input type="submit" name="" value="submit" class="btn btn-primary"></button>
            </div>
          </div>
          <div class="col-sm-3"></div>
        </div>
      </form>          
    </div>
    
 
  </div>
  

  


<footer class="">
  <strong class="pl-5">Copyright &copy; <?php echo "2015-".date("Y"); ?> <a href="#">BSMRH</a> </strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block pr-3">
    <b >Tanzimul Islam </b>
  </div>
</footer>



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
<!-- <script src="{{asset('public/backend')}}/dist/js/adminlte.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{asset('public/backend')}}/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{asset('public/backend')}}/dist/js/pages/dashboard.js"></script> -->

<!-- DataTables  & Plugins -->
<script src="{{asset('public/backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- jquery-validation -->
<script src="{{asset('public/backend')}}/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/jquery-validation/additional-methods.min.js"></script>
<script type="text/javascript">

    $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert( "Form successful submitted!" );
      }
    });
    $('#myForm').validate({
      rules: {
            roll: {
              required: true,
            },
            registation: {
              required: true,
            },
            email: {
              required: true,
              email: true,
            },
            password : {
              required : true;
            },
            password2 :{
              required : true,
            }
          },
          messages: {
            roll: {
              required: "Please enter roll",
              minlength: "Enter "
            },
            registation: {
              required: "Please enter registation",
            },
            email: {
              required: "Please enter a email address",
              email: "Please enter a valid email address"
            },
            password: {
              required: "Please enter password",
              minlength: "Password will be minimum 6 characters or numbers"
            },
            password2: {
              required: "Please enter confirm password",
              equalTo: "Confirm password does not match"
            }     
          },
          errorElement: 'span',
          errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
          },
          highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
          },
          unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
          }
        });
      });
    </script>

</body>
</html>
