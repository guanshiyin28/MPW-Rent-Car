<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webrentalmobil";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/ionicons.min.css" />

    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />

    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">MPW <span>Rent Car</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="oi oi-menu"></span> Menu</button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.php" class="nav-link">Beranda</a></li>
              <li class="nav-item"><a href="about.php" class="nav-link">Tentang</a></li>
              <li class="nav-item"><a href="services.php" class="nav-link">Layanan</a></li>
            <li class="nav-item"><a href="pricing.php" class="nav-link">Penepatan</a></li>
              <li class="nav-item"><a href="car.php" class="nav-link">Mobil</a></li>
              <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="contact.php" class="nav-link">Kontak</a></li>
            </ul>
          </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg')" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs">
              <span class="mr-2"
                ><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a
              ></span>
              <span>Mobil <i class="ion-ios-arrow-forward"></i></span>
            </p>
            <h1 class="mb-3 bread">Pilih Mobil</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">

        <?php
        $sql = "SELECT nama_mobil, harga_mobil, gambar_mobil FROM unit";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                          <div class="img rounded d-flex align-items-end" style="background-image: url(' . $row["gambar_mobil"] . ')"></div>
                          <div class="text">
                            <h2 class="mb-0"><a href="car-single.php">' . $row["nama_mobil"] . '</a></h2>
                            <div class="d-flex mb-3">
                              <span class="cat">Car Model</span>
                              <p class="price ml-auto">IDR. ' . number_format($row["harga_mobil"]) . ' <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Pesan Sekarang</a> <a href="car-single.php" class="btn btn-secondary py-2 ml-1">Details</a></p>
                          </div>
                        </div>
                      </div>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
        
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">
                <a href="#" class="logo">MPW<span> CAR RENT</span></a>
              </h2>
              <p>Jelajahi lebih jauh, bersama kami.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate">
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Informasi</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Tentang</a></li>
                <li><a href="#" class="py-2 d-block">Layanan</a></li>
                <li><a href="#" class="py-2 d-block">Syarat dan Ketentuan</a></li>
                <li><a href="#" class="py-2 d-block">Jaminan Harga Terbaik</a></li>
                <li><a href="#" class="py-2 d-block">Privasi & Kebijakan Cookie</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Dukungan Pelanggan</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Pertanyaan Umum</a></li>
                <li><a href="#" class="py-2 d-block">Opsi Pembayaran</a></li>
                <li><a href="#" class="py-2 d-block">Tips Pemesanan</a></li>
                <li><a href="#" class="py-2 d-block">Bagaimana Cara Kerjanya</a></li>
                <li><a href="#" class="py-2 d-block">Hubungi Kami</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Punya Pertanyaan?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Jl. Inpeksi Kalimalang, Bekasi</span></li>
                  <li>
                    <a href="#"><span class="icon icon-phone"></span><span class="text">0857 1999 1234</span></a>
                  </li>
                  <li>
                    <a href="#"><span class="icon icon-envelope"></span><span class="text">mpwcarrent@gmail.com</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center"></div>
        </div>
      </div>
    </footer>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
      </svg>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>