<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">

            <div class="row">
                <!-- card -->
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
                            <a class="btn btn-primary" href="<?= base_url('administrator/data_pengguna/mahasiswa/tambah') ?>" title="Tambah"><i class="fas fa-plus fa-sm"></i> Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-stripped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Mahasiswa</th>
                                            <th scope="col">Telepon</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Nama Sekolah</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no=1;
                                            foreach($mahasiswa as $row){
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $row->nama_mahasiswa; ?></td>
                                            <td><?= $row->telepon; ?></td>
                                            <td><?= $row->username; ?></td>
                                            <td><?= $row->nama_sekolah; ?></td>
                                            <td><?= $row->kelas; ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url().'administrator/data_pengguna/mahasiswa/ubah/'.$row->id_mahasiswa; ?>" class="btn btn-warning btn-sm" title="Ubah"><i class="fas fa-pen fa-sm"></i></a>
                                                <a href="<?= base_url().'administrator/data_pengguna/mahasiswa/hapus/'.$row->id_mahasiswa; ?>" class="btn btn-danger btn-sm" title="Hapus"><i class="fas fa-trash fa-sm"></i></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content Column -->
    </div>
    <!-- End Content Row -->
</div>
<!-- End Container Fluid -->