      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Principal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('admin.posts.index')}} " class="nav-link {{ request()->is('admin/posts') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Ver los Posts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{ route('categories.index')}} " class="nav-link {{ request()->is('admin/categories') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Categorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear los Posts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      