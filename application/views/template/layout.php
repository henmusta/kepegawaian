

      <body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right" id="notif_container">

          <li class="dropdown dropdown-list-toggle">
            <a href="#" data-toggle="dropdown" id="beep" class="nav-link notification-toggle nav-link-lg btn btn-outline-danger" >
              <span id="notif_count" class="label label-danger">0</span>
              <i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">

              <div class="dropdown-list-content dropdown-list-icons" id="notif_ul">
                <!-- <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a> -->

              </div>
              <div class="dropdown-footer text-center">
                <a href="notif_all">Lihat Semua<i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="<?php echo base_url(); ?>assets/foto/admin/<?php echo  $this->session->userdata['image']; ?>"
                class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block"><?php echo  $this->session->userdata['username']; ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?php echo base_url('login/logout') ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>


