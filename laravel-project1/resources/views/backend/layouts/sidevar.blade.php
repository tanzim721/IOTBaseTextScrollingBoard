
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div> 
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">           
            <a href="#" class="nav-link"> 
              <i class="nav-icon fas fa-copy"></i> 
              <p>
                Manage Admin
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Admin</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('profiles.password.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">           
            <a href="#" class="nav-link"> 
              <i class="nav-icon fas fa-copy"></i> 
              <p>
                Manage Visitor
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            {{-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Admin</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('profiles.password.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul> --}}
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu