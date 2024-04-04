<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>


    <!-- Content Row -->


    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">
            <?php if ($this->session->userdata('level') == 'Administrator') { ?>
                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Selamat Datang di Dashboard Administrator</h6>
                    </div>
                    <div class="card-body">
                        Disini Anda dapat melakukan monitoring dan pengolahan data hasil ujian. <br> Menu yang diberikan yaitu, Master Data (Data Guru, Data Siswa, Data Sekolah), Menu Bank Soal, Menu Laporan. <br> Untuk menjaga keamanan diharapkan anda meng-klik Menu Log Out jika akan keluar dan menutup aplikasi ini.
                    </div>
                </div>
            <?php }  ?>

        </div>
        <div class="col-lg-12 mb-4">
            <?php if ($this->session->userdata('level') == 'Guru') { ?>
                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Selamat Datang di Dashboard Guru</h6>
                    </div>
                    <div class="card-body">
                        Disini Anda dapat melakukan pengolahan data hasil ujian. <br> Menu yang diberikan yaitu, Menu Penilaian, Menu untuk Membuat soal, Menu Laporan, dll. <br> Untuk menjaga keamanan diharapkan anda meng-klik Menu Log Out jika akan keluar dan menutup aplikasi ini.
                    </div>
                </div>
            <?php }  ?>

        </div>
        <div class="col-lg-12 mb-4">
            <?php if ($this->session->userdata('level') == 'Mahasiswa') { ?>
                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Selamat Datang di Dashboard Mahasiswa</h6>
                    </div>
                    <div class="card-body">
                        Disini Anda dapat belajar dan mengikuti ujian. <br> Menu yang diberikan yaitu, Modul Praktikum, Praktikum Virtual Lab, Diskusi kelompok, dll. <br> Untuk menjaga keamanan diharapkan anda meng-klik Menu Log Out jika akan keluar dan menutup aplikasi ini.
                    </div>
                </div>
            <?php }  ?>

        </div>

    </div>

</div>
<!-- /.container-fluid -->