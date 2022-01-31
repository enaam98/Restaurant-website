<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('/home')}}" class="brand-link">
      <img src="{{asset('/BackEndSourseFile')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Site Logo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/BackEndSourseFile')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        
        <div class="info">
          <a href="#" class="d-block">  </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
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
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('show_cate_table')}}" class="nav-link active">
                  <i class="fa fa-plus-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_cate')}}" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Manage Category</p>
                </a>
              </li>
            </ul>
          </li>
       

           {{-- ========Delivery Boy Side======================--}}
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-car-alt"></i>
              <p>
                Delivery Boy
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('show_deliveryBoy_add_table')}}" class="nav-link active">
                  <i class="fa fa-plus-circle nav-icon"></i>
                  <p>Add delivery boy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('delivery_boy_manage')}}" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Manage delivery boy</p>
                </a>
              </li>
            </ul>
          </li>
       
 {{-- ========Dish Side======================--}}
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="fas fa-hamburger"></i>
              <p>
                Dish
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('show_dish_table')}}" class="nav-link active">
                  <i class="fa fa-plus-circle nav-icon"></i>
                  <p>Generate Dish </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_dish_table')}}" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Manage Dish </p>
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