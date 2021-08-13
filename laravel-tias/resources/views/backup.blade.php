<!-- MENU NAVBAR -->
<li class="nav-item">
    <a class="nav-link" href="#layanan">Layanan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#portofolio">Portofolio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#tentang">Tentang</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#staff">Staff</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#kontak">Kontak Kami</a>
  </li>

  <!-- home dahulu -->
<div>
        @extends('main')

      @section('title', 'Home')

      @section('breadcrumbs')
      <div class="breadcrumbs">
          <div class="col-sm-4">
              <div class="page-header float-left">
                  <div class="page-title">
                      <h3>Home</h3>
                  </div>
              </div>
          </div>
          <div class="col-sm-8">
              <div class="page-header float-right">
                  <div class="page-title">
                      <ol class="breadcrumb text-right">
                          <li class="active"><i class="fa fa-home"></i></li>
                      </ol>
                  </div>
              </div>
          </div>
      </div>
      @endsection

      @section('content')
      <div class="content mt-3">
      
          <div class="animated fadeIn">
              <div class="container mt-4">
                  <h1 class="text-center mb-4 p-4 text-secondary">Bahasa Pemrograman yang Digunakan</h1>
                    <div class="row">
              
                <div class="card-columns">
                <div class="card shadow border-0">
                  <img class="card-img-top" src="images/html.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">HTML</h5>
                    <p class="card-text">HTML adalah bahasa markah yang digunakan peramban untuk menafsirkan dan menulis teks, gambar dan bahan lainnya ke dalam halaman web secara visual maupun suara.</p>
                  </div>
                </div>
              
                <div class="card shadow border-0">
                  <img class="card-img-top" src="images/b.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Boostrap</h5>
                    <p class="card-text">Bootstrap adalah kerangka kerja CSS yang sumber terbuka dan bebas untuk merancang situs web dan aplikasi web.</p>
                    <p class="card-text"><small class="text-muted"></small></p>
                  </div>
                </div>

                <div class="card shadow border-0">
                  <img class="card-img-top" src="images/laravel.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Laravel</h5>
                    <p class="card-text">Laravel adalah kerangka kerja aplikasi web berbasis PHP yang sumber terbuka, menggunakan konsep Model-View-Controller.</p>
                    <p class="card-text"><small class="text-muted"></small></p>
                  </div>
                </div>
              
              </div>
              </div>
                </div>
              
          </div>

      </div>
      @endsection
</div>

<!-- profil dahulu -->
<div>
        @extends('main')

      @section('title', 'Profil')

      @section('breadcrumbs')
      <div class="breadcrumbs">
          <div class="col-sm-4">
              <div class="page-header float-left">
                  <div class="page-title">
                      <h3>Profil</h3>
                  </div>
              </div>
          </div>
          <div class="col-sm-8">
              <div class="page-header float-right">
                  <div class="page-title">
                      <ol class="breadcrumb text-right">
                          <li class="active"><i class="fa fa-user-circle"></i></li>
                      </ol>
                  </div>
              </div>
          </div>
      </div>
      @endsection

      @section('content')
      <div class="content mt-3">
          <div class="animated fadeIn">
              <div class="container"> 
                  <h2 class="text-center">Wahyuning Tias</h2>
                  <p class="text-muted mb-5 text-center"></p>
                  <div class="row">
                    <div class="col-sm-6 col-lg-4 mb-3">
                      <svg class="lnr text-primary services-icon">
                        <use xlink:href="#lnr-home"></use> <!-- icon -->
                      </svg>
                      <h6>Tempat Lahir</h6>
                      <p class="text-muted">Pasuruan</p>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-3">
                      <svg class="lnr text-primary services-icon">
                        <use xlink:href="#lnr-heart"></use>
                      </svg>
                      <h6>Tanggal Lahir</h6>
                      <p class="text-muted">5 Oktober 2003</p>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-3">
                      <svg class="lnr text-primary services-icon">
                        <use xlink:href="#lnr-map-marker">Alamat</use>
                      </svg>
                      <h6>Alamat</h6>
                      <p class="text-muted">Jl. Slamet Riyadi GG. 8, Kota Pasuruan</p>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-3">
                      <svg class="lnr text-primary services-icon">
                        <use xlink:href="#lnr-book"></use>
                      </svg>
                      <h6>Sekolah</h6>
                      <p class="text-muted">SMKN 1 Purwosari</p>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-3">
                      <svg class="lnr text-primary services-icon">
                        <use xlink:href="#lnr-music-note"></use>
                      </svg>
                      <h6>Hobi</h6>
                      <p class="text-muted">Menyanyi dan Menonton Serries</p>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-3">
                      <svg class="lnr text-primary services-icon">
                        <use xlink:href="#lnr-phone-handset"></use>
                      </svg>
                      <h6>Kontak</h6>
                      <p class="text-muted">085803334628</p>
                    </div>
                  </div>
                </div>
          </div>
      </div>
      @endsection
</div>

<!-- galeri dahulu -->
<div>
        @extends('main')

        @section('title', 'Galeri')
        
        @section('breadcrumbs')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h3>Galeri</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-picture-o"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        
        @section('content')
        <div class="content mt-3">
        
            <div class="animated fadeIn ">
                <div class="row">
                    <!-- Team Member 1 -->
                    <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-0 shadow">
                        <img src="{{ asset('images/f3.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title mb-0"></h5>
                          <div class="card-text text-black-50"></div>
                        </div>
                      </div>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-0 shadow">
                        <img src="{{ asset('images/slide2.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title mb-0"></h5>
                          <div class="card-text text-black-50"></div>
                        </div>
                      </div>
                    </div>
                    <!-- Team Member 3 -->
                    <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-0 shadow">
                        <img src="{{ asset('images/g1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title mb-0"></h5>
                          <div class="card-text text-black-50"></div>
                        </div>
                      </div>
                    </div>
                    <!-- Team Member 4 -->
                    <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-0 shadow">
                        <img src="{{ asset('images/slide1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title mb-0"></h5>
                          <div class="card-text text-black-50"></div>
                        </div>
                      </div>
                    </div>
                </div>
                <br>
                <div class="row">
                  <!-- Team Member 1 -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow">
                      <img src="{{ asset('images/g4.jpg') }}" class="card-img-top" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title mb-0"></h5>
                        <div class="card-text text-black-50"></div>
                      </div>
                    </div>
                  </div>
                  <!-- Team Member 2 -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow">
                      <img src="{{ asset('images/f2.jpg') }}" class="card-img-top" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title mb-0"></h5>
                        <div class="card-text text-black-50"></div>
                      </div>
                    </div>
                  </div>
                  <!-- Team Member 3 -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow">
                      <img src="{{ asset('images/g6.jpg') }}" class="card-img-top" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title mb-0"></h5>
                        <div class="card-text text-black-50"></div>
                      </div>
                    </div>
                  </div>
                  <!-- Team Member 4 -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow">
                      <img src="{{ asset('images/f1.jpg') }}" class="card-img-top" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title mb-0"></h5>
                        <div class="card-text text-black-50"></div>
                      </div>
                    </div>
                  </div>
              </div>
        
        </div>
        @endsection
</div>

<!-- make galeri -->
<div class="row pt-4 gx-4 gy-4">
  <div class="col-md-4">
    <div class="card crop-img">
      <img
        src="images/f1.jpg"
        class="card-img-top"
        width="200"
        height="200"
      />
    </div>
  </div>
  <div class="col-md-4">
    <div class="card crop-img">
      <img
        src="images/f1.jpg"
        class="card-img-top"
        width="200"
        height="200"
      />
    </div>
  </div>
  <div class="col-md-4">
    <div class="card crop-img">
      <img
        src="images/f1.jpg"
        class="card-img-top"
        width="200"
        height="200"
      />
    </div>
  </div>
  <div class="col-md-4">
    <div class="card crop-img">
      <img
        src="images/f1.jpg"
        class="card-img-top"
        width="200"
        height="200"
      />
    </div>
  </div>
  <div class="col-md-4">
    <div class="card crop-img">
      <img
        src="images/f1.jpg"
        class="card-img-top"
        width="200"
        height="200"
      />
    </div>
  </div>
  <div class="col-md-4">
    <div class="card crop-img">
      <img
        src="images/f1.jpg"
        class="card-img-top"
        width="200"
        height="200"
      />
    </div>
  </div>
  <div class="col-md-4">
    <div class="card crop-img">
      <img
        src="images/f1.jpg"
        class="card-img-top"
        width="200"
        height="200"
      />
    </div>
  </div>
  <div class="col-md-4">
    <div class="card crop-img">
      <img
        src="images/f1.jpg"
        class="card-img-top"
        width="200"
        height="200"
      />
    </div>
  </div>
  <div class="col-md-4">
    <div class="card crop-img">
      <img
        src="images/f1.jpg"
        class="card-img-top"
        width="200"
        height="200"
      />
    </div>
  </div>
</div>

<div class="content mt-3">
  <!-- portofolio -->
  
  <!-- tentang -->
  
  <!-- tim -->
  <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
      <h2 class="display-3" id="staff">Tim Kami</h2>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et deleniti
        quas at magni, iusto voluptates neque corrupti dolorum! Repellat,
        quod.
      </p>
      <div class="row pt-4 gx-4 gy-4">
        <div class="col-md-4 text-center tim">
          <img
            src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png"
            class="rounded-circle mb-3"
          />
          <h4>John Doe</h4>
          <p>Web Designer</p>
          <p>
            <a href="" class="social"><i class="fab fa-twitter"></i></a>
            <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
          </p>
        </div>
        <div class="col-md-4 text-center tim">
          <img
            src="http://gokubi.com/wp-content/uploads/2013/10/Steve-Andersen-Headshot-square1.jpeg"
            class="rounded-circle mb-3"
          />
          <h4>Michael Dell</h4>
          <p>Data Scientist</p>
          <p>
            <a href="" class="social"><i class="fab fa-twitter"></i></a>
            <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
          </p>
        </div>
        <div class="col-md-4 text-center tim">
          <img
            src="https://www.kingrosales.com/wp-content/uploads/2018/05/king-rosales-profile-photo-square.jpg"
            class="rounded-circle mb-3"
          />
          <h4>Paul</h4>
          <p>Network Engineer</p>
          <p>
            <a href="" class="social"><i class="fab fa-twitter"></i></a>
            <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Client -->
  <div class="container-fluid client pt-5 pb-5">
    <div class="container text-center">
      <div class="row pt-4 gx-4 gy-4">
        <div class="col">
          <img
            src="https://cdn.iconscout.com/icon/free/png-256/microsoft-28-761688.png"
          />
        </div>
        <div class="col">
          <img
            src="https://cdn3.iconfinder.com/data/icons/glypho-social-and-other-logos/64/logo-facebook-512.png"
          />
        </div>
        <div class="col">
          <img src="https://image.flaticon.com/icons/png/512/61/61109.png" />
        </div>
        <div class="col">
          <img
            src="https://i.pinimg.com/originals/20/1d/17/201d17590b3a7bc8939ca37e577bbbd8.png"
          />
        </div>
        <div class="col">
          <img
            src="https://www.ictmagazine.nl/wp-content/uploads/2020/10/ibm-720x340-1.png"
          />
        </div>
      </div>
    </div>
  </div>
  <!-- kontak -->
  <div class="container-fluid pt-5 pb-5 kontak">
    <div class="container">
      <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
      <p class="text-center">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, porro.
      </p>
      <div class="row pb-3">
        <div class="col-md-6">
          <input
            class="form-control form-control-lg mb-3"
            type="text"
            placeholder="Nama"
          />
          <input
            class="form-control form-control-lg mb-3"
            type="text"
            placeholder="Email"
          />
          <input
            class="form-control form-control-lg"
            type="text"
            placeholder="No. Phone"
          />
        </div>
        <div class="col-md-6">
          <textarea class="form-control form-control-lg" rows="5"></textarea>
        </div>
      </div>
      <div class="col-md-3 mx-auto text-center">
        <button type="button" class="btn btn-danger btn-lg">
          Kirim Pesan
        </button>
      </div>
    </div>
  </div>
</div>
