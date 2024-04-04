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

            <div class="row">
                <!-- Real World Problem -->
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">REAL WORLD PROBLEM</h6>
                        </div>
                        <div class="card-body">
                            <p>
                                Kamu dan kelompokmu ketika pergi memancing di lautan terdampar di sebuahpulau kosong terpencil. Untuk meminta pertolongan pada kapal-kapal yang lewat di sekitar pulau tersebut kamu dan kelompokmu harus menyalakan sinyal Save Our Souls (SOS) dari sebuah lampu khusus. Untuk menyalakan lampu tersebut dibutuhkan arus listrik untuk itu kamu dan rekan sekelompokmu mencoba membuat rangkaian listrik seperti di bawah ini.
                            </p>
                            <div class="d-flex justify-content-center mb-3 mt-3">
                                <img src="<?= base_url('assets/images/rangkaian-listrik.png') ?>" alt="">
                            </div>
                            <p>
                                Sayangnya arus listrik yang dihasilkan pada rangkaian tersebut terlalu kecil dan tidak cukup untuk menyalakan lampu tersebut. Dibutuhkan arus listrik yang besarnya empat kali lipat dari yang mengalir pada rangkaian tersebut. Jika saja terdapat tiga baterai lagi yang mempunyai gaya gerak listrik (ggl) yang bernilai sama dengan yang dipasang pada rangkaian maka kebutuhan tersebut akan dapat dipenuhi. Sayangnya di kotak peralatan yang kamu bawa hanya terdapat sebuah baterai dan untuk membelinya tentu tidak mungkin. Selain satu buah baterai, di kotak peralatan tersebut terdapat dua buah hambatan yang nilai hambatannya sama dengan yang dipasang pada rangkaian.
                            </p>
                            <p>
                                Beberapa rekan kamu memberi pendapat untuk menambahkan komponen yang tersedia di kotak pada rangkaian untuk menghasilkan arus listrik sesuai yang dibutuhkan. Adapun pendapat yang disampaikan terdiri dari:
                            </p>
                            <ol>
                                <li>
                                    <p>
                                        Menurut Azka pada rangkaian harus ditambahkan satu buah baterai secara seri dan satu buah hambatan secara paralel. Alasannya untuk memperoleh arus listrik yang besarnya empat kali lipat pada rangkaian, maka besar beda potensial yang terukur pada kedua ujung rangkaian diperbesar satu kali lipat dan hambatan diperkecil setengah kali lipat. 
                                    </p> 
                                </li>
                                <li>
                                    <p>
                                        Firman menyarankan agar pada rangkaian ditambahkan satu buah baterai secara seri dan dua buah hambatan yang dipasang paralel dengan hambatan yang telah terpasang. Alasannya untuk memperoleh arus listrik yang besarnya empat kali lipat pada rangkaian, maka besar beda potensial yang terukur pada kedua ujung rangkaian diperbesar satu kali lipat dan hambatan diperkecil sepertiga kali lipat.
                                    </p> 
                                </li>
                                <li>
                                    <p>
                                        Joko menyarankan agar pada rangkaian hanya ditambahkan dua buah hambatan secara paralel dengan hambatan yang sudah terpasang. Alasannya untuk memperoleh arus listrik yang besarnya empat kali lipat pada rangkaian, maka hambatan diperkecil sepertiga kali dari sebelumnya, sedangkan baterainya tidak perlu ditambah lagi alasannya tidak perlu memperbesar beda potensial satu kali lipat pada kedua ujung rangkaian
                                    </p> 
                                </li>
                            </ol>
                            <p>
                                Kamu bingung dengan banyaknya pendapat yang diajukan rekan-rekanmu, pendapat mana yang perlu dipilih. Untuk memastikan pendapat siapa yang paling tepat maka kelompok kamu melakukan kegiatan pengujian langsung terhadap ketiga rangkaian yang diusulka
                            </p>
                        </div>
                    </div>
                </div>

            <!-- Menentukan dan Mengevaluasi Ide -->
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">MENENTUKAN DAN MENGEVALUASI IDE</h6>
                        </div>
                        <div class="card-body">
                            <p>
                                Tentukan ide mana yang menurut kalian dapat memecahkan permasalahan sesuai dengan real world problem di atas. Jelaskan mengapa kalian menilai ide tersebut dapat memecahkan masalah.
                            </p>
                            <textarea class="summernote" name="editordata" class="form-control" style="height: 300px;"></textarea>
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
                            <textarea class="summernote" class="form-control" style="height: 300px;" placeholder="input"></textarea>
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
                            <textarea class="summernote" class="form-control" style="height: 300px;" placeholder="input"></textarea>
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
                                        1. Bagaimana hubungan antara tegangan (V) dengan arus listrik (I) yang mengalir pada suatu rangkaian. Gambarkan grafik tegangan (V) terhadap arus listrik (I) pada suatu rangkaian. Bagaimana kemiringan grafik tersebut berkaitan dengan hambatan pada suatu rangkaian? Bagaimana hubungan antara tegangan (V) dengan arus listrik (I) yang mengalir pada suatu rangkaian. Gambarkan grafik tegangan (V) terhadap arus listrik (I) pada suatu rangkaian. Bagaimana kemiringan grafik tersebut berkaitan dengan hambatan pada suatu rangkaian?
                                    </p>
                                    <textarea class="summernote" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                                </div>
                                <div class="col">
                                    <p>
                                        2. Pertambahan arus yang mengalir pada suatu rangkaian dapat terjadi ketika tegangan diperbesar dan hambatan diperkecil. Apakah kamu punya dugaan bahwa tegangan akan bertambah besar jika pada suatu rangkaian ditambahkan ggl yang disusun secara seri dan hambatan akan bertambah kecil jika pada suatu rangkaian ditambahkan hambatan yang disusun secara paralel. Jika ya, bagaimana perubahannya? Gambarkan grafik pertambahan tegangan terhadap arus listrik yang mengalir pada suatu rangkaian.
                                    </p>
                                    <textarea class="summernote" class="form-control" style="height: 300px;" placeholder="input"></textarea>
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
                            Gambar sketsa grafik tegangan terhadap arus listrik yang mengalir pada rangkaian sebelum dan sesudah ditambahkan beda potensial secara seri pada kedua ujung rangkaian dan hambatan secara paralel pada rangkaian.
                            </p>
                            <textarea class="summernote" class="form-control" style="height: 300px;" placeholder="input"></textarea>
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
                            <textarea class="summernote" class="form-control" style="height: 300px;" placeholder="input"></textarea>
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
                                <strong>PERINGATAN:</strong> Kamu akan bekerja dengan power supply yang dapat menghasilkan tegangan listrik yang besar. Penggunaan yang tidak dibenarkan dapat menyebabkan luka bakar yang menyakitkan. Untuk menghindari bahaya, power supply harus dimatikan dan kamu harus menunggu minimal satu menit sebelum kabel tidak dihubungkan atau dihubungkan ke power supply. Jangan pernah menggenggam kabel di ujung logam. Gambarkan skema rangkaian alat untuk kegiatan eksperimen untuk mengecek kebenaran prediksimu
                            </p>
                            <div class="container">
                                    <iframe src="https://phet.colorado.edu/sims/html/circuit-construction-kit-dc-virtual-lab/latest/circuit-construction-kit-dc-virtual-lab_en.html" width="100%" height="600px" allowfullscreen></iframe>
                            </div>
                            <div class="mt-3">
                                <textarea class="summernote"></textarea>
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
                                Lakukan pengukuran arus yang mengalir pada rangkaian dengan amperemeter. Lakukan percobaan minimal sebanyak tiga kali. Pastikan beda potensial yang mengalir diukur dengan menggunakan voltmeter. Percobaan dilakukan baik untuk arus yang mengalir sebelum maupun sesudah ditambahkan ggl dan hambatan pada rangkaian.
                            </p>
                            <p>
                                Data hasil pengukuran diolah dan dihitung menggunakan kalkulator atau program software Excel atau Math Lab untuk menentukan arus yang mengalir dan menggambarkan grafik hubungan antara tegangan dengan arus yang mengalir.
                            </p>
                            <textarea class="summernote" class="form-control" style="height: 300px;" placeholder="input"></textarea>
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
                            <textarea class="summernote" class="form-control" style="height: 300px;" placeholder="input"></textarea>
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
                                Berdasarkan data hasil percobaan, gambarkan grafik tegangan (V) sebagai fungsi arus listrik (I) untuk arus yang mengalir setelah ditambahkan ggl dan hambatan pada rangkaian. Berdasarkan kemiringan kurva linier pada grafik yang diperoleh, tentukan arus yang mengalir setelah ditambahkan ggl dan hambatan pada rangkaian.
                            </p>
                            <textarea class="summernote" class="form-control" style="height: 300px;" placeholder="input"></textarea>
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
                                        1. Bagaimana hubungan antara tegangan (V) dengan arus listrik (I) yang mengalir pada suatu rangkaian. Gambarkan grafik tegangan (V) terhadap arus listrik (I) pada suatu rangkaian. Bagaimana kemiringan grafik tersebut berkaitan dengan hambatan pada suatu rangkaian? Bagaimana hubungan antara tegangan (V) dengan arus listrik (I) yang mengalir pada suatu rangkaian. Gambarkan grafik tegangan (V) terhadap arus listrik (I) pada suatu rangkaian. Bagaimana kemiringan grafik tersebut berkaitan dengan hambatan pada suatu rangkaian?
                                    </p>
                                    <textarea class="summernote" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                                </div>
                                <div class="col">
                                    <p>
                                        2. Pertambahan arus yang mengalir pada suatu rangkaian dapat terjadi ketika tegangan diperbesar dan hambatan diperkecil. Apakah kamu punya dugaan bahwa tegangan akan bertambah besar jika pada suatu rangkaian ditambahkan ggl yang disusun secara seri dan hambatan akan bertambah kecil jika pada suatu rangkaian ditambahkan hambatan yang disusun secara paralel. Jika ya, bagaimana perubahannya? Gambarkan grafik pertambahan tegangan terhadap arus listrik yang mengalir pada suatu rangkaian
                                    </p>
                                    <textarea class="summernote" class="form-control" style="height: 300px;" placeholder="input"></textarea>
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
                                Apakah prediksimu sesuai dengan hasil eksperimen? Jika sesuai, bagaimana pengaruh penambahan ggl yang disusun secara seri dan hambatan yang disusun secara paralel pada suatu rangkaian terhadap arus yang mengalir dan nyala lampu yang dihasilkan?
                            </p>
                            <textarea class="summernote" class="form-control" style="height: 300px;" placeholder="input"></textarea>
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
                            <textarea class="summernote" class="form-control" style="height: 300px;" placeholder="input"></textarea>
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
                            <textarea class="summernote" class="form-control" style="height: 300px;" placeholder="input"></textarea>
                        </div>
                    </div>
                </div>
                
            </div>
            

        </div>

    </div>

</div>
<!-- /.container-fluid -->
