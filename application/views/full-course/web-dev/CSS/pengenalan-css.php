    <main id="main">

        <!-- ======= Jumbotron ======= -->
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-6 col-md-8">
                    <div class="jumbotron-full-bg bg-white text-md-left ">
                        <div class="container" style="margin-top: 100px; margin-bottom: 50px;">
                            <h2 class="display-4" style="font-size: 35px;">Pengenalan CSS</h2>
                            <hr class="my-2 border-dark mb-3">
                            <h3 class="font-weight-bold">Pengertian CSS</h3>
                            <p class="lead">
                                CSS atau Cascading Style Sheet merupakan aturan untuk mengatur beberapa komponen dalam sebuah website sehingga akan lebih terstruktur dan seragam. <br> CSS dapat mengendalikan ukuran gambar, warna bagian tubuh pada teks,
                                warna tabel, ukuran border, warna border, warna hyperlink, warna mouse over, jarak antar paragraf, jarak antar teks, margin kiri, kanan, atas, bawah, dan parameter lainnya. <br> Berikut adalah cara penggunaan CSS :
                            </p>
                            <h3 class="font-weight-bold">Inline Style</h3>
                            <p class="lead">
                                Inline CSS ialah dimana kita akan menuliskan kode secara langsung pada atribut elemen HTML. Setiap elemen HTML memiliki atribut style, di situlah inline CSS ditulis. <br> Menurut saya dengan cara ini kurang efisien karena
                                setiap tag HTML yang diberikan harus memiliki style masing-masing. Anda akan lebih sulit dalam mengatur website jika hanya menggunakan inline CSS. Sebab, Inline CSS digunakan hanya untuk mengubah satu elemen saja. <br> Dibawah ini Adalah contoh dari pemakaian Inline Style (Inline CSS) :
                                <br> Contoh : <br>
                                <!--untuk menampilkan contoh code -->
                                <pre class="code">
<<em style="color:red;">body</em>>
  <<em style="color:red;">p</em> <em style="color:orange;">style</em>="color:red;"></em>
  Inline CSS ialah dimana kita akan menuliskan kode secara langsung pada atribut elemen HTML. Setiap
  elemen HTML memiliki atribut style, di situlah inline CSS ditulis.
  Menurut saya dengan cara ini kurang efisien karena setiap tag HTML yang diberikan harus memiliki style
  masing-masing. Anda akan lebih sulit dalam mengatur website jika hanya menggunakan inline CSS. Sebab, Inline CSS
  digunakan hanya untuk mengubah satu elemen saja. <br> Dibawah ini Adalah contoh dari pemakaian Inline Style (Inline CSS) :
  <<em style="color:red;">/p</em>>
<<em>/</em><em style="color:red;">body</em>>
</pre>
                                <br> Hasil dari code yang sudah kita buat di atas, akan seperti dibawah ini : <br>
                                <img src="<?= base_url() ?>assets/img/hasil code/css/pengenalan.jpg" alt="pengenalan" class="img-fluid"> <br>
                            </p>
                            <h3 class="font-weight-bold">Internal CSS</h3>
                            <p class="lead">
                                Internal CSS hanya bisa digunakan pada satu halaman saja <i>(CSS tidak bisa digunakan untuk halaman lain)</i>. Penulisan CSS ini diletakkan di dalam elemen head dengan diawali dengan tag <em style="color:red">
                                    <</em> <em style="color:red;">style>
                                </em> dan diakhiri dengan <em style="color:red">
                                    <</em> <em style="color:red;">/style>
                                </em>
                                <br> Contoh : <br>
                                <!--untuk menampilkan contoh code -->
                                <pre class="code">
<<em style="color:red;">head</em>>
  <<em style="color:red;">style</em> type="text/css">
   <em style="color:red;">h2</em> {
     font-family: arial;
     Color: Green;
     font-size : 30px;
   }
   <em style="color:red;">p</em> {
     font-family: arial;
     align: justify;
   }
  <<em>/</em><em style="color:red;">style</em>>
<<em>/</em><em style="color:red;">head</em>>
<<em style="color:red;">body</em>>
  <<em style="color:red;">h2</em>> Contoh Dari penggunaan Internal CSS <<em style="color:red;">/h2</em>>

    <<em style="color:red;">p</em>>
        Inline CSS ialah dimana kita akan menuliskan kode secara langsung pada atribut elemen HTML. Setiap
        elemen HTML memiliki atribut style, di situlah inline CSS ditulis.
        Menurut saya dengan cara ini kurang efisien karena setiap tag HTML yang diberikan harus memiliki style
        masing-masing. Anda akan lebih sulit dalam mengatur website jika hanya menggunakan inline CSS. Sebab, Inline CSS digunakan hanya untuk mengubah satu elemen saja.
        Dibawah ini Adalah contoh dari pemakaian Inline Style (Inline CSS) :
    <<em style="color:red;">/p</em>>
  <<em>/</em><em style="color:red;">body</em>>
</pre>
                                <br> Hasil dari contoh code di atas, Anda bisa melihat gambar di bawah ini : <br> <br>
                                <img src="<?= base_url() ?>assets/img/hasil code/css/internal.jpg" alt="internal" class="img-fluid">

                            </p>
                            <h3 class="font-weight-bold">External CSS</h3>
                            <p class="lead">
                                Dengan External CSS, kita bisa menggunakan style untuk beberapa halaman dalam suatu website. Untuk menggunakannya, kode CSS yang ditulis terpisah dengan kode HTML Eksternal CSS ditulis di sebuah file khusus yang berekstensi .css . dalam peletakan file
                                eksternal CSS dengan menuliskan link file eksternal CSS di dalam tag <em style="color:red;">
                                    <<em style="color:red;">head>
                                </em></em>.
                                <br>
                                <br>Sebagai Contoh saya membuat file CSS dengan nama styling.css berikut isi kode dari file styling.css <br>

                                <pre class="code">
   <em style="color:red;">h2</em> {
       font-family: arial;
       Color: Green;
       font-size : 30px;
     }
   <em style="color:red;">p</em> {
       font-family: arial;
       align: justify;
     }
</pre>
                                <p>Untuk menyambungkan/menggunakan file styling.css yang sudah kita buat, Anda perlu menambahkannya ke dalan file html. Dengan menggunakan tag <em style="color:red;">
                                        <<em style="color:red;">link>
                                    </em></em> <br>
                                    <pre class="code">
<<em style="color:red;">head</em>>
      <<em style="color:red;">link </em> <em style="color:green;">rel</em>="stylesheet" type="text/css" <em style="color:red;">href</em>="styling.css">
<<em>/</em><em style="color:red;">head</em>>
     <<em style="color:red;">body</em>>
          <<em style="color:red;">h2</em>> BeRCODING.ID <<em style="color:red;">/h2</em>>
     <<em style="color:red;">p</em>>Contoh Dari penggunaan External CSS<<em style="color:red;">/p</em>>
<<em>/</em><em style="color:red;">body</em>>
</pre>


                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item ml-5 mr-5 px-auto">
                                <a class="page-link bg-primary text-white shadow-none" href="<?= base_url('course_dev/styling_font') ?>">Selanjutnya &raquo;</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-6 col-md-4 border border-top-bottom-right-0 bg-light mt-5 d-none d-sm-block">
                    <div class="container py-3">
                        <div class="list-group mt-5">
                            <h3 class="text-center">
                                List Kursus
                            </h3>
                            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                <strong>1. Pengenalan CSS</strong>
                            </a>
                            <a href="<?= base_url('course_dev/styling_font') ?>" class="list-group-item list-group-item-action">
                                2. Styling Font
                            </a>
                            <a href="<?= base_url('course_dev/styling_link') ?>" class="list-group-item list-group-item-action">
                                3. Styling Link
                            </a>
                            <a href="<?= base_url('course_dev/styling_table') ?>" class="list-group-item list-group-item-action">
                                4. Styling Tabel
                            </a>
                            <a href="<?= base_url('course_dev/styling_button') ?>" class="list-group-item list-group-item-action">
                                5. Styling Button
                            </a>
                            <a href="<?= base_url('course_dev/styling_image') ?>" class="list-group-item list-group-item-action">
                                6. Styling Image
                            </a>
                            <a href="<?= base_url('course_dev/styling_icon') ?>" class="list-group-item list-group-item-action">
                                7. Icon
                            </a>
                            <a href="<?= base_url('course_dev/styling_color') ?>" class="list-group-item list-group-item-action">
                                8. Color
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Jumbotron -->

    </main>
    <!-- End #main -->