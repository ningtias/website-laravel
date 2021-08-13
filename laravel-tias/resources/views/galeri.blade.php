<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> GALERI - t i a s</title>
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
          <a class="navbar-brand" href="#">GALERI</a>
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
          <h2 class="display-3" id="portofolio">GALERI</h2>
          <br>
          <div class="row pt-4 gx-4 gy-4">
            <div class="col-md-4">
              <div class="card crop-img">
                <img
                  src="images/slide2.jpg"
                  class="card-img-top"
                  width="200"
                  height="200"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="card crop-img">
                <img
                  src="images/f3.jpg"
                  class="card-img-top"
                  width="200"
                  height="200"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="card crop-img">
                <img
                  src="images/g1.png"
                  class="card-img-top"
                  width="200"
                  height="200"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="card crop-img">
                <img
                  src="images/g7.jpg"
                  class="card-img-top"
                  width="200"
                  height="200"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="card crop-img">
                <img
                  src="images/slide1.jpg"
                  class="card-img-top"
                  width="200"
                  height="200"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="card crop-img">
                <img
                  src="images/p2.jpg"
                  class="card-img-top"
                  width="200"
                  height="200"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="card crop-img">
                <img
                  src="images/slide3.jpg"
                  class="card-img-top"
                  width="200"
                  height="200"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="card crop-img">
                <img
                  src="images/f2.jpg"
                  class="card-img-top"
                  width="200"
                  height="200"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="card crop-img">
                <img
                  src="images/g8.jpg"
                  class="card-img-top"
                  width="200"
                  height="200"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>