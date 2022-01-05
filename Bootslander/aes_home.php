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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
                    <li class="dropdown"><a href="#"><span>Kriptografi Modern</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#"><span>Simetris</span><i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="des.php">DES</a></li>
                                    <li><a href="aes_home.php">AES</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Aimetris</span><i
                                        class="bi bi-chevron-right"></i></a>
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
    <?php
include 'AES.php'
?>

    <!doctype html>
    <html lang="id">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap.css">

        <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

        <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/css/app.css">
        <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="assets/css/main2.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

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

            <div class="container-contact100">
            <div class="container-md">

                <header>
                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            <h1>Algoritma AES</h1>
                            <p align="justify">Advanced Encryption Standard (AES) merupakan algoritma cryptographic yang
                                dapat digunkan untuk mengamakan data. Algoritma AES adalah blok chipertext simetrik yang
                                dapat mengenkripsi (encipher) dan dekripsi (decipher) informasi. Enkripsi merubah data
                                yang tidak dapat lagi dibaca disebut ciphertext; sebaliknya dekripsi adalah merubah
                                ciphertext data menjadi bentuk semula yang kita kenal sebagaiplaintext. Algoritma AES is
                                mengunkan kunci kriptografi 128, 192, dan 256 bits untuk mengenkrip dan dekrip data pada
                                blok 128 bitsAES juga harus efisien dan cepat (minimal secepat Triple DES) dijalankan
                                dalam berbagai mesin 8 bit hingga 64 bit, dan berbagai perangkat lunak. DES menggunakan
                                stuktur Feistel yang memiliki kelebihan bahwa struktur enkripsi dan dekripsinya sama,
                                meskipun menggunakan fungsi F yang tidak invertibel. ..</p>
                        </div>
                    </div>
                </header>

                <div class="container-contact100">
                    <div class="row">
                        <div class="col">
                            <div class="wrap-contact50">
                                <form class="contact100-form validate-form" action="<?php echo $_SERVER['PHP_SELF']; ?>"
                                    method="post">
                                    <span class="contact100-form-title">
                                        AES Encrypt
                                    </span>

                                    <div class="wrap-input100">
                                        <textarea class="input100" name="textEnc"
                                            placeholder="Plaintext Message"></textarea>
                                        <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input100">
                                        <input class="input100" type="text" name="keyEnc"
                                            placeholder="Insert your key here!!">
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <select class="contact100-form-btn" name="modeEnc">
                                                <option value="128">128</option>
                                                <option value="192">192</option>
                                                <option value="256">256</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <button class="contact100-form-btn" type="submit" name="encrypt">
                                                Encrypt
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col">
                            <div class="wrap-contact50">
                                <form class="contact100-form validate-form" action="<?php echo $_SERVER['PHP_SELF']; ?>"
                                    method="post">
                                    <span class="contact100-form-title">
                                        AES Decrypt
                                    </span>

                                    <div class="wrap-input100">
                                        <textarea class="input100" name="textDec"
                                            placeholder="Plaintext Message"></textarea>
                                        <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input100">
                                        <input class="input100" type="text" name="keyDec"
                                            placeholder="Insert your key here!!">
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <select class="contact100-form-btn" name="modeDec">
                                                <option value="128">128</option>
                                                <option value="192">192</option>
                                                <option value="256">256</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <button class="contact100-form-btn" type="submit" name="decrypt">
                                                Decrypt
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-input100" style="margin-left: 100px; margin-right: 100px; data-validate = " Please
                        enter your message">
                        <center>
                            <h4>Result</h4>
                        </center>

                        <textarea readonly class="input100" name="message">
              <?php
                  if (isset($_POST['encrypt'])) {
                      $inputText = $_POST['textEnc'];
                      $inputKey = $_POST['keyEnc'];
                      $blockSize = $_POST['modeEnc'];
                      $aes = new AES($inputText, $inputKey, $blockSize);
  
                      $enc = $aes->encrypt();
                      echo $enc;
                      
                      
                  }
  
                  if (isset($_POST['decrypt'])) {
                      $inputText = $_POST['textDec'];
                      $inputKey = $_POST['keyDec'];
                      $blockSize = $_POST['modeDec'];
                      $aes = new AES($inputText, $inputKey, $blockSize);
  
                      $enc = $aes->decrypt();
                      echo $enc;
                      
                      
                  }
  
              ?>
          </textarea>
                        <span class="focus-input100"></span>
                    </div>
                </div>
            </div>



            <!-- JavaScript -->
            <!-- jQuery -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous">
            </script>

            <!-- Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
                crossorigin="anonymous">
            </script>

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