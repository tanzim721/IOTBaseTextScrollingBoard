<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registation Page</title>
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
      <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <style type="text/css">
        
        html,body{
          background-image: url('https://image.shutterstock.com/image-photo/old-brick-black-color-wall-260nw-1605128917.jpg');
          background-size: cover;
          background-repeat: no-repeat;
          height: 100%;
          font-family: 'Numans', sans-serif;
          margin-x: 100px;
          color: whitesmoke;
          font-weight: bold;

        }

        .container{
            height: 100%;
            align-content: center;
        }

        .card{
            height: auto;
            margin-top: auto;
            margin-bottom: auto;
            width: auto;
            background-color: rgba(0,0,0,0.5) !important;
        }
        /*.button{
            height: 550px;
            margin-top: auto;
            margin-bottom: auto;
            width: 700px;
            background-color: rgba(0,0,0,0.5) !important;
        }*/
        .content-header{
          text-align: center;
        }

    </style>
</head>
<body>


    <!-- Content Wrapper. Contains page content -->
    <div class="conatiner">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-12">
                <h1 class="m-0 pt-4">Registation Form</h1>
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
              <section class="col-3"></section>
              <section class="col-6 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                 
                  <div class="card-body">
                    <form method="POST" action="{{route('users.store')}}" id="myForm">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-12">
                          <label for="usertype">User Role</label>
                          <select name="usertype" id="usertype" class="form-control">
                            {{-- <option value="">Select Role</option> --}}
                            <option value="Admin">Admin</option>
                            {{-- <option value="User">User</option> --}}
                          </select>
                        </div>
                        <div class="form-group col-12">
                          <label for="name" >Name</label>
                          <input type="text" name="name" class="form-control">
                          <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                        </div>
                        <div class="form-group col-12">
                          <label for="email">Email</label>
                          <input type="email" name="email" class="form-control">
                          <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                        </div>
                        <div class="form-group col-12">
                          <label for="password">Password</label>
                          <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group col-12">
                          <label for="password">Confirm Password</label>
                          <input type="passward" name="password2" class="form-control">
                        </div>

                        <!-- <div class="form-group ">
                          <input type="submit" name="" value="submit" class="btn btn-primary">
                        </div> -->
                        <div class="d-grid gap-2 col-2 mx-auto">
                          
                          <button class="btn btn-primary button" type="button"><input type="submit" name="" value="Submit" class="btn btn-primary"></button>
                        </div>
                      </div>
                    </form>          
                  </div>
                  <!-- /.card-body -->
                </div>

              </section>
              <section class="col-3"></section>

            </div>
            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
    </div>
      
  
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>