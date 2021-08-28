
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>dist/index">Gink</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>dist/index">St</a>
          </div>
          <ul class="sidebar-menu">
           

  
            <li class="dropdown <?php echo  $this->uri->segment(1) == 'pegawai' || $this->uri->segment(1) == 'pegawai' ? 'active' : '' ; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-table"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(1) == 'pegawai' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>pegawai"><i class="fab fa-blogger"></i>Pegawai</a></li>
              </ul>
            </li>

            <li class="dropdown <?php echo  $this->uri->segment(1) == 'data-pegawai' || $this->uri->segment(1) == 'data-pegawai' ? 'active' : '' ; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-clipboard"></i><span>Data Kepegawaian</span></a>
              <ul class="dropdown-menu">
              <li class="<?php echo $this->uri->segment(1) == 'pegawai' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>kepegawaian"><i class="fab fa-blogger"></i>Kepegawaian</a></li>
              </ul>
            </li>
           
            <li class="dropdown <?php echo  $this->uri->segment(1) == 'settings' || $this->uri->segment(1) == 'settings' ? 'active' : '' ; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-cog"></i><span>settings</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(1) == 'settings' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>settings"><i class="fab fa-blogger"></i>Settings</a></li>
              </ul>
            </li>

            <li class="dropdown <?php echo  $this->uri->segment(1) == 'notifikasi' || $this->uri->segment(1) == 'notifikasi' ? 'active' : '' ; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-bell"></i><span>Notifikasi</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(1) == 'notifikasi' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>notifikasi"><i class="fab fa-blogger"></i>Notifikasi</a></li>
              </ul>
            </li>
        
     
            <li class="dropdown <?php echo  $this->uri->segment(1) == 'aplikasi' || $this->uri->segment(1) == 'aplikasi' ? 'active' : '' ; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Menu Sistem</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(1) == 'aplikasi' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>aplikasi"><i class="fab fa-blogger"></i>Aplikasi</a></li>
                <li class="<?php echo $this->uri->segment(1) == 'admin' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>menu"><i class="fab fa-blogger"></i>Menu</a></li>
                <li class="<?php echo $this->uri->segment(1) == 'admin' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>submenu"><i class="fab fa-blogger"></i>Submenu</a></li>
                <li class="<?php echo $this->uri->segment(1) == 'admin' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin"><i class="fab fa-blogger"></i>Admin</a></li>
                <li class="<?php echo $this->uri->segment(1) == 'admin' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>adminlevel"><i class="fab fa-blogger"></i>Admin Level</a></li>
                <li class="<?php echo $this->uri->segment(1) == 'admin' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>login/logout"><i class="fab fa-blogger"></i>Log Out</a></li>
              </ul>
            </li>
        

          </ul>
          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>
        </aside>
      </div>
