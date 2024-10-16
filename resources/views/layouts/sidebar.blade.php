<div class="sidebar">
  <!-- SidebarSearch Form -->
  <div class="form-inline mt-2">
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
          <li class="nav-item">
              <a href="{{ url('/') }}" class="nav-link {{ $activeMenu == 'dashboard' ? 'active' : '' }} ">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
              </a>
          </li>
          <li class="nav-header">Kegiatan</li>
          <li class="nav-item">
              <a href="{{ url('/') }}" class="nav-link {{ $activeMenu == 'kegiatan' ? 'active' : '' }} ">
                  <i class="nav-icon fas fa-calendar-alt"></i> <!-- Mengganti logo dengan ikon yang sesuai -->
                  <p>Kegiatan Agenda</p>
              </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link {{ $activeMenu == 'kegiatan' ? 'active' : '' }} ">
                <i class="fa-solid fa-square-person-confined"></i>"></i> <!-- Mengganti logo dengan ikon yang sesuai -->
                <p>Kegiatan </p>
            </a>
        </li>
          <li class="nav-item">
              <a href="{{ url('/') }}" class="nav-link {{ $activeMenu == 'dosen' ? 'active' : '' }} ">
                  <i class="nav-icon fas fa-chalkboard-teacher"></i> <!-- Mengganti logo dengan ikon yang sesuai -->
                  <p>Dosen</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('/') }}" class="nav-link {{ $activeMenu == 'repository' ? 'active' : '' }} ">
                  <i class="nav-icon fas fa-book"></i> <!-- Mengganti logo dengan ikon yang sesuai -->
                  <p>Repository</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('/') }}" class="nav-link {{ $activeMenu == 'saran' ? 'active' : '' }} ">
                  <i class="nav-icon fas fa-comments"></i> <!-- Mengganti logo dengan ikon yang sesuai -->
                  <p>Saran</p>
              </a>
          </li>
      </ul>
  </nav>
</div>
