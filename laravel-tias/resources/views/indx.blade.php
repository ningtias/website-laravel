<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> MENU - t i a s</title>
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
      background-color: ##E6E6FA;
    }
    
    .lingkaran i {
      position: relative;
      top: 30px;
    }
    
    .crop-img {
      object-fit: cover;
    }
    
    </style>
    <!-- navigasi -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="#">MENU</a>
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
              <a class="nav-link" href="http://localhost:8000/indx">BACK TO MENU</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- banner -->
    <div class="container-fluid banner">
      <div class="container text-center">
        <h3 class="display-6">Hai! How's Your Day?</h3>
        <h4 class="display-1">WELCOME!</h4>
        <a href="#layanan">
          <button type="button" class="btn btn-secondary btn-lg">
            Click Here For Menu
          </button>
        </a>
      </div>
    </div>
    <!-- layanan -->
    <div class="container-fluid layanan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="layanan">MENU</h2>
        <br> <br> <br>
        <p>
        </p>
        <div class="row pt-4">
          <div class="col-md-4">
            <button type="button">
            <span class="lingkaran"> <a href="http://localhost:8000/home"> <i class="fas fa fa-home fa-5x"></i></a></span>
            </button>
            <h3 class="mt-3">HOME</h3>
            <p>
            </p>
          </div>

          <div class="col-md-4">
            <button type="button">
              <span class="lingkaran"> <a href="http://localhost:8000/profil"> <i class="fas fa fa-user-circle fa-5x"></i></a></span>
            </button>
            <h3 class="mt-3">PROFIL</h3>
            <p>
            </p>
          </div>

          <div class="col-md-4">
            <button type="button">
              <span class="lingkaran"> <a href="http://localhost:8000/galeri"> <i class="fas fa fa-palette fa-5x"></i></a></span>
            </button>
            <h3 class="mt-3">GALERI</h3>
            <p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center pt-5 pb-5">
      All Rights Reserved &copy; 2021
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
