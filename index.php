<?php
  include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cerdaz</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Cerdaz</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#testimoni">Testimoni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Tim Developer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Daftar Murid</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php" style="color: #c59301;">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Anda Mau Pintar Tapi Kesulitan Dalam Belajar? Bersama Kita Anda Bisa Menjadi </div>
        <div class="intro-heading text-uppercase">Cerdaz</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#contact">Cekidot</a>
      </div>
    </div>
  </header>

  <!-- layanan -->
  <section class="page-section" id="layanan">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Layanan</h2>
          <h3 class="section-subheading text-muted">Bimbel</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-graduation-cap check fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Bimbel Terpercaya</h4>
          <p class="text-muted">Telah dipercaya oleh para walimurid di seluruh Indonesia</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-clock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Buka 24 Jam</h4>
          <p class="text-muted">Kesempatan mendaftar selama 24 jam</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-thumbs-up fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Rumus Cerdaz</h4>
          <p class="text-muted">Kami menggunakan rumus yang berbeda dari bimbel lainnya sehingga murid bimbel kami mampu mengingat rumus yang kami berikan lebih lama dibanding bimbel lainnya</p>
        </div>
      </div>
    </div>
  </section>

  <!-- testimoni Grid -->
  <section class="bg-light page-section" id="testimoni">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Testimoni</h2>
          <h3 class="section-subheading text-muted">Berikut Testimoni Murid Kami</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 testimoni-item">
          <a class="testimoni-link" data-toggle="modal" href="#testimoniModal1">
            <div class="testimoni-hover">
              <div class="testimoni-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/testimoni/giorgos-popa.jpg" alt="">
          </a>
          <div class="testimoni-caption">
            <h4>Nicholas</h4>
            <p class="text-muted">Saya senang sekali bisa bimbel disini.Nilai saya meningkat semenjak bimbel di Cerdaz</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 testimoni-item">
          <a class="testimoni-link" data-toggle="modal" href="#testimoniModal2">
            <div class="testimoni-hover">
              <div class="testimoni-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/testimoni/juan-encalada.jpg" alt="">
          </a>
          <div class="testimoni-caption">
            <h4>Dani</h4>
            <p class="text-muted">Berkat Cerdaz saya bisa lulus dengan nilai yang memuaskan.Rumusnya juga enak dihapal</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 testimoni-item">
          <a class="testimoni-link" data-toggle="modal" href="#testimoniModal3">
            <div class="testimoni-hover">
              <div class="testimoni-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/testimoni/icons8-team.jpg" alt="">
          </a>
          <div class="testimoni-caption">
            <h4>Angel</h4>
            <p class="text-muted">Aku suka sekali metode pembelajaran dari Cerdaz.Dosennya juga memberikan tutor tambahan di luar kelas bimbel buat bantu tugas-tugas aku di sekolah.</p>
          </div>
        </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Tentang</h2>
          <h3 class="section-subheading text-muted">Cerdaz adalah bimbel yang berdiri sejak tahun 2019</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>30 Maret 2019</h4>
                  <h4 class="subheading">Awal Mula Cerdaz</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Cerdaz merupakan bimbel yang bertujuan untuk membantu para murid yang kesulitan dalam meraih prestasi yang diinginkannya</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>25 Mei 2019</h4>
                  <h4 class="subheading">Pusat Gedung Pertama</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Gedung pertama Cerdaz resmi berdiri di Jakarta Selatan</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Jadi
                  <br> Bagian dari
                  <br>Cerita Kita</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Tim Developer</h2>
          <h3 class="section-subheading text-muted">Kenalan yuk sama tim developer website Cerdaz</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/4.jpg" alt="">
            <h4>Billy</h4>
            <p class="text-muted">CEO</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/5.jpg" alt="">
            <h4>Reza</h4>
            <p class="text-muted">CTO</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/6.jpg" alt="">
            <h4>Rookie</h4>
            <p class="text-muted">CMO</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Mereka adalah para tim developer yang membuat website Cerdaz</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Daftar Murid</h2>
          <h3 class="section-subheading text-muted">Yuk Gabung di Cerdaz biar kamu makin cerdazz</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form action ='proses_daftar_murid.php' method='POST'>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input name ="username" class="form-control" id="name" type="text" placeholder="Username Kamu" required="required" data-validation-required-message="Masukan Username">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input name ="email" class="form-control" id="email" type="email" placeholder="Email Kamu" required="required" data-validation-required-message="Masukan Email">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input name="password" class="form-control" id="password" type="tel" placeholder="Password Kamu" required="required" data-validation-required-message="Masukan Password">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <input class="btn btn-primary btn-xl text-uppercase" type='submit' value='Daftar'>
                  <!-- Hapus Button -->
                </div>
              </div>
              <div class="clearfix"></div>            
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Cerdaz 2021</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://www.twitter.com/">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- testimoni Modals -->

  <!-- Modal 1 -->
  <div class="testimoni-modal modal fade" id="testimoniModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Nicholas</h2>
                <p class="item-intro text-muted">Ranking 1 Tingkat SMA Se-Jawa Tengah</p>
                <img class="img-fluid d-block mx-auto" src="img/testimoni/giorgos-popa.jpg" alt="">
                <p>Nicholas adalah salah satu murid kami dengan peraih nilai IPA terbaik provinsi Jawa Tengah</p>
                <ul class="list-inline">
                  <li>IPA : 100</li>
                  <li>Bahasa Indonesia : 98</li>
                  <li>Matematika: 98</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Tutup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="testimoni-modal modal fade" id="testimoniModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Dani</h2>
                <p class="item-intro text-muted">Ranking 1 Tingkat SMA Se-Jawa Timur</p>
                <img class="img-fluid d-block mx-auto" src="img/testimoni/juan-encalada.jpg" alt="">
                <p>Dani adalah salah satu murid kami dengan peraih nilai Bahasa Indonesia tertinggi provinsi Jawa Timur</p>
                <ul class="list-inline">
                  <li>IPA : 98</li>
                  <li>Bahasa Indonesia : 100</li>
                  <li>Matematika : 98 </li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Tutup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="testimoni-modal modal fade" id="testimoniModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Angel </h2>
                <p class="item-intro text-muted">Ranking 1 Tingkat SMA Se-Jawa Barat</p>
                <img class="img-fluid d-block mx-auto" src="img/testimoni/icons8-team.jpg" alt="">
                <p>Angel adalah salah satu murid kami dengan peraih nilai Matematika tertinggi provinsi Jawa Barat</p>
                <ul class="list-inline">
                  <li>IPA : 98</li>
                  <li>Bahasa Indonesia : 98</li>
                  <li>Matematika : 100</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Tutup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
