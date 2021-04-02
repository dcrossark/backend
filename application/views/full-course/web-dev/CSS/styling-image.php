    <main id="main">

        <!-- ======= Jumbotron ======= -->
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-6 col-md-8">
                    <div class="jumbotron-full-bg bg-white text-md-left ">
                        <div class="container" style="margin-top: 100px; margin-bottom: 50px;">
                            <h2 class="display-4" style="font-size: 35px;">Styling Image CSS</h2>
                            <hr class="my-2 border-dark mb-3">
                            <h3 class="font-weight-bold">Pengenalan</h3>
                            <p class="lead">
                                Tujuan styling image pada CSS ialah, gambar-gambar yang kita masukan ke dalam website bisa lebih terlihat menarik, meskipun hal tersebut sering diabaikan oleh web programmer tetapi tidak dengan web desainer, keduanya jelas bersebrangan. Namun jika tujuan
                                kita adalah untuk menjadi web programmer tidak ada salahnya mempelajari web desainer agar keduanya kita kuasai maka harus paham betul sintaks CSS.

                                <h3 class="font-weight-bold">Mengatur Gambar Pada CSS</h3>
                                <p>
                                    Dalam mengatur gambar pada CSS ada beberapa properti yang harus dipahami, seprti dimensi, border dan lain sebagainya, kedua hal tersebut bisa mempengaruhi <b>tampilan gambar pada website</b>, tetapi itu tergantung naluri
                                    desain masing-masing koder. Berikut ini properti yang bisa digunakan untuk gambar yang akan kita bahas : <br>
                                    <table border="1">
                                        <tr>
                                            <th>Properti</th>
                                            <th>Keterangan</th>
                                        </tr>
                                        <tr>
                                            <td>Border</td>
                                            <td>Properti border digunakan untuk mengatur garis pada gambar</td>
                                        </tr>
                                        <tr>
                                            <td>width</td>
                                            <td>Properti width digunakan untuk mengatur lebar dimensi sebuah gambar</td>
                                        </tr>
                                        <tr>
                                            <td>height</td>
                                            <td>Properti height digunakan untuk mengatur tinggi dimensi sebuah gambar</td>
                                        </tr>
                                        <tr>
                                            <td>opacity</td>
                                            <td>Properti opacity digunakan untuk membuat gambar terlihat transparan</td>
                                        </tr>
                                    </table> <br> Dari Masing-masing properti diatas kita akan bahas satu-persatu secara detail agar mudah dipahami, tetapi jangan lupa untuk langsung dipraktekan dikomputer masing-masing.
                                </p>
                                <h3>Mengatur Border Atau Garis Pada Gambar</h3>
                                <p class="lead">
                                    Border atau garis pada gambar ternyata dapat memperbaiki tampilan gambar yang terlihat biasa saja, berikut ini adalah cara untuk mengatur border atau garis pada gambar dengan css yaitu menggunakan properti border. Dan jangan lupa untuk menempatkan gambar
                                    satu file dengan file css/html.
                                    <br>
                                    <pre class="code">
&lt;!DOCTYPE&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Mengatur Gambar Pada CSS&lt;/title&gt;
   &lt;style type="text/css"&gt;
      img {
        border: 3px solid blue;
      }
   &lt;/style&gt;
 &lt;/head&gt;
 &lt;body&gt;
  &lt;img src="image.jpg"&gt;
 &lt;/body&gt;
&lt;/html&gt;

                                </pre> <br> Dari kode diatas terlihat bahwa kita telah membuat garis berwarna biru yang mengelilingi gammbar tersebut, anda dapat bereksperimen dengan membuat garis sesuai dengan yang
                                    anda inginkan. Berikut di bawah ini tampilan dari kode yang barusan kita buat : <br>
                                    <img src="<?= base_url() ?>assets/img/hasil code/css/img-border.jpg" alt="img-border" class="img-fluid"><br>
                                    <h3 class="font-weight-bold">Mengatur Lebar Gambar Dengan CSS</h3>
                                    <p class="lead">
                                        Untuk mengatur lebar gambar dengan CSS yaitu dengan menggunakan width, namun apabila kita hanya menentukan lebarnya saja maka tingginya akan dengan sendirinya menyesuaikan lebar tersebut. Berikut ialah contoh penggunaan properti width.
                                        <pre class="code">
&lt;style type="text/css"&gt;
    img {
      width: 500px;
    }
 &lt;/style&gt;
                                  </pre> <br> Terlihat sebuah gambar diberikan lebar 500px atai pixel, maka tinddi dari gambar tersebut akan menyesuaikan lebar dari gambarnya.
                                    </p>
                                    <h3 class="font-weight-bold">Mengatur Tinggi Gambar Dengan CSS</h3>
                                    <p class="lead">
                                        Untuk mengatur tinggi gambar dengan css yaitu dengan menggunakan properti height, sama seperti width, jika pada width gambar akan menyesuaikan tingginya, nah ini sebaliknya pada mengatur tinggi gambar dengan height akan menyesuaikan lebar dari gambar
                                        tersebut. Berikut ialah contoh penggunaan properti height.
                                        <pre class="code">
&lt;style type="text/css"&gt;
    img {
      height: 500px;
    }
 &lt;/style&gt;
                                  </pre> <br> Dari kode diatas kita telah mengatur tinggi gambar dengan css yang diberikan nilai 500px, jika ternyata lebar melebiri tinggi maka gambar akan terlihat sangat lebar
                                        karna pada tinggi 500px gambar akan menyesuaikan lebar gambar tersebut.
                                    </p>
                                    <h3 class="font-weight-bold">Mengatur Gambar Agar Menjadi Transparan</h3>
                                    <p class="lead">
                                        Ternyata di css kita dapat mengatur gambar agar menjadi transpara, yaitu dengan properti opacity, namun dibeberapa browser penggunaan opacity berbeda-beda. Berikut ialah contoh penggunaannya.<br>
                                        <pre class="code">
&lt;!DOCTYPE&gt;
&lt;html&gt;
    &lt;head&gt;
     &lt;title&gt;Mengatur Gambar Pada CSS&lt;/title&gt;
     &lt;style type="text/css"&gt;
     img {
          width: 200px;
     }
     .opacity {
          width: 200px;
          opacity: 0.5;
     }
    &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
       &lt;strong&gt;Gambar Tanpa Opacity&lt;/strong&gt; &lt;br&gt;
      &lt;img src="image.jpg" widt"200px"&gt; &lt;br&gt; &lt;br&gt;
      &lt;strong&gt;Gambar Dengan Opacity&lt;/strong&gt; &lt;br&gt;
     &lt;img class="opacity" src="image.jpg" widt"200px"&gt; &lt;

    &lt;/body&gt;
&lt;/html&gt;
                                  </pre> <br> Dan dibawah ini Hasil dari code di atas : <br>
                                        <img src="<?= base_url() ?>assets/img/hasil code/css/img-opacity.jpg" alt="opacity" class="img-fluid"> <br> Terlihat hasil dari kedua gambar tersebut setelah ditambahkan opacity dengan ketajaman 0.5, yang satu memiliki
                                        transparan dan yang satunya lagi tidak <br> Seperti yang sudah kita pahami bahwa properti opacity ini tidak semua browser mendukungnya, namun tenang kita mempunyai solusi untuk itu dengan menambahkan properti dari
                                        masing-masing browser. Berikut Contohnya : <br>
                                        <pre class="code">
&lt;style type="text/css"&gt;
   .opacity {
     -webkit-opacity: 0.5; /* google crome */
        -moz-opacity: 0.5; /* mozilla firefox */
             opacity: 0.5; /* global */
               filter: alpha(opacity=50); /*internet exploer */
   }
&lt;/style&gt;
                                   </pre> <br> Itulah masing-masing properti untuk beberapa browser agar dapat mendukung gambar transparan di browser-browser tersebut.
                                    </p>
                                </p>
                            </p>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item mr-auto ml-auto px-auto">
                                <a class="page-link bg-primary text-white shadow-none" href="<?= base_url('course_dev/styling_button') ?>" tabindex="-1">&laquo; Sebelumnya</a>
                            </li>
                            <li class="page-item mr-auto ml-auto px-auto">
                                <a class="page-link bg-primary text-white shadow-none" href="<?= base_url('course_dev/styling_icon') ?>">Selanjutnya &raquo;</a>
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
                            <a href="#" class="list-group-item list-group-item-action">
                                <strong>6. Styling Image</strong>
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