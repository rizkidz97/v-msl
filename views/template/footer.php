</div>
<!-- End of Main Content -->
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Modal Profil Administrator -->
<div class="modal fade" id="admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header card-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Profil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('administrator/data_pengguna/admin/ubah_profil') ?>
                <div class="row">
                    <div class="col-4">
                        <div class=" text-center ">
                            <input type='hidden' name="foto_default" value="<?= $this->session->userdata('foto') ?>">
                            <label for="nama" class="">Foto Profil</label>

                            <p><input accept="image/*" type='file' id="tambah" name="foto" onchange="loadFile(event)" style="display: none;"></p>

                            <span class=""><img class="rounded-circle border border-secondary" id="output" width="200px" height="200px" src="<?= base_url('assets/images/foto_profil/') . $this->session->userdata('foto') ?>" /></span>

                            <p><label for="tambah" class="btn btn-info mt-2" style="cursor: pointer;">Unggah Foto</label></p>
                        </div>
                    </div>
                    <div class="col-8">
                        <input type="hidden" name="id_admin" value="<?= $this->session->userdata('id') ?>">
                        <div class="">
                            <div class="mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama_admin" value="<?= $this->session->userdata('nama_admin') ?>" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="telepon">Telepon</label>
                                <input type="number" class="form-control" name="telepon" value="<?= $this->session->userdata('telepon') ?>" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" value="<?= $this->session->userdata('username') ?>" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" value="<?= $this->session->userdata('passconf') ?>" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer card-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="SImpan Data">
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/sbadmin/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/sbadmin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/sbadmin/js/sb-admin-2.min.js') ?>"></script>
<script src="<?= base_url('assets/tagsinput/dist/bootstrap-tagsinput.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    $("#select").tagsinput('items')
</script>
<!-- Page level plugins -->
<script src="<?= base_url('assets/sbadmin/vendor/chart.js/Chart.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/sbadmin/js/demo/chart-area-demo.js') ?>"></script>
<script src="<?= base_url('assets/sbadmin/js/demo/chart-pie-demo.js') ?>"></script>

<!-- Data Table -->
<script src="<?= base_url('assets/sbadmin/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/sbadmin/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/sbadmin/js/demo/datatables-demo.js') ?>"></script>

<!-- WYSIWYG -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/summernote/summernote-bs4.js') ?>"></script>
<script>
    $('.summernote').summernote({
        height: 200,
        minHeight: null,
        maxHeight: null,
        focus: false,
        toolbar: [
            ['style', ['italic', 'bold', 'underline', 'clear']],
            ['font', ['subscript', 'superscript', 'strikethrough']],
            ['color', ['color', ]],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video', 'hr', 'LaTeX']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>



</body>

</html>