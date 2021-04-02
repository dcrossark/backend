    <main id="main">

        <!-- ======= Jumbotron ======= -->
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-6 col-md-8">
                    <div class="jumbotron-full-bg bg-white text-md-left ">
                        <div class="container" style="margin-top: 100px; margin-bottom: 50px;">
                            <h2 class="display-4" style="font-size: 35px;">Styling Button CSS</h2>
                            <hr class="my-2 border-dark mb-3">
                            <h3 class="font-weight-bold">Pengenalan</h3>
                            <p class="lead">
                                Tombol (button) telah menjadi bagian yang tidak terhindarkan lagi dari pengembangan front-end. Oleh karena itu, penting untuk mengingat beberapa hal sebelum Anda mulai menata tombol. Ini beberapa cara menata tombol menggunakan CSS. <br> <br>
                                <b>HTML CODE</b>
                                <pre class="code">
&lt;h1&gt;Style Button 1 &lt;/h1&gt;

&lt;button class="btn first"&gt;Tombol 1&lt;/button&gt;

                            </pre>
                                <br><br>
                                <b>CSS CODE Styling 1</b>
                                <pre class="code">

.btn {
     box-sizing: border-box;
     -webkit-appearance: none;
        -moz-appearance: none;
             appearance: none;
     background-color: transparent;
     border: 2px solid #e74c3c;
     border-radius: 0.6em;
     color: #e74c3c;
     cursor: pointer;
     display: flex;
     align-self: center;
     font-size: 1rem;
     font-weight: 400;
     line-height: 1;
     margin: 20px;
     padding: 1.2em 2.8em;
     text-decoration: none;
     text-align: center;
     text-transform: uppercase;
     font-family: 'Montserrat', sans-serif;
     font-weight: 700;
}
.btn:hover, .btn:focus {
     color: #fff;
     outline: 0;
}

.first {
     transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
}
.first:hover {
     box-shadow: 0 0 40px 40px #e74c3c inset;
}
                </pre> <br><br> Hasil dari code yang kita tulis di atas akan seperti dibawah ini : <br>
                                <img src="<?= base_url() ?>assets/img/hasil code/css/button1.gif" alt="button 1" class="img-fluid"> <br><br>

                            </p>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item mr-auto ml-auto px-auto">
                                <a class="page-link bg-primary text-white shadow-none" href="<?= base_url('course_dev/styling_table') ?>" tabindex="-1">&laquo; Sebelumnya</a>
                            </li>
                            <li class="page-item mr-auto ml-auto px-auto">
                                <a class="page-link bg-primary text-white shadow-none" href="<?= base_url('course_dev/styling_image') ?>">Selanjutnya &raquo;</a>
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
                            <a href="#" class="list-group-item list-group-item-action">
                                <strong>5. Styling Button</strong>
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