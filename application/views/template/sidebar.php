
<?php 
$apl = $this->db->get("tb_aplikasi")->row();
?>

      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
          <img alt="image" src="<?php echo base_url();?>assets/foto/logo/<?php echo $apl->logo; ?>" width="25px" height="25px" class="rounded-circle mr-1">
            <a href="<?php echo base_url(); ?>dist/index"><?php  echo $apl->nama_owner; ?></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
          <img alt="image" src="<?php echo base_url();?>assets/foto/logo/<?php echo $apl->logo; ?>" width="25px" height="25px" class="rounded-circle mr-1">
          </div>
          <ul class="sidebar-menu">
           
          <!-- <li class="active"><a class="nav-link" href="http://localhost/kepegawaian/dist/credits"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li> -->
  
            <li class=" <?php echo  $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == 'dashboard' ? 'active' : '' ; ?>">
              <a href="<?php echo base_url(); ?>dashboard" class="nav-link "><i class="fas fa-table"></i><span>Dashboard</span></a>
              
            </li>

            <li class=" <?php echo  $this->uri->segment(1) == 'kepegawaian' || $this->uri->segment(1) == 'kepegawaian' ? 'active' : '' ; ?>">
              <a href="<?php echo base_url(); ?>kepegawaian" class="nav-link"><i class="far fa-clipboard"></i><span>Data Kepegawaian</span></a>
            </li>
           
            <li class="<?php echo  $this->uri->segment(1) == 'settings' || $this->uri->segment(1) == 'settings' ? 'active' : '' ; ?>">
              <a href="<?php echo base_url(); ?>settings" class="nav-link"><i class="fas fa-user-cog"></i><span>settings</span></a>
            </li>

            <li class="<?php echo  $this->uri->segment(1) == 'notifikasi' || $this->uri->segment(1) == 'notifikasi' ? 'active' : '' ; ?>">
              <a  href="<?php echo base_url(); ?>notifikasi" class="nav-link"><i class="far fa-bell"></i><span>Notifikasi</span></a>
            </li>
        
     
            <li class="dropdown <?php echo  $this->uri->segment(1) == 'aplikasi' || $this->uri->segment(1) == 'aplikasi' ? 'active' : '' ; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Menu Sistem</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(1) == 'aplikasi' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>aplikasi"><i class="fab fa-blogger"></i>Aplikasi</a></li>
                <!-- <li class="<?php echo $this->uri->segment(1) == 'admin' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>menu"><i class="fab fa-blogger"></i>Menu</a></li>
                <li class="<?php echo $this->uri->segment(1) == 'admin' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>submenu"><i class="fab fa-blogger"></i>Submenu</a></li>
                <li class="<?php echo $this->uri->segment(1) == 'admin' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin"><i class="fab fa-blogger"></i>Admin</a></li>
                <li class="<?php echo $this->uri->segment(1) == 'admin' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>adminlevel"><i class="fab fa-blogger"></i>Admin Level</a></li>
                <li class="<?php echo $this->uri->segment(1) == 'admin' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>login/logout"><i class="fab fa-blogger"></i>Log Out</a></li> -->
              </ul>
            </li>
        

          </ul>

        </aside>
      </div>
