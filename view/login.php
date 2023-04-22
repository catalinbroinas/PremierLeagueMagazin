<?php

require_once '../bootloader.php';
require_once '../login_insert.php';
include_once 'layout/head.php';

?>
<head>
  <!-- Your custom styles (optional) -->
  <link href="<?php echo site_url() . '/css/intro.css'; ?>" rel="stylesheet">
</head>

  <header>
    <?php include_once 'components/navbarIntro.php'; ?>
    <!--Mask-->
    <div id="intro" class="view">

      <div class="mask rgba-black-strong flex-center">
        
      		<!-- Content -->
              <div class="container">
                <!--Grid row-->
                <div class="row mt-5 d-flex justify-content-between">
                  <!--Grid column-->
                  <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
                    <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Conectează-te acum! </h1>
                    <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                    <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Dacă ai deja un cont valid, tot ce trebuie să faci este să completezi formularul din partea stângă cu datele tale și să dai click pe butonul 'conectare'. Dacă nu ai un cont valid, poți să-ți faci unul acum, durează doar 5 minute!</h6>
                    <a id="btnR" href="register.php" class="btn wow fadeInLeft" data-wow-delay="0.3s">Înregistrare</a>
                  </div>
                  <!--Grid column-->
                  <!--Grid column-->
                  <div class="col-md-6 col-xl-5 mb-4">
                    <!--Form-->
                    <form action="<?php echo site_url() .'/login_insert.php'; ?>" method="post" id="login-form" name="login-form" class="card wow fadeInRight" data-wow-delay="0.3s">
                      <div class="card-body">
                        <!--Header-->
                        <div class="text-center">
                          <h3 class="white-text">
                            <i class="fas fa-user white-text"></i> Conectare:</h3>
                          <hr class="hr-light">
                        </div>
                        <?php print_notices(); ?>
                        <!--Body-->
                        <div class="md-form">
                          <i class="fas fa-envelope prefix white-text active"></i>
                          <input type="email" id="email" name="email" class="white-text form-control">
                          <label for="email" class="active">Adresa de email</label>
                        </div>
                        <div class="md-form">
                          <i class="fas fa-lock prefix white-text active"></i>
                          <input type="password" id="password" name="password" class="white-text form-control">
                          <label for="password">Parola</label>
                        </div>
                        <div class="text-center mt-4">
                          <input class="btn btn-sm btnI white-text" type="submit" name="Submit" value="Conectare">
                          <hr class="hr-light mb-3 mt-4">
                          <div class="inline-ul text-center mt-auto h2rem">
                            <a class="ml-3 hoverable">
                              <i class="fab fa-facebook-f fa-lg fabL"></i>
                            </a>
                            <a class="ml-3 hoverable">
                              <i class="fab fa-twitter fa-lg fabL"></i>
                            </a>
                            <a class="ml-3 hoverable">
                              <i class="fab fa-instagram fa-lg fabL"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </form>
                    <!-- Form -->
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>
              <!-- Content -->

        </div>

    </div>
<!--/.Mask-->
  </header>

  <?php include_once 'layout/foot.php'; ?>
