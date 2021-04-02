    <main id="main">

        <!-- ======= Jumbotron ======= -->
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-6 col-md-8">
                    <div class="jumbotron-full-bg bg-white text-md-left ">
                        <div class="container" style="margin-top: 100px; margin-bottom: 50px;">
                            <h2 class="display-4" style="font-size: 35px;">Styling Tabel CSS</h2>
                            <hr class="my-2 border-dark mb-3">
                            <h3 class="font-weight-bold">Pengenalan</h3>
                            <p class="lead">
                                Dalam mengatur tabel dengan css agar sesuai dengan yang kita mau. Ada beberapa properti yang akan kita gunakan untuk membuat tabel sesuai dengan yang kita inginkan. Berikut ini properti-properti yang digunakan dalam mengatur Tabel : <br>
                                <ul>
                                    <li>border-collapse = Properti border-collapse digunakan untuk mmemisahkan garis atau border pada tabel</li>
                                    <li>border-spacing = Properti border-spacing digunakan untuk membuat jarak antara kolom didalam tabel</li>
                                    <li>caption-side = Properti caption-side berguna untuk menentukan letak caption sebuah table</li>
                                    <li>empty-cells = Menentukan batas garis apakah ditampilkan apabila kolom kosong</li>
                                </ul>
                            </p>
                            <h3 class="font-weight-bolt">Memisahkan Border Pada Tabel</h3>
                            <p class="lead">
                                Untuk dapat memisahkan border pada tabel dengan css yaitu denan menggunakan properti border-collapse , dimana border pada tiap-tiap batas tabel seperti kolom dan baris serta pada induk tabel itu sendiri akan terpisah.<br>
                                <pre class="code">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
      &lt;head&gt;
          &lt;title&gt;Mengatur Tabel Dengan CSS&lt;/title&gt;
          &lt;style&gt;
              table.satu {
                  border-collapse: collapse;
              }
              table.dua {
                  border-collapse: separate;
              }
              td.a {
                  border-style: dotted;
                  border-width: 3px;
                  border-color: #000000;
                  padding: 10px;
              }
              td.b {
                  border-style: solid;
                  border-width: 3px;
                  border-color: #000000;
                  padding: 10px;
              }
         &lt;/style&gt;
     &lt;/head&gt;
  &lt;body&gt;
        &lt;table class="satu" border="1"&gt;
                &lt;caption&gt;Collapse Border&lt;/caption&gt;
                  &lt;tr&gt;
                      &lt;td class="a"&gt; Cell A Collapse &lt;/td&gt; &lt;/tr&gt;
                      &lt;td class="b"&gt; Cell B Collapse &lt;/td&gt; &lt;/tr&gt;
                  &lt;/tr&gt;
        &lt;/table&gt;
        &lt;table class="dua" border="1"&gt;
                &lt;caption&gt;Separate Border&lt;/caption&gt;
                  &lt;tr&gt;
                      &lt;td class="a"&gt; Cell A Separate &lt;/td&gt; &lt;/tr&gt;
                      &lt;td class="b"&gt; Cell B Separate &lt;/td&gt; &lt;/tr&gt;
                  &lt;/tr&gt;
        &lt;/table&gt;
  &lt;/body&gt;
&lt;/hml&gt;
</pre> <br> Hasil dari code di atas, Anda bisa melihat di bawah : <br>
                                <img src="<?= base_url() ?>assets/img/hasil code/CSS/tabel.jpg" alt="tabel" class="img-fluid"> <br> Ada dua style tabel ditas, satu style tabel dengan menggunakan properti border-collapse, dengan nilai collapse, satunya lagi properti
                                border-collapse, dengan nilai separate agar memudahkan Anda memahami setiap selector dan deklarasinya anda bisa mencobanya, Border-collapse yang memiliki nilai separate akan terlihat seperti memisahkan dii dengan kolom
                                bahkan induk tabel didalamnya.
                            </p>
                            <h3 class="font-weight-bold">Membuat Jarak Antara Kolom Dan Baris</h3>
                            <p class="lead">
                                Untuk dapat membuat jarak antara kolom dan baris yaitu dengan menggunakan properti border-spacing, dimana pada masing-masing kolom dan baris memiliki jarak, begitupun pada batas utamanya akan memiliki jarak tergantung kita menentukan ukurannya, Berikut
                                ini contohnya : <br>
                                <pre class="code">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
      &lt;title&gt;Mengatur tabel dengan CSS&lt;/title&gt;
      &lt;style type="text/css"&gt;
        table {
          border-spacing: 10px;
        }
      &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;table border="1"&gt;
          &lt;caption&gt;Border Spacing&lt;/caption&gt;
            &lt;tr&gt;
              &lt;td&gt;Cell Border Spacing&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
              &lt;td&gt;Cell Border Spacing&lt;/td&gt;
            &lt;/tr&gt;
      &lt;/table&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre> <br> Jika Anda membukanya di browser maka hasilnya akan seperti dibawah ini : <br>
                                <img src="<?= base_url() ?>assets/img/hasil code/css/spacing.jpg" alt="spacing" class="img-fluid">
                            </p>
                            <h3 class="font-weight-bold">Mengatur Posisi Judul atau Caption Tabel</h3>
                            <p class="lead">
                                Untuk membuat judul pada tabel menggunakan tag caption, dimana posisi tag caption ini secara default/otomatis akan berada di atas tabel, tetapi dengan properti caption-side Anda dapat memindahkan posisi caption tersebu. Berikut ini contohnya : <br>
                                <pre class="code">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
      &lt;head&gt;
          &lt;title&gt;Mengatur tabel dengan CSS&lt;/title&gt;
              &lt;style type="text/css"&gt;
                    table caption {
                         caption-side: bottom;
                    }
              &lt;/style&gt;
      &lt;/head&gt;
      &lt;body&gt;
            &lt;table border="1"&gt;
                &lt;caption&gt;Caption Tabel&lt;/caption&gt;
                    &lt;tr&gt;
                        &lt;td&gt;Mengatur caption&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;td&gt;menggunakan CSS&lt;/td&gt;
                    &lt;/tr&gt;
           &lt;/table&gt;
      &lt;/body&gt;
&lt;/html&gt;
</pre><br> Jika di jalankan maka akan seprti di bawah ini : <br>
                                <img src="<?= base_url() ?>assets/img/hasil code/css/caption.jpg" alt="caption" class="img-fluid"> <br> Sebenarnya nilai yang bisa kita gunakan pada properti caption-side ini ada left,right,top dan bottom. Tetapi beberapa browser
                                terkadang tidak mendukung posisi left dan right secara bawaan.
                            </p>
                            <h3 class="font-weight-bold">Menghilangkan Garis Pada Kolom Kosong</h3>
                            <p class="lead">
                                Untuk dapat menyembunyikan atau menghilangkan garis pada kolom yang kosong didalam sebuah tabel dapat dengan menggunakan properti empty-cells, properti-cells ini sangat pintar, ketika ada sebuah kolom yang kosong maka kolom tersebut tidak akan menampilkan
                                tepi di dalam kolom tersebut, Berikut contoh codenya : <br>
                                <pre class="code">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
      &lt;head&gt;
          &lt;title&gt;Mengatur tabel dengan CSS&lt;/title&gt;
              &lt;style type="text/css"&gt;
                    table {
                         empty-cells: hide;
                    }
              &lt;/style&gt;
      &lt;/head&gt;
      &lt;body&gt;
            &lt;table border="1"&gt;
                &lt;caption&gt;Empty Cells&lt;/caption&gt;
                    &lt;tr&gt;
                        &lt;td&gt;Mengatur tabel&lt;/td&gt;
                        &lt;td&gt;Mengatur tabel&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;td&gt;menggunakan CSS&lt;/td&gt;
                        &lt;td&gt;&lt;/td&gt;
                    &lt;/tr&gt;
           &lt;/table&gt;
      &lt;/body&gt;
&lt;/html&gt;
</pre><br> Dan Hasilnya akan seperti gambar dibawah ini : <br>
                                <img src="<?= base_url() ?>assets/img/hasil code/css/empty.jpg" alt="empty" class="img-fluid"> <br> Dari tabel yang kita buat diatas terlihat ada salah satu kolom terakhir yang tidak memiliki nilai, bisanya jika tida ditambahkan
                                properti empty-cells maka didalam kolom tersebut akan menampilkan garis atau border, hal tersebut seperti ada nilai didalam kolom untuk mengatasi hal tersebut adalah dengan menggunakan properti yang barusa kita coba, yaitu
                                empty-cells.
                            </p>
                            </p>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item mr-auto ml-auto px-auto">
                                <a class="page-link bg-primary text-white shadow-none" href="<?= base_url('course_dev/styling_link') ?>" tabindex="-1">&laquo; Sebelumnya</a>
                            </li>
                            <li class="page-item mr-auto ml-auto px-auto">
                                <a class="page-link bg-primary text-white shadow-none" href="<?= base_url('course_dev/styling_button') ?>">Selanjutnya &raquo;</a>
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
                            <a href="#" class="list-group-item list-group-item-action">
                                <strong>4. Styling Tabel</strong>
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