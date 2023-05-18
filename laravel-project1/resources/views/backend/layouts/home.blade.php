@extends('backend.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header --> 
 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="small-box bg-info"> 
              <div class="inner text-center">
                <h3>{{ \App\User::all()->count() }}</h3>
                <p>Total Students</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('users.view')}}" class="small-box-footer">View Students <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="small-box bg-info"> 
              <div class="inner text-center">
                <h3>00</h3>
                <p>Registation Form </p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('layoutsUser.index')}}" class="small-box-footer">View Form <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>   
          <div class="col-lg-4">
            <div class="small-box bg-info"> 
              <div class="inner text-center">
                <h3>Id:</h3>
                <p>Profile view</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('layoutsUser.view')}}" class="small-box-footer">View<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>         
        </div>
        
      </div>
    </section>
    

  </div>
@endsection