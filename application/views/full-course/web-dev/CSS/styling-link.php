    <main id="main">

        <!-- ======= Jumbotron ======= -->
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-6 col-md-8">
                    <div class="jumbotron-full-bg bg-white text-md-left ">
                        <div class="container" style="margin-top: 100px; margin-bottom: 50px;">
                            <h2 class="display-4" style="font-size: 35px;">Styling Link CSS</h2>
                            <hr class="my-2 border-dark mb-3">
                            <h3 class="font-weight-bold">Pengenalan styling Link</h3>
                            <p class="lead">
                                Dalam penulisan Styling CSS ada beberapa Property, Seperti : <br>
                                <span style="color:red;">color</span>, <span style="color:red;">font-size</span>, <span style="color:red;">display</span>, <span style="color:red;">text-direction</span>, dll, hingga kerangka dalam HTML menjadi lebih menarik
                                lagi, disamping itu juga dapat diberi style menggunakan beberapa <u>pseudo class</u>, yaitu : <br>
                                <u>
                                    <li> <span style="color:red;">a:link</span>, style untuk element a normal, belum diklik. </li>
                                    <li> <span style="color:red;">a:visited</span>, style untuk element a dimana link telah dikunjungi/di klik. </li>
                                    <li> <span style="color:red;">a:hover</span>, style untuk element a ketika mouse berada diaas element (:hover). </li>
                                    <li> <span style="color:red;">a:active</span>, style untuk element a ketika di klik (mouse ditekan, belum dilepas). </li>
                                </u>
                            </p>
                            <br>

                            <h3 class="font-weigt-bold">Pseudo Class :link</h3>
                            <p class="lead">
                                Mungkin sebagian bertanya mengapa ada <span style="color:red;">:link</span>? bukankan element <span style="color:red;">a</span> otomatis merupakan link?, jawabnya mengacu pasa <span style="color:blue;">Spesifikasi CSS</span> bahwa <span style="color:red;">:link</span> disini mengacu pada semua element HTML yang memiliki attribut <span style="color:red;">a:link{}</span> sama dengan <span style="color:red;">a[href]{}</span> (element a yang memiliki
                                attribute href, dengan nilai apapun) atau cukup
                                <span style="color:red;">a{}</span>.
                            </p>
                            <h3 class="font-weight-bold">Pseudo Class :visited</h3>
                            <p class="lead">
                                Psedo class <span style="color:red;">:visited</span> digunakan ketika user telah mengunjungi url/link tersebut, hal ini untuk mempermudah user untuk membedakan link yang telah dikunjungi (di click) dan yang belum dikunjungi.
                                Untuk alasan keamanan, seperti yang dijelaskan oleh Mozilla pada halamannya, hanya beberapa Property yang diijinkan untuk di berikan style, yaitu :
                                <ul>
                                    <li> <span style="color:blue">color</span> </li>
                                    <li> <span style="color:blue">background-color</span> (dab sub properties nya) </li>
                                    <li> <span style="color:blue">outline-color</span></li>
                                    <li> Warna untuk fill dan stroke </li>
                                </ul>
                                <br> Property Pseudo class <span style="color:red;">:visited</span> dapat bekerja jika sebelumnya telah didefinisikan pada pseudo class
                                <span style="color:red;">:link</span>, misal : kita ingin merubah warna link yang telah kita kunjungi menjadi menjadi merah dengan menuliskan properties <span style="color:red;">color: red</span> pada Pseudo class
                                <span style="color:red;">:visited</span>, warna link tersebut dapat berubah jika pada pseudo class <span style="color:red;">:link</span> juga telah didefinisikan properties color nya.
                            </p>
                            <h3 class="font-weight-bold">Pseudo Class :hover</h3>
                            <p class="lead">
                                Pseudo Class <span style="color:red;">:hover</span> akan aktif pada saat mouse berada diatas element. Class ini dapat digunakan pada semua element, namun khusus untuk browser Internet Explorer versi 6 dan sebelumnya, pseudo
                                class <span style="color:red;">:hover</span> hanya dapat digunakan pada element anchor. Pseudo class <span style="color:red;">:hover</span> pada element selain anchor salah satunya digunakan untuk membuat dropdown menu
                                yang biasanya diterapkan pada element &lt;li&ht;.
                            </p>
                            <h3 class="font-weigt-bold">Pseudo Class :acrive</h3>
                            <p class="lead">
                                Pseudo class :active digunakan ketika link di klik dan mouse pada posisi ditekan (belum dilepas), dan biasanya fungsionalnya hanya terlihat sepintas.
                            </p>
                            <h3 class="font-weight-bold">Pseudo class :focus</h3>
                            <p class="lead">
                                Pseudo class :focus aktif ketika link mendapatkan focus, focus disini pada inputbox ketika ada cursor didalamnya, untuk link, pseudo class ini aktif salah satunya ketika kita menekan tab pada keybord untuk beralih dari bagian satu ke bagian lain, dan
                                ketika mengenai link, maka pseudo class :focus akan aktif.
                            </p>
                            <h3 class="font-weight-bold">Kaidah penulisan</h3>
                            <p class="lead">
                                Penulisan pseudo class untuk link harus memperhatikan urutan tertentu,yaitu :
                                <ul>
                                    <li>Pseudo class <span style="color:red;">:hover</span> harus ditulis seterlah <span style="color:red;">:link</span> dan <span style="color:red;">:visited</span> </li>
                                    <li>Pseudo class <span style="color:red;">:active</span> harus ditulis setelah <span style="color:red;">:hover</span></li>
                                </ul>
                                <br> Contoh penulisan pada CSS :
                                <div class="code">
                                    <span style="color:green;">a:link</span> {<br>
                                    <span style="color:red;">color</span>: green;<br>
                                    <span style="color:red;">text-decoration</span>: none; <br> }
                                    <br>
                                    <span style="color:green;">:visited</span> {<br>
                                    <span style="color:red;">color</span>: green;<br> }
                                    <br>
                                    <span style="color:green;">:hover</span> {<br>
                                    <span style="color:red;">color</span>: red; <br> }
                                    <br>
                                    <span style="color:green;">a:active</span><br> {<br>
                                    <span style="color:red;">color</span>: green; <br> }
                                </div><br> Jika tidak memenuhi kaidah diatas, maka style yang kita buat tidak akan bekerja sebagaimana mestinya, hal ini disebabkan karena semua selector diatas memiliki prioritas yang sama (baca: specification), sehingga
                                jika <span style="color:red;">:link</span> berada diurutan dipaling bawah, akan menimmpa (overide) semua style diatasnya, salah satu akibatnya pseudo-class :hover tidak akan bekerja, oleh karena itu, selalu perhatikan urutan
                                penulisannya. Untuk memudahkan menghafal urutan, ada yang membuatnya menjadi suatu istilah yaitu : LoVe HAte (Link Visited Hover Avtive) atau LVHA.
                            </p>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item mr-auto ml-auto px-auto">
                                <a class="page-link bg-primary text-white shadow-none" href="<?= base_url('course_dev/styling_font') ?>" tabindex="-1">&laquo; Sebelumnya</a>
                            </li>
                            <li class="page-item mr-auto ml-auto px-auto">
                                <a class="page-link bg-primary text-white shadow-none" href="<?= base_url('course_dev/styling_table') ?>">Selanjutnya &raquo;</a>
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
                            <a href="#" class="list-group-item list-group-item-action">
                                <strong>3. Styling Link</strong>
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