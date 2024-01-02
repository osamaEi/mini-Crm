<!DOCTYPE html>
<html lang="en">

@include('admin.body.header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
  

      <!-- Messages Dropdown Menu -->
 
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <li>
							</li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
<span>{{Auth::user()->name}}<br>
</span>          
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item d-flex align-items-center" href="{{route('employee.logout')}}"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
    
       
        </div>
      </li>
 
  
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light" style="padding-left: 32px;">Employee CRM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


  

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
     
       
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Customers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="{{route('action.type.employee')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Actions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employee.customers')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add new Customer</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <p>
          <i class="nav-icon fas fa-book"></i>
              <p>
                reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="{{route('reports.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add report</p>
                </a>
              </li>
           
            </ul>
          </li>
 

  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">


        @yield('employee')    
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin.body.footer')

</body>
</html>
