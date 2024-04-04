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
                            <h6 class="m-0 font-weight-bold text-primary">Ubah Data Guru</h6>
                        </div>
                        <div class="card-body">
                            <?= form_open_multipart('administrator/data_pengguna/guru/aksi_ubah') ?>
                            <?php foreach($guru as $row) { ?>
                            <div class="row">
                                <div class="col-4">
                                    <div class=" text-center ">
                                        <input type='hidden' name="foto_default" value="<?= $row->foto ?>">
                                        <label for="nama" class="">Foto Profil</label>

                                        <p><input accept="image/*" type='file' id="tambah" name="foto" onchange="loadFile(event)" style="display: none;"></p>
                                        
                                        <span class=""><img class="rounded-circle border border-secondary" id="output" width="200px" height="200px" src="<?= base_url('assets/images/foto_profil/').$row->foto ?>" /></span>
                                        
                                        <p><label for="tambah" class="btn btn-info mt-2" style="cursor: pointer;">Unggah Foto</label></p>
                                    </div>
                                </div>
                                <div class="col-8">
                                <input type="hidden" name="id_guru" value="<?= $row->id_guru ?>">
                                <div class="">
                                    <div class="mb-3">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="nama_guru" value="<?= $row->nama_guru ?>" autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="telepon">Telepon</label>
                                        <input type="number" class="form-control" name="telepon" value="<?= $row->telepon ?>" autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" value="<?= $row->username ?>" autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" name="password" value="<?= $row->passconf ?>" autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_sekolah">Kelas</label>
                                        <select name="id_sekolah" class="form-select" required id="id_sekolah">
                                            <?php foreach($sekolah as $s){?>
                                            <option value=<?= $s->id_sekolah ?> <?= $s->id_sekolah == $row->id_sekolah ? 'selected' : null ?> ><?= $s->kelas ?><?= $s->nama_sekolah ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-secondary" href="<?= base_url('administrator/data_pengguna/guru/') ?>" role="button">Kembali</a>
                            <input type="submit" class="btn btn-primary " value="Simpan Data">
                        </div>
                        <?php } ?>
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