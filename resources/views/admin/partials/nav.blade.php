      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                BLOG
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('admin.posts.index')}} " class="nav-link {{ request()->is('admin/posts') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Posts</p>
                </a>
              </li>



              <li class="nav-item">
                <a href=" {{ route('categories.index')}} " class="nav-link {{ request()->is('admin/categories') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Categorias</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href=" {{ route('tag.index')}} " class="nav-link {{ request()->is('admin/tag') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Tag</p>
                </a>
              </li>


              <li class="nav-item">
                <a href=" {{ route('admin.users.index')}} " class="nav-link {{ request()->is('admin/users') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Ver Usuarios</p>
                </a>
              </li>


            </ul>
          </li>




          <li class="nav-item menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                PRODUCTOS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('admin.product.index')}} " class="nav-link {{ request()->is('admin/product') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Ver los Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{ route('categoria.index')}} " class="nav-link {{ request()->is('admin/categoria') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Categorias de productos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('marca.index')}} " class="nav-link {{ request()->is('admin/marca') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Marcas</p>
                </a>
              </li>

            {{-- <li class="nav-item">
                <a href="#" data-toggle="modal" data-target="#exampleModalp" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Crear Productos</p>
                </a>
              </li> --}}

            </ul>
          </li>
       



          <li class="nav-item menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                HOME
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('configurations.edit', 1)}} " class="nav-link {{ request()->is('admin/configurations*') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Configuraciones</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{ route('sliders.index')}} " class="nav-link {{ request()->is('admin/sliders*') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Slider</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('offers.index')}} " class="nav-link {{ request()->is('admin/offers*') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Ofrecemos</p>
                </a>
              </li>


              <li class="nav-item">
                <a href=" {{ route('homeservices.index')}} " class="nav-link {{ request()->is('admin/homeservices*') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p> Servicios del Home</p>
                </a>
              </li>

            </ul>
          </li>




          <li class="nav-item menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                NOSOTROS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('abouts.edit', 1)}} " class="nav-link {{ request()->is('admin/abouts*') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Nosotros</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('whies.index')}} " class="nav-link {{ request()->is('admin/whies*') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Porque Nosotros</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('questions.index')}} " class="nav-link {{ request()->is('admin/questions*') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Preguntas Frecuentes</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{ route('works.index')}} " class="nav-link {{ request()->is('admin/works*') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Trabajos</p>
                </a>
              </li>


              <li class="nav-item">
                <a href=" {{ route('teams.index')}} " class="nav-link {{ request()->is('admin/teams*') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Equipo</p>
                </a>
              </li>




            </ul>
          </li>


          <li class="nav-item menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Hosting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


              <li class="nav-item">
                <a href=" {{ route('hostings.index')}} " class="nav-link {{ request()->is('admin/hostings*') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Hosting</p>
                </a>
              </li>


            </ul>
          </li>




          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Servicios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


              <li class="nav-item">
                <a href=" {{ route('services.index')}} " class="nav-link {{ request()->is('admin/services*') ? 'active' : ''}}">
                  <i class="fa fa-address-book"></i>
                  <p>Servicios</p>
                </a>
              </li>


            </ul>
          </li>








        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      