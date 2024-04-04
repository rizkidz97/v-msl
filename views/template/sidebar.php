<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul ?> | Virtual Multiple Skill Laboratory</title>
    <!-- Custom fonts for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="<?= base_url('assets/sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/tagsinput/dist/bootstrap-tagsinput.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/sbadmin/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/sbadmin/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="icon" href="<?= base_url('assets/images/logo.png') ?>">
    <!-- Custom styles for this template-->

    <link href="<?= base_url('assets/summernote/summernote-bs4.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-smile"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><sub><?= $this->session->userdata('level') ?></sub></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <?php if ($this->session->userdata('level') == "Administrator") { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('administrator/dashboard') ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Modul Praktikum</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?= base_url('administrator/modul/hukum_hooke') ?>">Hukum Hooke</a>
                            <a class="collapse-item" href="<?= base_url('administrator/modul/rangkaian_listrik') ?>">Rangkaian Listrik</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-chart-pie"></i>
                        <span>Penilaian</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-fw fa-poll"></i>
                        <span>Survey</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="far fa-comments"></i>
                        <span>Diskusi</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="far fa-chart-bar"></i>
                        <span>Laporan</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('administrator/sekolah') ?>">
                        <i class="fas fa-fw fa-school"></i>
                        <span>Sekolah</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Pengguna</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?= base_url('administrator/data_pengguna/admin') ?>">Administrator</a>
                            <a class="collapse-item" href="<?= base_url('administrator/data_pengguna/guru') ?>">Guru</a>
                            <a class="collapse-item" href="<?= base_url('administrator/data_pengguna/mahasiswa') ?>">Mahasiswa</a>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <?php if ($this->session->userdata('level') == "Guru") { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('guru/dashboard') ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Modul Praktikum</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?= base_url('guru/modul/hukum_hooke') ?>">Hukum Hooke</a>
                            <a class="collapse-item" href="<?= base_url('guru/modul/rangkaian_listrik') ?>">Rangkaian Listrik</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Penilaian</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('guru/data_pengguna/mahasiswa') ?>">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Mahasiswa</span>
                    </a>
                </li>
            <?php } ?>

            <?php if ($this->session->userdata('level') == "Mahasiswa") { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('mahasiswa/dashboard') ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Modul Praktikum</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?= base_url('mahasiswa/modul/hukum_hooke') ?>">Hukum Hooke</a>
                            <a class="collapse-item" href="<?= base_url('mahasiswa/modul/rangkaian_listrik') ?>">Rangkaian Listrik</a>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->