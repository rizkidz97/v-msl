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
                <!-- tambah -->
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Sekolah</h6>
                        </div>
                        <div class="card-body">
                            <?= form_open_multipart('administrator/sekolah/aksi_tambah') ?>
                            <div class="row">
                                <div class="col-4">
                                    <div class=" text-center ">
                                        <input type='hidden' name="foto_default" value="sekolah.png">
                                        <label for="nama" class="">Foto Profil</label>
                                        <p><input accept="image/*" type='file' id="tambah" name="foto" onchange="loadFile(event)" style="display: none;"></p>
                                        <span class=""><img class="rounded-circle border border-secondary" id="output" width="200px" height="200px" src="<?= base_url('assets/images/upload_logo_sekolah/sekolah.png') ?>" /></span>
                                        <p><label for="tambah" class="btn btn-info mt-2" style="cursor: pointer;">Unggah Foto</label></p>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label>Nama Sekolah</label>
                                        <input type="text" class="form-control" name="nama_sekolah" autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label>Kelas</label>
                                        <input type="text" data-role="tagsinput" name="kelas" class="form-input" placeholder="Masukkan Nama Kelas" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary " value="Simpan Data">
                            <a class="btn btn-secondary" href="<?= base_url('administrator/sekolah') ?>" role="button">Kembali</a>
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