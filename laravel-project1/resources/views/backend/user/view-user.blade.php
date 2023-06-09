@extends('backend.layouts.master')
@section('title', 'Admin')
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
                User List
                <a class="btn btn-success float-right btn-sm" href="{{route('users.add')}}"><i class="fa fa-plus-circle"></i> Add Admin</a>
                
              </div><!-- /.card-header -->
              <div class="card-body">
                <!-- <table id="example1" class="table table-bordered table-hover"> -->
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>SN.</th> 
                      <th>Role</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($allData as $key => $user)   
                    <tr>
                      <td>{{$key+1}}.</td>
                      <td>{{$user->usertype}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>
                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a> 
                        <a href="{{route('users.delete',$user->id)}}" class="btn btn-sm btn-danger" id="delete" title="Delete"><i class="fa fa-trash"></i></a>
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
@endsection