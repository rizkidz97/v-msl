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
            <?= form_open_multipart('administrator/modul/upload_hukum_hooke') ?>
            <div class="row">
                <!-- Real World Problem -->
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Real World Problem</h6>
                            <input type="submit" class="btn btn-primary" value="Simpan Data">
                        </div>
                        <div class="card-body">
                            <p>
                                Kelompok kamu diminta untuk merancang dan membuat sebuah alat mekanik yang dalam konstruksinya menggunakan sebuah pegas. Sesuai spesifikasi alat, pegas yang dibutuhkan adalah yang memiliki koefisien sebesar 100 N/m. Sayangnya di bengkel kerja kamu hanya tersedia pegas yang koefisiennya hanya 50 N/m. Karena kamu dan kelompokmu sedang berada di suatu daerah terpencil, maka untuk membelinya ke kota memerlukan waktu yang lama, padahal alat tersebut akan segera digunakan.
                            </p>
                            <p>
                                Bererapa rekan kamu memberi pendapat untuk mendapatkan koefisien pegas sebesar 100 N/m. Adapun pendapat yang disampaikan terdiri dari:
                            </p>
                            <ol>
                                <li>
                                    Menurut Arif, pegas yang tersedia dipotong menjadi dua bagian dan yang dipasang hanya satu pegas ke dalam rangkaian. Alasannya untuk memperoleh koefisien pegas sebesar 100 N/m, panjang pegas harus dipotong dan hanya satu yang dipasang untuk memperbesar koefisien pegas menjadi dua kali lipat.
                                </li>
                                <br>
                                <li>
                                    Lutfi menyarankan agar pegas yang tersedia dipotong menjadi dua bagian dan dipasang semuanya ke dalam rangkaian. Alasannya untuk memperoleh koefisien pegas sebesar 100 N/m, kedua panjang pegas harus dipasang secara paralel untuk memperbesar koefisien pegas menjadi dua kali lipat.
                                </li>
                                <br>
                                <li>
                                    Anton menyarankan pegas yang tersedia dipotong menjadi tiga bagian dan hanya satu yang dipakai dalam rangkaian, alasannya untuk memperoleh koefisien pegas sebesar 100 N/m, panjang pegas dipotong atau tidak nilai koefisiennya akan sama.
                                </li>
                            </ol>
                            <p>
                                Kamu bingung dengan banyaknya pendapat yang diajukan rekan-rekanmu, pendapat mana yang perlu dipilih. Untuk memastikan pendapat siapa yang paling tepat maka kelompok kamu melakukan kegiatan pengujian langsung koefisien pegas sebelum dan sesudah dipotong.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Menentukan dan Mengevaluasi Ide -->
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Menentukan dan Mengevaluasi Ide</h6>
                        </div>
                        <div class="card-body">
                            <p>
                                Tentukan ide mana yang menurut kalian dapat memecahkan permasalahan sesuai dengan real world problem di atas. Jelaskan mengapa kalian menilai ide tersebut dapat memecahkan masalah.
                            </p>
                            <textarea class="summernote" name="menentukan_ide" class="form-control" style="height: 300px;"></textarea>
                        </div>
                    </div>
                </div>
                <!-- Ide Alternatif -->
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">IDE ALTERNATIF</h6>
                        </div>
                        <div class="card-body">
                            <p>
                                Kemukakan ide alternative yang tidak disebutkan dari usulan dalam Real world Problem.
                            </p>
                            <textarea class="summernote" name="ide_alternatif" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                        </div>
                    </div>
                </div>
                <!-- Mendiskusikan Ide -->
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">MENDISKUSIKAN IDE</h6>
                        </div>
                        <div class="card-body">
                            <p>
                                Diskusikan ide-ide yang tersedia baik dari ide pada real world problem ataupun ide alternatif yang kamu munculkan. Perimbangkan untuk hanya menguji ide yang paling memungkinkan.
                            </p>
                            <textarea class="summernote" name="mendiskusikan_ide" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                        </div>
                    </div>
                </div>
                <!-- Pertanyaan Konseptual -->
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">PERTANYAAN KONSEPTUAL</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p>
                                        1. Bagaimana hubungan antara pertambahan panjang pegas (△x), dengan berat beban yang menariknya ketika sebuah pegas digantungkan secara vertikal kemudian dibebani? Gambarkan grafik gaya berat (F) terhadap pertambahan panjang (△x) untuk pegas tersebut. Bagaimana kemiringan grafik berkaitan dengan koefisien pegas?
                                    </p>
                                    <textarea class="summernote" name="pertanyaan_konseptual1" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                                </div>
                                <div class="col">
                                    <p>
                                        2. Pertambahan panjang pegas total ketika dibebani adalah jumlah pertambahan jarak antar ringnya. Pegas yang panjang dan yang pendek berbeda jumlah ringnya, jumlah ring pegas yang panjang lebih banyak dibanding pegas yang pendek. Apakah kamu punya dugaan bahwa koefisien sebuah pegas akan berubah ketika pegas tersebut dipotong? Jika ya, bagaimana perubahannya? Gambarkan grafik gaya berat (F) terhadap pertambahan panjang (△x) untuk pegas yang sudah dipotong.
                                    </p>
                                    <textarea class="summernote" name="pertanyaan_konseptual2" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Prediksi -->
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">PREDIKSI</h6>
                        </div>
                        <div class="card-body">
                            <p>
                                Gambar sketa grafik fungsi gaya berat (F) terhadap pertambahan panjang (△x), (a) untuk pegas sebelum dipotong dan (b) untuk pegas setelah dipotong.
                            </p>
                            <textarea class="summernote" name="prediksi" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                        </div>
                    </div>
                </div>
                <!-- BAHAN DAN PERALATAN -->
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">BAHAN DAN PERALATAN</h6>
                        </div>
                        <div class="card-body">
                            <p>
                                Tentukan bahan dan peralatan apa saja yang diperlukan untuk melakukan eksperimen sesuai dengan real world problem di atas.
                            </p>
                            <textarea class="summernote" name="bahan_dan_peralatan" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                        </div>
                    </div>
                </div>
                <!-- EKSPLORASI -->
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">EKSPLORASI</h6>
                        </div>
                        <div class="card-body">
                            <p>
                                <strong>PERINGATAN:</strong> Kamu akan bekerja dengan pegas. Hukum Hooke berlaku untuk pegas yang memiliki sifat elastis. Sifat elastis sebuah pegas terdapat batasnya. Sifat elastis pegas akan hilang apabila pegas diberi beban yang berlebihan. Untuk itu pilih beban yang sesuai dengan karakter pegas. Pemberian beban yang digantungkan pada pegas mulai dari berat beban yang kecil terlebih dahulu jangan langsung berat beban yang besar. Gambarkan skema rangkaian alat untuk kegiatan eksperimen untuk mengecek kebenaran prediksimu.
                            </p>
                            <div class="container">
                                <iframe src="https://phet.colorado.edu/sims/html/masses-and-springs/latest/masses-and-springs_en.html" width="100%" height="600px" allowfullscreen>
                                </iframe>
                            </div>
                            <div class="mt-3">
                                <textarea class="summernote" name="eksplorasi"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- PENGUKURAN -->
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">PENGUKURAN</h6>
                            </div>
                            <div class="card-body">
                                <p>
                                    Lakukan pengukuran pertambahan panjang pegas dengan penggaris untuk setiap berat beban yang digantungkan. Lakukan percobaan sebanyak minimal tiga kali dengan berat beban gantung yang bervariasi. Pastikan berat beban gantung diukur dengan menggunakan neraca empat lengan. Percobaan dilakukan baik untuk pegas sebelum dipotong maupun untuk pegas setelah dipotong. Data hasil pengukuran diolah dan dihitung menggunakan kalkulator atau program software Excel atau Math Lab untuk menentukan koefisien pegas dan menggambarkan sketsa grafik hubungan gaya berat (F) dengan pertambahan panjang (△x).
                                </p>
                                <textarea class="summernote" name="pengukuran" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- PENGOLAHAN -->
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">PENGOLAHAN</h6>
                            </div>
                            <div class="card-body">
                                <p>
                                    Lakukan pengolahan data hasil pengukuran
                                </p>
                                <textarea class="summernote" name="pengolahan" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- ANALISIS -->
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">ANALISIS</h6>
                            </div>
                            <div class="card-body">
                                <p>
                                    Berdasarkan data hasil percobaan, gambarkan grafik berat beban (F) sebagai fungsi pertambahan panjang pegas (△x) baik untuk pegas sebelum dipotong maupun untuk pegas setelah dipotong. Berdasarkan kemiringan kurva linier pada kedua grafik yang diperoleh, tentukan koefisien masing-masing pegas sebelum dipotong dan sesudah dipotong.
                                </p>
                                <textarea class="summernote" name="analisis" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- EKSPLANASI -->
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">EKSPLANASI</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            1. Bagaimana hubungan antara pertambahan panjang pegas (△x), dengan berat beban yang menariknya ketika sebuah pegas digantungkan secara vertikal kemudian dibebani? Gambarkan grafik gaya berat (F) terhadap pertambahan panjang (△x) untuk pegas tersebut. Bagaimana kemiringan grafik berkaitan dengan koefisien pegas?
                                        </p>
                                        <textarea class="summernote" name="eksplanasi1" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                                    </div>
                                    <div class="col">
                                        <p>
                                            2. Pertambahan panjang pegas total ketika dibebani adalah jumlah pertambahan jarak antar ringnya. Pegas yang panjang dan yang pendek berbeda jumlah ringnya, jumlah ring pegas yang panjang lebih banyak dibanding pegas yang pendek. Apakah kamu punya dugaan bahwa koefisien sebuah pegas akan berubah ketika pegas tersebut dipotong? Jika ya, bagaimana perubahannya? Gambarkan grafik gaya berat (F) terhadap pertambahan panjang (△x) untuk pegas yang sudah dipotong.
                                        </p>
                                        <textarea class="summernote" name="eksplanasi2" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- KESIMPULAN -->
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">KESIMPULAN</h6>
                            </div>
                            <div class="card-body">
                                <p>
                                    Apakah prediksimu sesuai dengan hasil eksperimen? Jika sesuai, bagaimana pengaruh pemotongan pegas terhadap koefisien pegas?
                                </p>
                                <textarea class="summernote" name="kesimpulan" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- PRESENTASI -->
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">PRESENTASI</h6>
                            </div>
                            <div class="card-body">
                                <p>
                                    Buatlah media misalnnya menggunakan power point, poster atau sejenisnya untuk menyampaikan hasil kesimpulan dari percobaan yang telah dilakukan untuk dipresentasikan di hadapan teman-teman kelompok lainnya.
                                </p>
                                <textarea class="summernote" name="presentasi" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- EVALUASI DAN REFLEKSI -->
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">EVALUASI DAN REFLEKSI</h6>
                            </div>
                            <div class="card-body">
                                <p>
                                    Berdasarkan rangkaian kegaitan praktikum yang telah kalian lakukan, berikan evaluasi kegiatan dan refleksi guna meningkatkan kualitas eksperimen.
                                </p>
                                <textarea class="summernote" name="evaluasi_dan_refleksi" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                            </div>
                            <div class="card-footer">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= form_close() ?>

        </div>

    </div>
    <!-- /.container-fluid -->