<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>BelajarCrypto</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: eNno - v4.5.0
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
        <h1><a href="index.html"><span>BelajarCrypto</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
                    <li><a class="nav-link scrollto" href="index.html">About</a></li>
                    <li><a class="nav-link scrollto" href="index.html">Team</a></li>
                    <li class="dropdown"><a href="#"><span>Kriptografi Modern</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Simetris</span><i class="bi bi-chevron-right"></i></a>
                <ul>
                      <li><a href="des.php">DES</a></li>
                      <li><a href="aes_home.php">AES</a></li>
                </ul>
              </li> 
              <li class="dropdown"><a href="#"><span>Aimetris</span><i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="rsa_home.php">RSA</a></li>
                </ul>
               </li>
              <!-- <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



<!doctype html>
<html lang="id">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
<link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>BelajarCrypto</title>
    <link href="assets/img/favicon.png" rel="icon">
  
  </head>
  <body>


    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

<div class="page-heading">
  
</div>

    <div class="container-md">

      <header>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <p>
            <h1>Algoritma DES</h1>
            <p>
            <p align ="justify">Algoritma DES (Data Encryption Standard) adalah sandi blok kunci simetris yang dibuat pada awal 1970-an oleh tim IBM dan diadopsi oleh National Institute of Standards and Technology (NIST).  Algoritma ini mengambil plaint text dalam blok 64-bit dan mengubahnya menjadi ciphertext menggunakan kunci 56-bit.
            Karena DES adalah algoritma symmetric-key, DES menggunakan kunci yang sama dalam mengenkripsi dan mendekripsi data. Jika algoritma yang digunakan adalah algoritma asimetris, maka akan menggunakan kunci yang berbeda untuk melakukan enkripsi dan dekripsi.
        </p>
          </div>
        </div>
      </header>

      <div class="row my-5">
        <div class="col-12-md">
          <div class="card">
            <div class="card-header">
              <h3>Inputkan Nilai Plaintext dan Ciphertext</h3>
            </div>
            
            <div class="card-body">
              <div class="card-text">
              
                <form method="POST">

                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="icon-box">
                            <form method='POST' action="des.php">
                                <div class="form-group">
                                    <label>Plain Text</label>
                                    <input type="text" name="text" class="form-control" maxlength="8">
                                </div>
                                <div class="form-group">
                                    <label>Key</label>
                                    <input type="text" name="key" class="form-control" maxlength="8">
                                </div><br>
                                <input type="submit" name="submit" value="Enkripsi" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
                                    
                </form>

                </div>
        </section><!-- End Services Section -->


    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>