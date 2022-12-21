  <!-- Main Sidebar  -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="{{ route('dashboard.index') }}" class="brand-link">
      <!-- <img src="{{asset('AdminLTE')}}/dist/img/logo-esteh.png" alt="logo esteh" class=" w-25 h-25 items-center " > -->
      <span class="brand-text ml-3 fw-bold">Esteh Creative</span>
    </a>
    {{-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake w-75" src="{{asset('AdminLTE')}}/dist/img/logo-esteh.png" alt="AdminLTELogo" >
    </div> --}}
    <!-- Akhir Brand Logo -->

    <!-- Sidebar Menu -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dashboard.index') }}" class="nav-link ">
                <i class="nav-icon fa-solid fa-house"></i>
                  <p>Home</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('updateblog.index') }}" class="nav-link">          
              <i class="nav-icon fa-solid fa-newspaper"></i>
              <p>
                Artikel
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('updateteam.index') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Team
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('updateportfolio.index') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Portfolio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('internship.index') }}" class="nav-link">
              <i class="nav-icon fas fa-handshake "></i>
              <p>
                Internship
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fa-solid fa-right-from-bracket"></i>
              <p>
                logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- Akhir sidebar menu -->
 
  </aside>
  <!-- Akhir main sidebar  -->