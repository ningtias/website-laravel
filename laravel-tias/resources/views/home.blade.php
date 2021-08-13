<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> HOME - t i a s</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <style type ="text/css">
      .banner {
        background: url("images/g4.jpg")
          no-repeat center center;
        background-size: cover;
        padding-top: 20%;
        padding-bottom: 20%;
        color: #fff;
      }
      
      .lingkaran {
        display: inline-block;
        border-radius: 50%;
        width: 150px;
        margin: auto;
        height: 150px;
        color: #fff;
        background-color: #dc3545;
      }
      
      .lingkaran i {
        position: relative;
        top: 30px;
      }
      
      .crop-img {
        object-fit: cover;
      }
      
      .tim img {
        width: 250px;
        border: 10px solid #cccccc;
      }
      
      a.social {
        display: inline-block;
        width: 40px;
        height: 40px;
        color: #fff;
        border-radius: 50%;
        background-color: #333;
        line-height: 40px;
      }
      
      .client img {
        height: auto;
        max-height: 50px;
      }
      
      .kontak {
        background: url("https://wallpaperaccess.com/full/1867010.jpg") no-repeat
          center center;
        background-size: cover;
        padding-bottom: 20%;
        padding-top: 20%;
        color: #fff;
      }
      </style>
      <!-- navigasi -->
      <nav
        class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
      >
        <div class="container">
          <a class="navbar-brand" href="#">HOME</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarText"
            aria-controls="navbarText"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/indx#layanan">BACK TO MENU</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container text-center">
          <h2 class="display-3" id="portofolio">HOME</h2>
          <p>
            <b>
            Silahkan klik tautan pada gambar dibawah ini untuk menambah wawasan dan pengetahuan kita.
            </b>
          </p>
          <div class="row pt-4 gx-4 gy-4">
            <div class="col-md-4">
              <div class="card crop-img">
                <a href="https://qwords.com/blog/jenis-bahasa-pemrograman/">
                <img
                  src="https://qwords.com/blog/wp-content/uploads/2020/06/Jenis-Bahasa-Pemrograman.jpg"
                  class="card-img-top"
                  width="200"
                  height="200"
                />
              </a>
                <div class="card-body">
                  <h5 class="card-title">7 Jenis Bahasa Pemrograman Dengan Pengguna Terbanyak</h5>
                  <p class="card-text">
                    Saat ini ada begitu banyak jenis bahasa pemrograman yang dapat Anda jumpai di zaman serba digital seperti sekarang.
                  </p>
                </div>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="card crop-img">
                <a href="https://www.codepolitan.com/mengenal-dan-memulai-pemrograman-java-belajar-java">
                  <img
                    src="https://static.cdn-cdpl.com/source/1907/Java.png"
                    class="card-img-top"
                    width="200"
                    height="200"
                  />
                </a>
                <div class="card-body">
                  <h5 class="card-title">Mengenal dan Memulai Pemrograman Java | Belajar Java</h5>
                  <p class="card-text">
                    Java sebagai salah satu bahasa pemrograman yang sudah berumur dari era 1990-an, kian berkembang dan melebarkan dominasinya di berbagai bidang.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card crop-img">
                <a href="https://www.petanikode.com/c-untuk-pemula/">
                  <img
                    src="https://www.petanikode.com/img/c/c.png"
                    class="card-img-top"
                    width="200"
                    height="200"
                  />
                </a>
                <div class="card-body">
                  <h5 class="card-title">Belajar Pemrograman C #1: Pengenalan Pemrograman C untuk Pemula</h5>
                  <p class="card-text">
                    Bahasa pemrograman C biasaya dipelajari pada jurusan teknik informatika. 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card crop-img">
                <a href="https://www.immersa-lab.com/mengenal-bahasa-pemrograman-php.htm">
                  <img
                    src="https://www.immersa-lab.com/wp-content/uploads/2018/03/Mengenal-Bahasa-Pemrograman-PHP_Featured-Image-696x430.jpg"
                    class="card-img-top"
                    width="200"
                    height="200"
                  />
                </a>
                <div class="card-body">
                  <h5 class="card-title">MENGENAL BAHASA PEMROGRAMAN PHP</h5>
                  <p class="card-text">
                    Bahasa pemrograman PHP adalah bahasa pemrograman script server-side yang didesain untuk pengembangan web.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card crop-img">
                <a href="https://qwords.com/blog/pengertian-framework-laravel/">
                  <img
                    src="https://qwords.com/blog/wp-content/uploads/2020/02/Pengertian-Laravel-.jpg"
                    class="card-img-top"
                    width="200"
                    height="200"
                  />
                </a>
                <div class="card-body">
                  <h5 class="card-title">Pengertian Framework Laravel Beserta Fitur dan Keunggulannya</h5>
                  <p class="card-text">
                    Jika Anda sudah tahu pemrograman PHP, maka Laravel ini adalah salah satu framework PHP yang bisa membantu Anda dalam menggunakan PHP lebih mudah, cepat dan efisien dalam proses develop website.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card crop-img">
                <a href="https://www.matawebsite.com/blog/mengenal-bootstrap-secara-menyeluruh">
                  <img
                    src="https://www.matawebsite.com/images/blog/1553600819.mengenal_bootstrap_secara_menyeluruh.png"
                    class="card-img-top"
                    width="200"
                    height="200"
                  />
                </a>
                <div class="card-body">
                  <h5 class="card-title">Mengenal Bootstrap Secara Menyeluruh</h5>
                  <p class="card-text">
                    Mengenal bootstrap secara menyeluruh dan pengertian bagaimana memfungsikan php framework secara baik dan mengerti apa itu php framework menggunakan bootstrap.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


  </body>

</html>