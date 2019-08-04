  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url('img/logo.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ url('/dashboard') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-bullhorn"></i> <span>Pengumuman</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('data_pengumuman') }}"><span>List Pengumuman</span></a></li>
            <li><a href="{{ url('form_pengumuman') }}"><span>Form Pengumuman</span></a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-university"></i> <span>sekolah</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/sekolah') }}"><span>List Sekolah</span></a></li>
            <li><a href="{{ url('/sekolah/add') }}"><span>Form Sekolah</span></a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-user"></i><span>Siswa</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/data_siswa') }}"><span>Data Siswa</span></a></li>
            <li><a href="{{ url('/data_siswa/add') }}"><span>Form Siswa</span></a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>