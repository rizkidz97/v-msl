<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Topbar Search -->
            <h4 class="mt-2 text-dark" style="font-weight: 700;">Computerized Adaptive Test - PHYSCOMLIT</h4>


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><i class="fas fa-angle-down"></i> <?= $this->session->userdata('nama_admin') ?></span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/foto_profil/') . $this->session->userdata('foto') ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <?php if ($this->session->userdata('level') == 'Administrator') { ?>
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#admin">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                        <?php }  ?>
                        <?php if ($this->session->userdata('level') == 'Guru') { ?>
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#guru">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                        <?php }  ?>
                        <?php if ($this->session->userdata('level') == 'Mahasiswa') { ?>
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#mahasiswa">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                        <?php }  ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('home/keluar') ?>">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->