   <main id="main">

     <!-- ======= Jumbotron ======= -->
     <div class="container">
       <div class="row no-gutters">
         <div class="col-sm-6 col-md-8">
           <div class="jumbotron-full-bg bg-white text-md-left ">
             <div class="container" style="margin-top: 100px; margin-bottom: 50px;">
               <h2 class="display-4" style="font-size: 35px;">Styling Color CSS</h2>
               <hr class="my-2 border-dark mb-3">
               <p class="lead">
                 Color (warna) bisa digunakan dengan beberapa cara. Berikut akan dijelaskan cara penggunaannya. <br>
                 <h2 class="font-weight-bold">Color Names</h2>
                 Untuk menggunakan color/warna bisa dengan menggunakan nama warna yang akan Anda pakai. <br> Contoh : <br>
                 <pre class="code">
&lt;head&gt;
   &lt;style type="text/css"&gt;
    .dodgerBlue {
      background-color: DodgerBlue;
    }
    .tomato {
      background-color: Tomato;
    }
  &lt/style&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;h1 class="dodgerBlue"&gt; DodgerBlue &lt;/h1&gt;
  &lt;h1 class="tomato"&gt; Tomato &lt;/h1&gt;
&lt;/body&gt;
                              </pre><br> Hasil dari code yang kita tuliskan di atas, akan seperti dibawah ini : <br>
                 <img src="<?= base_url() ?>assets/img/hasil code/css/color.jpg" alt="color" class="img-fluid"> <br>
                 <h2 class="font-weight-bold">Menggunakan RGB</h2>
                 Selain menggunakan color names, dalam styling color juga bisa menggunakan kombinasi nilai RGB (red, green, blue) dengan nilai 0 sampai 255. <br> Contoh : <br>
                 <pre class="code">
&lt;head&gt;
   &lt;style type="text/css"&gt;
      .red {
        background-color: rgb(255, 0, 0);
      }

      .green {
        background-color: rgb(0, 255, 0);
      }

      .blue {
        background-color: rgb(0, 0, 255);
      }

      .hex {
        background-color: rgb(100, 50, 70);
      }
  &lt/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1 class="red"&gt; 255, 0, 0 (Red) &lt;/h1&gt;
    &lt;h1 class="green"&gt; 0, 255, 0 (Green) &lt;/h1&gt;
    &lt;h1 class="blue"&gt; 0, 0, 255 (blue) &lt;/h1&gt;
    &lt;h1 class="hex"&gt; 100, 50, 70 &lt;/h1&gt;
&lt;/body&gt;
                              </pre> <br>
                 <img src="<?= base_url() ?>assets/img/hasil code/css/color1.jpg" alt="color1" class="img-fluid"><br>
                 <h2 class="font-weight-bold">Menggunakan RGBA</h2>
                 Ini adalah salah satu dari styling color dengan menggunakan kombilasi nilai RGBA (red, green, blue, alpa) dengan nilai 0 sampai 255 dan alpha digunakan untuk mengatur transparansi. Nilai alpha berupa bilangan float (pecahan desimal) antara 0 (transparan)
                 hingga 1 (tidak transparan). <br> Contoh : <br>
                 <pre class="code">
&lt;head&gt;
   &lt;style type="text/css"&gt;
      .red {
        background-color: rgb(255, 0, 0, 1);
      }

      .green {
        background-color: rgba(0, 255, 0, .5);
      }

      .hex {
        background-color: rgb(100, 50, 70, .8);
      }
  &lt/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1 class="red"&gt; 255, 0, 0, 1 (Red) &lt;/h1&gt;
    &lt;h1 class="green"&gt; 0, 255, 0, .5 (Green) &lt;/h1&gt;
    &lt;h1 class="hex"&gt; 100, 50, 70, .8 &lt;/h1&gt;
&lt;/body&gt;
                              </pre> <br> Hasil dari code di atas, akan seperti dibawah ini : <br> <br>
                 <img src="<?= base_url() ?>assets/img/hasil code/css/rgba.jpg" alt="RGBA" class="img-fluid"> <br>

                 <h2 class="font-weight-bold">Menggunakan HEX</h2>
                 Styling color juga bisa dibentuk menggunakan hexadecimal dengan format <b>#rrggbb</b> rr(red) , gg(green), bb(blue) dengan nilai antara 00 sampai ff (sama dengan 0 sampai 255). <br> Contoh penggunannya : <br> <br>
                 <pre class="code">
&lt;head&gt;
   &lt;style type="text/css"&gt;
      .contoh1 {
        background-color: #ff0000;
      }

      .contoh2 {
        background-color: #00ff00;
      }

      .contoh3 {
        background-color: #0000ff;
      }

      .contoh4 {
        background-color: #643246;
      }
  &lt/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1 class="contoh1"&gt; #ff0000 &lt;/h1&gt;
    &lt;h1 class="contoh2"&gt;#00ff00 &lt;/h1&gt;
    &lt;h1 class="contoh3"&gt;#0000ff&lt;/h1&gt;
    &lt;h1 class="contoh4"&gt;#643246&lt;/h1&gt;
&lt;/body&gt;
                              </pre> <br> Hasil dari code di atas, akan seperti dibawah ini : <br> <br>
                 <img src="<?= base_url() ?>assets/img/hasil code/css/hex.jpg" alt="hexadecimal" class="img-fluid"> <br>
               </p>
             </div>
           </div>
           <nav aria-label="Page navigation example">
             <ul class="pagination justify-content-end">
               <li class="page-item mr-auto ml-5 px-auto">
                 <a class="page-link bg-primary text-white shadow-none" href="<?= base_url('course_dev/styling_icon') ?>" tabindex="-1">&laquo; Sebelumnya</a>
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
               <a href="<?= base_url('course_dev/styling_icon') ?>" class="list-group-item list-group-item-action">
                 7. Icon
               </a>
               <a href="#" class="list-group-item list-group-item-action">
                 <strong>8. Color</strong>
               </a>
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- End Jumbotron -->

   </main>
   <!-- End #main -->