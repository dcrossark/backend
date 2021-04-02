    <main id="main">

        <!-- ======= Jumbotron ======= -->
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-6 col-md-8">
                    <div class="jumbotron-full-bg bg-white text-md-left ">
                        <div class="container" style="margin-top: 100px; margin-bottom: 50px;">
                            <h2 class="display-4" style="font-size: 35px;">Styling Icon CSS</h2>
                            <hr class="my-2 border-dark mb-3">
                            <p class="lead">
                                Untuk menggunakan icon, kita bisa menggunakan beberapa library diantaranya yang bisa Anda gunakan ialah
                                <h2 class="font-weight-bold">Font Awesome Icon</h2>
                                <p class="lead">
                                    Unuk menggunakan icon Font Awesome, tambahkan link berikut di bagian head. <br>
                                    <pre class="code">
&lt;head&gt;
  &lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"&gt;
&lt;/head&gt;
                                </pre> <br> Selanjutnya gunakan tag i atau span untuk menggunakannya. <br>
                                    <pre class="code">
&lt;html&gt;
  &lt;head&gt;
     &lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;i class="fa fa-cloud"&gt;&lt;/i&gt;
    &lt;i class="fa fa-heart"&gt;&lt;/i&gt;
    &lt;i class="fa fa-car"&gt;&lt;/i&gt;
    &lt;i class="fa fa-file"&gt;&lt;/i&gt;
    &lt;i class="fa fa-bars"&gt;&lt;/i&gt;
  &lt;/body&gt;
&lt;/html&gt;
                                </pre> <br> Hasil dari apa yang sudah kita tulis sebagai berikut : <br>
                                    <img src="<?= base_url() ?>assets/img/hasil code/css/icon1.jpg" alt="icon1" class="img-fluid"><br>
                                </p>
                            </p>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item mr-auto ml-auto px-auto">
                                <a class="page-link bg-primary text-white shadow-none" href="<?= base_url('course_dev/styling_image') ?>" tabindex="-1">&laquo; Sebelumnya</a>
                            </li>
                            <li class="page-item mr-auto ml-auto px-auto">
                                <a class="page-link bg-primary text-white shadow-none" href="<?= base_url('course_dev/styling_color') ?>">Selanjutnya &raquo;</a>
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
                            <a href="<?= base_url('course_dev/pengenalan_css') ?>" class="list-group-item list-group-item-action" aria-current="true">
                                1. Pengenalan CSS
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
                            <a href="#" class="list-group-item list-group-item-action">
                                <strong>7. Icon</strong>
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