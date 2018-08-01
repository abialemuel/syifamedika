<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('admin.dashboard') }}" class="brand-link">
    {{-- <img src="/admin/dist/img/logo.png" alt="" class="brand-image img"
         style="opacity: .8"> --}}
    <span class="brand-text font-weight-light" align="center"><b>RSU Syifa Medika</b></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/admin/dist/img/user-rsu.jpeg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->karyawan->nama_karyawan }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-header">MAIN MENU</li>
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>Dashboard</p>
            </a>
          </li>
        <li class="nav-item has-treeview menu">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-user-md"></i>
            <p>
              Dokter
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('dokter.create') }}" class="nav-link">
                <i class="fa fa-plus-square nav-icon"></i>
                <p>Tambah</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('dokter.index') }}" class="nav-link">
                <i class="fa fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>

          </ul>
        </li>
        <li class="nav-item has-treeview menu">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>
              Pasien
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./index.html" class="nav-link">
                <i class="fa fa-list nav-icon"></i>
                <p>List</p>
              </a>
            </li>

          </ul>
        </li>
        <li class="nav-item has-treeview menu">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-newspaper-o"></i>
            <p>
              Artikel
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('artikel.create') }}" class="nav-link">
                <i class="fa fa-plus-square nav-icon"></i>
                <p>Tambah</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('artikel.index') }}" class="nav-link">
                <i class="fa fa-list nav-icon"></i>
                <p>List</p>
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
