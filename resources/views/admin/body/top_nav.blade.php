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

      
              <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
<span>{{Auth::user()->name}}<br>
</span>          
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.logout') }}"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
    
       
        </div>
      </li>
    </ul>
  </nav>