  <!-- Page Wrapper -->
  <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>index.html">
              <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fas fa-laugh-wink"></i>
              </div>
              <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url() ?>index.html">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
              Data Pemilih
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="<?php echo base_url() ?>#" data-toggle="collapse" data-target="#pemilih" aria-expanded="true" aria-controls="pemilih">
                  <i class="fas fa-users"></i>
                  <span>PEMILIH</span>
              </a>
              <div id="pemilih" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="<?php echo base_url('pemilih/pemilih/index') ?>">Data Pemilih</a>
                      <a class="collapse-item" href="<?php echo base_url('pemilih/pemilih/tambah') ?>">Tambah Daftar Pemilih</a>
                  </div>
              </div>
          </li>

          <div class="sidebar-heading">
              Pemilihan
          </div>
          <li class="nav-item">
              <a class="nav-link collapsed" href="<?php echo base_url() ?>#" data-toggle="collapse" data-target="#calon" aria-expanded="true" aria-controls="collapseTwo">
                  <i class="fas fa-user"></i>
                  <span>CALON</span>
              </a>
              <div id="calon" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="<?php echo base_url('calon/home/index') ?>">Data Calon Ketua</a>
                  </div>
              </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>/suara/kotak_suara/index">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Kotak Suara</span></a>
          </li>
          <!-- admin panel -->
          <div class="sidebar-heading">
              Control Panel Administator
          </div>
          <li class="nav-item">
              <a class="nav-link collapsed" href="<?php echo base_url() ?>#" data-toggle="collapse" data-target="#Administator" aria-expanded="true" aria-controls="collapseTwo">
                  <i class="fas fa-user"></i>
                  <span>Administator</span>
              </a>
              <div id="Administator" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="<?php echo base_url('admin/calon/data') ?>">Data Calon</a>
                      <a class="collapse-item" href="<?php echo base_url('admin/panitia/data') ?>">Data Panitia</a>
                      <a class="collapse-item" href="<?php echo base_url('admin/calon/tambah') ?>">Tambah Calon</a>
                      <a class="collapse-item" href="<?php echo base_url('admin/kotak_suara/index') ?>">Kotak Suara</a>
                      <a class="collapse-item" href="<?php echo base_url('admin/total_suara/index') ?>">Total Suara</a>
                  </div>
              </div>
          </li>
          <!-- End Administator -->
          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

              <!-- Topbar -->
              <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                      <i class="fa fa-bars"></i>
                  </button>

                  <!-- Topbar Search -->
                  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                      <div class="input-group">
                          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                              <button class="btn btn-primary" type="button">
                                  <i class="fas fa-search fa-sm"></i>
                              </button>
                          </div>
                      </div>
                  </form>

                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">

                      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                      <li class="nav-item dropdown no-arrow d-sm-none">
                          <a class="nav-link dropdown-toggle" href="<?php echo base_url() ?>#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-search fa-fw"></i>
                          </a>
                          <!-- Dropdown - Messages -->
                          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                              <form class="form-inline mr-auto w-100 navbar-search">
                                  <div class="input-group">
                                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                      <div class="input-group-append">
                                          <button class="btn btn-primary" type="button">
                                              <i class="fas fa-search fa-sm"></i>
                                          </button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </li>
                      <div class="topbar-divider d-none d-sm-block"></div>

                      <!-- Nav Item - User Information -->
                      <li class="nav-item dropdown no-arrow">
                          <a class="nav-link dropdown-toggle" href="<?php echo base_url() ?>#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                              <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                          </a>
                          <!-- Dropdown - User Information -->
                          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                              <a class="dropdown-item" href="<?php echo base_url() ?>#">
                                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Profile
                              </a>
                              <a class="dropdown-item" href="<?php echo base_url() ?>#">
                                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Settings
                              </a>
                              <a class="dropdown-item" href="<?php echo base_url() ?>#">
                                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Activity Log
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="<?php echo base_url() ?>#" data-toggle="modal" data-target="#logoutModal">
                                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Logout
                              </a>
                          </div>
                      </li>

                  </ul>

              </nav>
              <!-- End of Topbar -->

              <!-- Begin Page Content -->
              <div class="container-fluid">
                  <?php echo $this->rendersection('content') ?>
              </div>
          </div>
      </div>
      <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->