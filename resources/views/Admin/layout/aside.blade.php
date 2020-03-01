<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 675px;">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div>
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{auth()->user()->image}}" alt="{{auth()->user()->name}}">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{auth()->user()->name}}</a>
          </div>
        </div>
     {{-- @php
         dd(Route::currentRouteName());
     @endphp --}}
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview {{Route::currentRouteName() == 'product.create'? 'menu-open' : ''}} {{Route::currentRouteName() == 'product.index'? 'menu-open' : ''}}">
              <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dashboard "></i>
                <p>
                 محصولات 
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item ">
        
                  <a href={{route("product.create")}} class="nav-link {{Route::currentRouteName() == 'product.create' ? 'active' : '' }}">
                   <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن محصول </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route("product.index")}}" class="nav-link {{Route::currentRouteName() == 'product.index' ? 'active' : '' }}">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>لیست محصولات </p>
                  </a>
                </li>
             
              </ul>
            </li>

            <li class="nav-item has-treeview  {{Route::currentRouteName() == 'color.create' ? 'menu-open' : ''}}{{Route::currentRouteName() == 'cat.index'  ? 'menu-open' : ''}}">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                 امکانات 
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href={{route("color.create")}} class="nav-link {{Route::currentRouteName() == 'color.create' ? 'active' : '' }}">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن رنگ </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href={{route("cat.create")}} class="nav-link {{Route::currentRouteName() == 'cat.' ? 'active' : '' }}">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن برند ها </p>
                  </a>
                </li>
               
             
              </ul>
            </li>

            <li class="nav-item has-treeview {{Route::currentRouteName() == 'slider.create' ? 'menu-open' : ''}}{{Route::currentRouteName() == 'slider.index'  ? 'menu-open' : ''}}">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                 اسلاید
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href={{route("slider.create")}} class="nav-link {{Route::currentRouteName() == 'slider.create' ? 'active' : '' }}">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن اسلاید </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href={{route("slider.index")}} class="nav-link {{Route::currentRouteName() == 'slider.index' ? 'active' : '' }}">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>اسلاید ها </p>
                  </a>
                </li>
               
               
             
              </ul>
            </li>


            <li class="nav-item">
              <a href="{{route("user.index")}}" class="nav-link {{Route::currentRouteName() == 'user.index' ? 'active' : '' }}">
                <i class="nav-icon fa fa-user"></i>
                <p>
                 کاربران
                  
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../widgets.html" class="nav-link">
                <i class="nav-icon fa fa-user"></i>
                <p>
                  ویجت&zwnj;ها
                  
                </p>
              </a>
            </li>


      
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>