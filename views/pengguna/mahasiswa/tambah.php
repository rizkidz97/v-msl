<!-- Containe Fluid -->
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
                <!-- ubah -->
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mahasiswa</h6>
                        </div>
                        <div class="card-body">
                            <?= form_open_multipart('administrator/data_pengguna/mahasiswa/aksi_tambah') ?>
                            <div class="row">
                                <div class="col-4">
                                    <div class=" text-center ">
                                        <input type='hidden' name="foto_default" value="user.png">
                                        <label for="nama" class="">Foto Profil</label>
                                        <p><input accept="image/*" type='file' id="tambah" name="foto" onchange="loadFile(event)" style="display: none;"></p>
                                        <span class=""><img class="rounded-circle border border-secondary" id="output" width="200px" height="200px" src="<?= base_url('assets/images/foto_profil/user.png') ?>" /></span>
                                        <p><label for="tambah" class="btn btn-info mt-2" style="cursor: pointer;">Unggah Foto</label></p>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="nama_mahasiswa" autocomplete="off" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="telepon">Telepon</label>
                                        <input type="number" class="form-control" name="telepon" autocomplete="off" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" autocomplete="off" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" name="password" autocomplete="off" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_sekolah">Kelas</label>
                                        <select name="id_sekolah" class="form-select" required id="id_sekolah">
                                            <option>-- Pilih Nama Sekolah Anda </option>
                                            <?php foreach ($sekolah as $row) { ?>
                                                <option value=<?= $row->id_sekolah ?>><?= $row->kelas ?> | <?= $row->nama_sekolah ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label>Asal Universitas</label>
                                    <div class="row container">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="asal_universitas" id="UIN Sunan Gunung Djati Bandung" value="UIN Sunan Gunung Djati Bandung">
                                            <label class="form-check-label" for="UIN Sunan Gunung Djati Bandung">
                                                UIN Sunan Gunung Djati Bandung
                                            </label>
                                        </div>
                                        <div class="mt-2 form-check">
                                            <input class="form-check-input" type="radio" name="asal_universitas" id="UIN Raden Fatah Palembang" value="UIN Raden Fatah Palembang">
                                            <label class="form-check-label" for="UIN Raden Fatah Palembang">
                                                UIN Raden Fatah Palembang
                                            </label>
                                        </div>
                                        <div class="mt-2 form-check">
                                            <input class="form-check-input" type="radio" name="asal_universitas" id="UIN Mataram" value="UIN Mataram">
                                            <label class="form-check-label" for="UIN Mataram">
                                                UIN Mataram
                                            </label>
                                        </div>
                                        <div class="mt-2 form-check">
                                            <input class="form-check-input" type="radio" name="asal_universitas" id="IAIN Palangkaraya" value="IAIN Palangkaraya">
                                            <label class="form-check-label" for="IAIN Palangkaraya">
                                                IAIN Palangkaraya
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Nomor Induk Mahasiswa</label>
                                    <input type="text" class="form-control" name="nim" autocomplete="off" required>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Jurusan/Prodi</label>
                                    <input type="text" class="form-control" name="jurusan" autocomplete="off" required>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" autocomplete="off" required>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Gender</label>
                                    <div class="row container">
                                        <div class="col-3 form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="Laki-Laki" value="Laki-Laki">
                                            <label class="form-check-label" for="Laki-Laki">
                                                Laki-Laki
                                            </label>
                                        </div>
                                        <div class="col form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="Perempuan" value="Perempuan">
                                            <label class="form-check-label" for="Perempuan">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Kota/Daerah Kelahiran</label>
                                    <div class="row container">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tempat_lahir" id="Kota (Tinggal di pusat pemerintahan)" value="Kota (Tinggal di pusat pemerintahan)">
                                            <label class="form-check-label" for="Kota (Tinggal di pusat pemerintahan)">
                                                Kota (Tinggal di pusat pemerintahan)
                                            </label>
                                        </div>
                                        <div class="mt-2 form-check">
                                            <input class="form-check-input" type="radio" name="tempat_lahir" id="Desa (Jauh dari pusat pemerintahan)" value="Desa (Jauh dari pusat pemerintahan)">
                                            <label class="form-check-label" for="Desa (Jauh dari pusat pemerintahan)">
                                                Desa (Jauh dari pusat pemerintahan)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Asal Sekolah</label>
                                    <div class="row container">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="asal_sekolah" id="Sekolah Menengah Atas (SMA)" value="Sekolah Menengah Atas (SMA)">
                                            <label class="form-check-label" for="Sekolah Menengah Atas (SMA)">
                                                Sekolah Menengah Atas (SMA)
                                            </label>
                                        </div>
                                        <div class="mt-2 form-check">
                                            <input class="form-check-input" type="radio" name="asal_sekolah" id="Madrasah Aliah (MA)" value="Madrasah Aliah (MA)">
                                            <label class="form-check-label" for="Madrasah Aliah (MA)">
                                                Madrasah Aliah (MA)
                                            </label>
                                        </div>
                                        <div class="mt-2 form-check">
                                            <input class="form-check-input" type="radio" name="asal_sekolah" id="Sekolah Menengah Kejuran (SMK)" value="Sekolah Menengah Kejuran (SMK)">
                                            <label class="form-check-label" for="Sekolah Menengah Kejuran (SMK)">
                                                Sekolah Menengah Kejuran (SMK)
                                            </label>
                                        </div>
                                        <div class="mt-2 form-check">
                                            <input class="form-check-input" type="radio" name="asal_sekolah" id="Pondok Pesantren" value="Pondok Pesantren">
                                            <label class="form-check-label" for="Pondok Pesantren">
                                                Pondok Pesantren
                                            </label>
                                        </div>
                                        <div class="mt-2 form-check">
                                            <input class="form-check-input" type="radio" name="asal_sekolah" id="Home Schooling" value="Home Schooling">
                                            <label class="form-check-label" for="Home Schooling">
                                                Home Schooling
                                            </label>
                                        </div>
                                        <div class="mt-2 form-check">
                                            <div class="row">
                                                <div class="col">
                                                    <input class="form-check-input" type="radio" name="asal_sekolah" id="Yang Lain">
                                                    <label class="form-check-label" for="Yang Lain">Yang Lain:</label>
                                                    <input type="text" for class="form-control" autocomplete="off" name="asal_sekolah_lain">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Status Ekonomi</label>
                                    <div class="row container">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_ekonomi" id="Kelompok Atas (upper class)" value="Kelompok Atas (upper class)">
                                            <label class="form-check-label" for="Kelompok Atas (upper class)">
                                                Kelompok Atas (upper class)
                                            </label>
                                        </div>
                                        <div class="mt-2 form-check">
                                            <input class="form-check-input" type="radio" name="status_ekonomi" id="Kelompok menengah (middle class)" value="Kelompok menengah (middle class)">
                                            <label class="form-check-label" for="Kelompok menengah (middle class)">
                                                Kelompok menengah (middle class)
                                            </label>
                                        </div>
                                        <div class="mt-2 form-check">
                                            <input class="form-check-input" type="radio" name="status_ekonomi" id="Kelompok Bawah (lower class)" value="Kelompok Bawah (lower class)">
                                            <label class="form-check-label" for="Kelompok Bawah (lower class)">
                                                Kelompok Bawah (lower class)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-secondary" href="<?= base_url('administrator/data_pengguna/mahasiswa/') ?>" role="button">Kembali</a>
                            <input type="submit" class="btn btn-primary " value="Simpan Data">
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content Column -->
    </div>
    <!-- End Content Row -->
</div>
<!-- End Container Fluid -->
<script type="text/javascript">
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>