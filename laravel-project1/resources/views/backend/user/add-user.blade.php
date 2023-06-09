@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
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
                Add User
                <a class="btn btn-success float-right btn-sm" href="{{route('users.view')}}"><i class="fa fa-list"></i> View List</a>
                
              </div><!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="{{route('users.store')}}" id="myForm">
                  @csrf
                  <div class="form-row">
                    
                    <div class="form-group col-md-4">
                      <label for="name" >Name</label>
                      <input type="text" name="name" class="form-control">
                      <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email">Email</label>
                      <label for="usertype">User Role</label>
                      <select name="usertype" id="usertype" class="form-control">
                        <option value="">Select Role</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" >Email</label>
                      <input type="email" name="email" class="form-control">
                      <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="password">Confirm Password</label>
                      <input type="passward" name="password2" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="submit" name="" value="submit" class="btn btn-primary">
                    </div>
                  </div>
                </form>          
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
  <script type="text/javascript">

    $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert( "Form successful submitted!" );
      }
    });
    $('#myForm').validate({
      rules: {
            name: {
              required: true,
            },
            usertype: {
              required: true,
            },
            email: {
              required: true,
              email: true,
            },
            password : {
              required : true;
              minlength : 6
            },
            password2 :{
              required : true,
              equalTo : '#password'
            }
          },
          messages: {
            name: {
              required: "Please enter username",
            },
            usertype: {
              required: "Please select user role",
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
@endsection