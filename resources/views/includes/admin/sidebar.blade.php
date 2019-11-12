


    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/AdminFILE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN PANEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= userProfileImage(Auth::user()->id) ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url(Auth::user()->role)}}" class="d-block">{{\Auth::user()->name}}</a>
          <span>{{Auth::user()->role == "admin" ? "Admin" : "Super Admin"}}</span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url(route('admin_dashboard'))}}" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            
          </li>
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Category Management
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview  <?= ActiveMenu(['list_category','create_category','edit_category'],'show') ?>">
                  <li class="nav-item <?= ActiveMenu(['list_category','create_category','edit_category'],'active') ?>">
                    <a href="{{ route('list_category') }}" class="nav-link">
                       <i class="fa fa-caret-right nav-icon"></i>
                      <p>Categories</p>
                    </a>
                  </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Event/Celebration Types
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview  <?= ActiveMenu(['list_events','create_category','edit_category'],'show') ?>">
                  <li class="nav-item <?= ActiveMenu(['list_events','create_category','edit_category'],'active') ?>">
                    <a href="{{ route('list_events') }}" class="nav-link">
                       <i class="fa fa-caret-right nav-icon"></i>
                      <p>Event Types</p>
                    </a>
                  </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
               Settings
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview  <?= ActiveMenu(['admin_settings'],'show') ?>">
                  <li class="nav-item <?= ActiveMenu(['admin_settings'],'active') ?>">
                    <a href="{{ route('admin_settings') }}" class="nav-link">
                       <i class="fa fa-caret-right nav-icon"></i>
                      <p>Profile</p>
                    </a>
                  </li>

                  <li class="nav-item <?= ActiveMenu(['admin_logout'],'active') ?>">
                    <a href="{{ route('admin_logout') }}" class="nav-link">
                       <i class="fa fa-caret-right nav-icon"></i>
                      <p>Logout</p>
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