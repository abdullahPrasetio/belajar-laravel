<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">BERANDA</li>
        <li><a href="{{ url('/') }}"><i class="fa fa-fw fa-home"></i> Home</span></a></li>

        <li class="{{ (Request::path() == 'admin/banner') ? 'active' : '' }}"><a href="{{ url('/admin/banner') }}"><span class="glyphicon glyphicon-modal-window"></span> Banner</span></a></li>


        <li class="header">MANAGE PENGANTIN</li>
        <li class="treeview {{ ( Request::segment(2) == 'penganten' ) ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-fw fa-heart"></i> <span>Tentang Penganten</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li class="{{ (Request::path() == 'admin/penganten') ? 'active' : '' }}"><a href="{{ url('admin/penganten') }}"><i class="fa fa-circle-o"></i> Perkenalan</a></li>

            <li class="{{ (Request::path() == 'admin/penganten/story') ? 'active' : '' }}"><a href="{{ url('admin/penganten/story') }}"><i class="fa fa-circle-o"></i> Kisah Mereka</a></li>

          </ul>
        </li>





        <li class="header">MANAGE ACARA</li>
        <li class="treeview {{ ( Request::segment(2) == 'acara' ) ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-fw fa-calendar-check-o"></i> <span>Manage Acara</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li class="{{ (Request::path() == 'admin/acara') ? 'active' : '' }}"><a href="{{ url('admin/acara') }}"><i class="fa fa-circle-o"></i> Jadwal Acara</a></li>

          </ul>
        </li>
        <li class="treeview {{ ( Request::segment(2) == 'jasa' ) ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-fw fa-calendar-check-o"></i> <span>Jasa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li class="{{ (Request::path() == 'admin/jasa') ? 'active' : '' }}"><a href="{{ url('admin/jasa') }}"><i class="fa fa-circle-o"></i> Yg Digunakan</a></li>

          </ul>
        </li>




        
        <li class="header">OTHER</li>
        <li><a href="{{ url('my-service') }}"><i class="fa fa-book"></i> <span>Jasa Pembuatan Web</span></a></li>
        <li><a href="{{ url('keluar') }}"><i class="fa fa-book"></i> <span>Keluar</span></a></li>

      </ul>
    </section>