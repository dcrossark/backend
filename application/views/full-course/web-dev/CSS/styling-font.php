    <main id="main">

        <!-- ======= Jumbotron ======= -->
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-6 col-md-8">
                    <div class="jumbotron-full-bg bg-white text-md-left ">
                        <div class="container" style="margin-top: 100px; margin-bottom: 50px;">
                            <h2 class="display-4" style="font-size: 35px;">Styling Font CSS</h2>
                            <hr class="my-2 border-dark mb-3">
                            <h3 class="font-weight-bold">Styling Font</h3>
                            <p class="lead">
                                Property styling font (font-style) merupakan property CSS yang digunakan untuk memberi gaya penulisan pada suatu elemen atau selector. Properti ini paling sering digunakan untuk membuat teks menjadi miring(italic). Berikut di bawah ini 3 value atau nilai
                                dari property font-style :
                                <table border="1px solid black">
                                    <tr>
                                        <th>No</th>
                                        <th>value</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>italic</td>
                                        <td>membuat teks menjadi miring</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>normal</td>
                                        <td>menampilkan teks dengan gaya normal</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>oblique</td>
                                        <td>membuat teks menjadi lebih miring dari "italic"</td>
                                    </tr>
                                </table><br>
                                <p>dari ketiga nilai diatas, 'italic' adalah nilai yang sering didunakan. selain italic anda juga bisa menggunakan 'oblique' untuk membuat teks miring. Sedangkan nilai 'normal' jarang sekali digunakan, karena secara default
                                    suatu teks akan normal tanpa menggunakan properti font-style.</p>
                                Contoh : <br>
                                <pre class="code">
<<em style="color:red;">html</em>>

    <<em style="color:red;">head</em>>
        <<em style="color:red;">title</em>> Contoh font-style <<em style="color:red;">/title</em>>
        <<em style="color:red;">style</em> type="text/css">
         <em style="color:red;">.italic</em> {
           font-style: italic;
         }
         <em style="color:red;">.oblique</em> {
           font-style: oblique;
         }
         <em style="color:red;">.normal</em> {
           font-style: normal;
         }
        <<em>/</em><em style="color:red;">style</em>>
    <<em>/</em><em style="color:red;">head</em>>

    <<em style="color:red;">body</em>>
        <<em style="color:red;">p</em> <em style="color:orange;">class</em>=<em style="color:green;">"italic"</em>> ini adalah kalimat yang diatur dengan nilai 'italic'. <<em>/</em><em style="color:red;">p</em>>
        <<em style="color:red;">p</em> <em style="color:orange;">class</em>=<em style="color:green;">"oblique"</em>> ini adalah kalimat yang diatur dengan nilai 'oblique'. <<em>/</em><em style="color:red;">p</em>>
        <<em style="color:red;">p</em> <em style="color:orange;">class</em>=<em style="color:green;">"normal"</em>> ini adalah kalimat yang diatur dengan nilai 'normal'. <<em>/</em><em style="color:red;">p</em>>
    <<em>/</em><em style="color:red;">body</em>>

<<em>/</em><em style="color:red;">html</em>>
</pre> <br>
                                <br> Hasil : <br>
                                <img src="<?= base_url() ?>assets/img/hasil code/css/font-style.jpg" alt="font-style" class="img-fluid">
                            </p>
                            <h3 class="font-weight-bold">Font Size</h3>
                            <p class="lead">
                                FOnt-size merupakan salah satu property dalam CSS yang digunakan untuk menentukan ukuran font yang digunakan pada teks. Artinya, Anda bisa merubah ukuran Teks pada HTML yang nantinya akan ditampilkan pada Halaman Website. <br> Untuk merubah ukuran font yang digunakan pada teks, ada beberapa Value yang tersedia untuk Property font-size. Berikut ini Value untuk properti font-size : <br>
                                <table border="2px solid black">
                                    <tr style="text-align: center;">
                                        <th>No</th>
                                        <th colspan="2">Value</th>
                                    </tr>
                                    <tr>
                                        <td> 1 </td>
                                        <td style="width: 150px;"> x-small </td>
                                        <td style="width: 100px;"> x-large </td>
                                    </tr>
                                    <tr>
                                        <td> 2 </td>
                                        <td style="width: 300px;"> small </td>
                                        <td style="width: 250px;"> large </td>
                                    </tr>
                                    <tr>
                                        <td> 3 </td>
                                        <td style="width: 300px;"> xx-small </td>
                                        <td style="width: 250px;"> xx-large </td>
                                    </tr>
                                    <tr>
                                        <td> 4 </td>
                                        <td style="width: 300px;"> smaller </td>
                                        <td style="width: 250px;"> larger </td>
                                    </tr>
                                    <tr>
                                        <td> 5 </td>
                                        <td style="width: 250px;"> medium </td>
                                        <td style="width: 250px;"> initial </td>
                                    </tr>
                                    <tr>
                                        <td> 1 </td>
                                        <td style="width: 300px;"> ..px, ..em, dll </td>
                                        <td style="width: 250px;"> ..% </td>
                                    </tr>
                                </table>
                                <br>
                                <p>Nilai yang ada di dalam tabel di atas, Anda bisa menggunakannya untuk mengatur ukuran font. Nilai yang sering digunakan ialah dalam bentuk ukuran seperti px, em, cm, mm, dsn, karena penggunaannya bisa diatur sesuai keinginan.</p>
                                Berikut contoh Kodenya <br>

                                <pre class="code">
<<em style="color:red;">html</em>>

    <<em style="color:red;">head</em>>
      <<em style="color:red;">title</em>> Contoh font-size <<em style="color:red;">/title</em>>
          <<em style="color:red;">style</em> type="text/css">
               <em style="color:red;">.smaller</em> {
               font-size: smaller;
               }
               <em style="color:red;">.larger</em> {
               font-size: larger;
               }
               <em style="color:red;">.px</em> {
               font-size: 25px;
               }
          <<em>/</em><em style="color:red;">style</em>>
    <<em>/</em><em style="color:red;">head</em>>

    <<em style="color:red;">body</em>>
          <<em style="color:red;">p</em> <em style="color:orange;">class</em>=<em style="color:green;">"smaller"</em>> Ukuran Font ini diatur dengan nilai 'smaller'. <<em>/</em><em style="color:red;">p</em>>
          <<em style="color:red;">p</em> <em style="color:orange;">class</em>=<em style="color:green;">"larger"</em>> Ukuran Font ini diatur dengan nilai 'larger'. <<em>/</em><em style="color:red;">p</em>>
          <<em style="color:red;">p</em> <em style="color:orange;">class</em>=<em style="color:green;">".px"</em>> Ukuran Font ini diatur dengan nilai '25px'. <<em>/</em><em style="color:red;">p</em>>
    <<em>/</em><em style="color:red;">body</em>>

<<em>/</em><em style="color:red;">html</em>>
</pre> <br>

                                <br> Hasil : <br>
                                <img src="<?= base_url() ?>assets/img/hasil code/css/font-size.jpg" alt="font-size" class="img-fluid">
                                <br>
                            </p>
                            <h3 class="font-weight-bold">Font Weight</h3>
                            <p class="lead">
                                font-weight merupakan salah satu property yang terdapat di dalam CSS, kegunaan dari property tersebut untuk menentukan ketebalan dari font yang digunakan pada teks. Anda bisa menggunakan properti ini untuk membuat Teks menjadi tebal dengan istilah <b>Bold</b>.
                                Sedangkan Value atau Nilai dari font-Weight ada beberapa macam. Berikut nilai dari font-weight tersebut :<br>

                                <ul>
                                    <li> bold = Membuat font pada teks/karakter menjadi tebal </li>
                                    <li> bolder = membuat font pada teks/karakter menjadi lebih tebal </li>
                                    <li> lighter = Membuat font pada teks/karakter menjadi lebih tipis </li>
                                    <li> normal = Membuat font pada teks/karakter menjadi normal </li>
                                    <li> initial = mengatur value dari properti menjadi default </li>
                                    <li> 100,200,....,900 = Mengatur ketebalan font pada teks/karakter <br> berdasarkan ukuran nilai yang dipilih </li>
                                </ul>
                                <br> Contoh : <br>
                                <pre class="code">
<<em style="color:red;">html</em>>

  <<em style="color:red;">head</em>>
       <<em style="color:red;">title</em>> Contoh font-weight <<em style="color:red;">/title</em>>
      <<em style="color:red;">style</em> type="text/css">
           <em style="color:red;">h1</em> {
           font-weight: 900;
           }
           <em style="color:red;">h2</em> {
           font-weight: bold;
           }
           <em style="color:red;">h3</em> {
           font-weight: normal;
           }
           <em style="color:red;">h4</em> {
           font-weight: lighter;
           }
      <<em>/</em><em style="color:red;">style</em>>
  <<em>/</em><em style="color:red;">head</em>>

  <<em style="color:red;">body</em>>
      <<em style="color:red;">h1</em>> Ketebalan diatur dengan nilai '900'. <<em>/</em><em style="color:red;">h1</em>>
      <<em style="color:red;">h2</em>> Ketebalan diatur dengan nilai 'bold'. <<em>/</em><em style="color:red;">h2</em>>
      <<em style="color:red;">h3</em>> Ketebalan diatur dengan nilai 'normal'. <<em>/</em><em style="color:red;">h3</em>>
      <<em style="color:red;">h4</em>> Ketebalan diatur dengan nilai 'lighter'. <<em>/</em><em style="color:red;">h4</em>>
  <<em>/</em><em style="color:red;">body</em>>

<<em>/</em><em style="color:red;">html</em>>
</pre> <br>


                                <br> Hasil : <br>
                                <img src="<?= base_url() ?>assets/img/hasil code/css/font-weight.jpg" alt="font-weight" class="img-fluid">
                                <br>
                            </p>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item mr-auto ml-auto px-auto">
                                <a class="page-link bg-primary text-white shadow-none" href="<?= base_url('course_dev/pengenalan_css') ?>" tabindex="-1">&laquo; Sebelumnya</a>
                            </li>
                            <li class="page-item mr-auto ml-auto px-auto">
                                <a class="page-link bg-primary text-white shadow-none" href="<?= base_url('course_dev/styling_link') ?>">Selanjutnya &raquo;</a>
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
                            <a href="#" class="list-group-item list-group-item-action">
                                <strong>2. Styling Font</strong>
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