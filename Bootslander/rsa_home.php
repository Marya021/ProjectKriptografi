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


<?php 
    
  include 'Rsa.php';

  $rsa = new Rsa();

?>

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
            <h1>Algoritma RSA</h1>
            <p>
            <p align ="justify">Salah satu algoritma kriptografi kunci publik yang dapat digunakan untuk semua aplikasi diatas adalah algoritma RSA. Algoritma RSA dipublikasikan oleh 3 peneliti dari MIT ( Massachussets Institute of Technology) Ron Rivest, Adi Shamir dan Leonard Adleman. Keamanan algoritma RSA terletak pada sulitnya memfaktorkan bilangan yang besar menjadi faktor-faktor prima. Pemfaktoran dilakukan untuk memperoleh kunci privat..</p>
          </div>
        </div>
      </header>

      <div class="row my-5">
        <div class="col-12-md">
          <div class="card">
            <div class="card-header">
              <h3>Inputkan Nilai p, Nilai q, dan Teks</h3>
            </div>
            
            <div class="card-body">
              <div class="card-text">
              
                <form method="POST">

                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="pValue" aria-describedby="pValueHelp" name="p_value" value="<?= isset($_POST['p_value']) ? $_POST['p_value'] : ''; ?>">
                    <label for="pValue">Nilai p</label>
                    <div id="pValueHelp" class="form-text">p harus bilangan prima lebih besar dari 7</div>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="qValue" aria-describedby="qValueHelp" name="q_value" value="<?= isset($_POST['q_value']) ? $_POST['q_value'] : ''; ?>">
                    <label for="qValue">Nilai q</label>
                    <div id="qValueHelp" class="form-text">q harus bilangan prima lebih besar dari 7 dan berbeda dengan p</div>
                  </div>

                  <div class="form-floating mb-3">
                    <textarea class="form-control" id="textValue" rows="3" aria-describedby="textHelp" name="text_value" placeholder="Teks" style="height: 100px"><?= isset($_POST['text_value']) ? $_POST['text_value'] : ''; ?></textarea>
                    <label for="textValue" class="">Teks</label>
                    <div id="textHelp" class="form-text">Ketik teks yang ingin di enkripsi. Atau chipertext yang ingin di dekripsi. Contoh chipertext: 23, 29, 191, 193, 197, 199</div>
                  </div>
                  
                  <input type="submit" name="encrypt" class="btn btn-primary" value="Enkripsi">

                  <input type="submit" name="decrypt" class="btn btn-primary" value="Dekripsi">

                </form>

              </div>
            </div>

          </div>
        </div>
      </div>
        
      <?php
        if ( ( isset($_POST['encrypt']) || isset($_POST['decrypt']) ) && isset($_POST['p_value']) && isset($_POST['q_value']) && isset($_POST['text_value']) ) {
          $p = $_POST['p_value'];
          $q = $_POST['q_value'];
          $text = $_POST['text_value'];
          
          if ( isset($_POST['decrypt']) && preg_match("/[a-zA-Z]/", $text) ) {
              echo '<script>alert("Isi teks untuk proses dekripsi harus berupa angka desimal yang dipisah dengan spasi/simbol.\nContoh: \'72,89,45,60\' atau \'72 89 45 60\'");</script>';
              exit();
              header('Location:index.php');
          }
          
          if ( $p == $q || $p < 10 || $q < 10 || $rsa->check_prime($p) == false || $rsa->check_prime($q) == false ) {
              echo '<script>alert("Isi p dan q harus berupa bilangan prima dan harus lebih besar dari 7\np dan q tidak boleh sama");</script>';
              exit();
              header('Location:index.php');
          }
          
          $rsa->gen_key($p, $q);

      ?>
                
        <div class="row">
          <div class="col-12-md">
            <div class="card">
              
              <div class="card-header">
                <h1>Hasil </h1>
              </div>
              
              <div class="card-body">
                <div class="mb-3 row">
                  <div class="mb-3 col-sm-4">
                    <div class="row">
                      <label for="nilai-p" class="col-lg-3 col-form-label">Nilai p</label>
                      <div class="col-lg-3">
                        <input disabled type="text" class="form-control" id="nilai-p" value="<?= $rsa->get_p() ?>">
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 col-sm-4">
                    <div class="row">
                      <label for="nilai-q" class="col-lg-3 col-form-label">Nilai q</label>
                      <div class="col-lg-3">
                        <input disabled type="text" class="form-control" id="nilai-q" value="<?= $rsa->get_q() ?>">
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 col-sm-4">
                    <div class="row">
                      <label for="nilai-n" class="col-lg-3 col-form-label">Nilai n</label>
                      <div class="col-lg-3">
                        <input disabled type="text" class="form-control" id="nilai-n" value="<?= $rsa->get_n() ?>">
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 col-sm-4">
                    <div class="row">
                      <label for="nilai-m" class="col-lg-3 col-form-label">Nilai m</label>
                      <div class="col-lg-3">
                        <input disabled type="text" class="form-control" id="nilai-m" value="<?= $rsa->get_m() ?>">
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 col-sm-4">
                    <div class="row">
                      <label for="nilai-e" class="col-lg-3 col-form-label">Nilai e</label>
                      <div class="col-lg-3">
                        <input disabled type="text" class="form-control" id="nilai-e" value="<?= $rsa->get_e() ?>">
                      </div>
                    </div>
                    <div id="nilai-e-Help" class="form-text text-muted fst-italic">
                      public key (n, e) = (<?= $rsa->get_n() ?>, <?= $rsa->get_e() ?>)
                    </div>
                  </div>
                  <div class="mb-3 col-sm-4">
                    <div class="row">
                      <label for="nilai-d" class="col-lg-3 col-form-label">Nilai d</label>
                      <div class="col-lg-3">
                        <input disabled type="text" class="form-control" id="nilai-d" value="<?= $rsa->get_d() ?>">
                      </div>
                    </div>
                    <div id="nilai-d-Help" class="form-text text-muted fst-italic">
                      public key (n, d) = (<?= $rsa->get_n() ?>, <?= $rsa->get_d() ?>)
                    </div>
                  </div>
                </div>
                
                <?php
                  if ( isset($_POST['encrypt']) ) {
                    $encrypted = $rsa->encrypt($text, $rsa->get_e(), $rsa->get_n());
                    $encrypted_arr = preg_split('/[^a-zA-Z0-9]/', $encrypted);
                ?>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                          <td>Plainteks</td>
                          <?php
                            foreach (str_split($text) as $tx) {
                              echo "<td>$tx</td>";
                            }
                          ?>
                        </tr>
                        <tr>
                          <td>Plainteks (DEC)</td>
                          <?php
                            foreach (str_split($text) as $tx) {
                              echo "<td>" . ord($tx) . "</td>";
                            }
                          ?>
                        </tr>
                        <tr>
                          <td>Chiperteks (DEC)</td>
                          <?php
                            foreach ($encrypted_arr as $en) {
                              echo "<td>$en</td>";
                            }
                          ?>
                        </tr>                        
                        <tr>
                          <td>Chiperteks</td>
                          <?php
                            foreach ($encrypted_arr as $en) {
                              echo "<td>" . chr($en) . "</td>";
                            }
                          ?>
                        </tr>
                    </table>
                  </div>

                  <div class="mb-3 row">
                      <div class="col-sm-12">
                      <label for="chipertextResultValue" class="form-label">Chiperteks:</label>
                      <div class="position-relative">
                        <button class="btn btn-primary btn-sm position-absolute top-0 end-0 m-2 copy-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Berhasil Disalin">Salin</button>
                        <textarea disabled class="form-control text-result" id="chipertextResultValue" aria-describedby="chipertextResultHelp" name="chipertextResult_value" placeholder="Teks" style="height: 120px"><?= $encrypted ?></textarea>
                      </div>
                    </div>
                  </div>
                <?php
                  }
                ?>

                <?php
                  if ( isset($_POST['decrypt']) ) {
                    $decrypted = $rsa->decrypt($text, $rsa->get_d(), $rsa->get_n());
                    $text_arr = preg_split('/[^a-zA-Z0-9]/', $text);
                ?>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <tr>
                        <td>Chiperteks</td>
                        <?php
                          foreach ($text_arr as $tx) {
                            echo "<td>" . chr($tx) . "</td>";
                          }
                          ?>
                      </tr>
                      <tr>
                        <td>Chiperteks (DEC)</td>
                        <?php
                          foreach ($text_arr as $tx) {
                            echo "<td>$tx</td>";
                          }
                        ?>
                      </tr>
                      <tr>
                        <td>Plainteks (DEC)</td>
                        <?php
                          foreach (str_split($decrypted) as $de) {
                            echo "<td>" . ord($de) . "</td>";
                          }
                        ?>
                      </tr>                        
                      <tr>
                        <td>Plainteks</td>
                        <?php
                          foreach (str_split($decrypted) as $de) {
                            echo "<td>$de</td>";
                          }
                        ?>
                      </tr>
                    </table>
                  </div>

                  <div class="mb-3 row">
                    <div class="col-sm-12">
                      <label for="plaintextResultValue" class="form-label">Plainteks:</label> 
                      <div class="position-relative">
                        <button class="btn btn-primary btn-sm position-absolute top-0 end-0 m-2 copy-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Berhasil Disalin">Salin</button>
                        <textarea disabled class="form-control text-result" id="plaintextResultValue" aria-describedby="plaintextResultHelp" name="plaintextResult_value" placeholder="Teks" style="height: 120px"><?= $decrypted ?></textarea>
                      </div>
                    </div>
                  </div>
                <?php
                  }
                ?>
              </div>

            </div>
          </div>
        
        <?php 
          }
        ?>
      </div>

    </div>

    
    
    <!-- JavaScript -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Copy button -->
    <script type="text/javascript">
      $(function() {
        
        $('.copy-btn').tooltip('disable');
        
        $('.copy-btn').click(function() {

          $('[data-bs-toggle="tooltip"]').tooltip();
          $('.copy-btn').tooltip('enable');
          
          let text = $('.text-result').val();
          
          navigator.clipboard.writeText(text)
            .then(() => {
              $('.copy-btn').tooltip('show');
              console.log(text);
            })
            .catch(error => {
              console.log('Gagal menyalin.\n', error)
            });
            
            setTimeout(() => {
              $('.copy-btn').tooltip('disable');
            }, 1500);
          });
      })
    </script>

  </body>
</html>