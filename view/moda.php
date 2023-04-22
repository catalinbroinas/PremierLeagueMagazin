<?php

require_once '../bootloader.php';
/*
  if (!isset($_SESSION['email'])) {
    header('location: login.php');
  }
  else
  {
    session_start(); 
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
  }
*/
  $navsModa = 'active';
  $moda = 'show active';
include_once 'layout/head.php';

?>
  
  <header class="marginB">
    <?php include_once 'components/navbar.php'; ?>
  </header>

    <main class="mt-3 mb-5">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <!-- Grid col-lg-2 -->
          <div class="col-lg-2 col-md-3 col-sm-3 col-4">
          
              <?php include_once ('components/navsechipe.php'); ?>

              <?php include_once ('components/navssorteaza.php'); ?>

              <?php include_once ('components/navscategorii.php'); ?>

              <?php include_once ('components/navsimbracaminte.php'); ?>              

              <?php include_once ('components/navsbrand.php'); ?>

              <?php include_once ('components/navsmarime.php'); ?>

              <?php include_once ('components/navsculoare.php'); ?>

              <?php include_once ('components/navssuveniruri.php'); ?>
          </div>

          <!-- Grid col-lg-9 -->
          <div class="col-lg-8 col-md-7 col-sm-9 col-10">
            <!-- Tab content  -->
            <div class="tab-content" id="tabs-tabContents">
              <?php include_once 'components/tabs/echipe/afc.php'; ?>

              <?php include_once 'components/tabs/echipe/arsenal.php'; ?>

              <?php include_once 'components/tabs/echipe/brighton.php'; ?>

              <?php include_once 'components/tabs/echipe/bur.php'; ?>

              <?php include_once 'components/tabs/echipe/car.php'; ?>

              <?php include_once 'components/tabs/echipe/che.php'; ?>

              <?php include_once 'components/tabs/echipe/cry.php'; ?>

              <?php include_once 'components/tabs/echipe/eve.php'; ?>

              <?php include_once 'components/tabs/echipe/ful.php'; ?>

              <?php include_once 'components/tabs/echipe/hudd.php'; ?>

              <?php include_once 'components/tabs/echipe/lei.php'; ?>

              <?php include_once 'components/tabs/echipe/liv.php'; ?>

              <?php include_once 'components/tabs/echipe/mancity.php'; ?>

              <?php include_once 'components/tabs/echipe/manutd.php'; ?>

              <?php include_once 'components/tabs/echipe/newc.php'; ?>

              <?php include_once 'components/tabs/echipe/sou.php'; ?>

              <?php include_once 'components/tabs/echipe/spurs.php'; ?>

              <?php include_once 'components/tabs/echipe/wat.php'; ?>

              <?php include_once 'components/tabs/echipe/west.php'; ?>

              <?php include_once 'components/tabs/echipe/wol.php'; ?>

              <?php include_once 'components/tabs/echipe/eng.php'; ?>

              <?php include_once 'components/tabs/sort/nou.php'; ?>

              <?php include_once 'components/tabs/sort/promo.php'; ?>

              <?php include_once 'components/tabs/sort/popular.php'; ?>

              <?php include_once 'components/tabs/sort/moda.php'; ?>

              <?php include_once 'components/tabs/suveniruri/all.php'; ?>

              <!-- Panel -->
              <div class="tab-pane fade" id="echipament" role="tabpanel" aria-labelledby="echipament-tab">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6"> 
                    <!-- Card -->
                    <div class="card cardProdus mb-3 mr-2">

                      <!-- Card image -->
                      <div class="view overlay">
                        <img class="card-img-top" src="img/afc/3.jpg" alt="Afc tricou">
                        <a href="produs.html">
                          <div class="mask rgba-white-light"></div>
                        </a>
                      </div>

                      <!-- Card content -->
                      <div class="card-body text-center">

                        <!-- Title -->
                        <a href="produs.html">
                          <h5 class="card-title textInfoProdus">AFC Bournemouth tricou oficial de joc, acasă, 2019-2020</h5>
                        </a>
                        <h3 class="font-weight-bold success-lighter-hover mx-2">300 lei</h3>
                        <!-- Button -->
                        <a href="#" class="btn blue-gradient white-text btn-lg">
                          <i class="fas fa-cart-plus mr-2"></i>Adaugă în coș
                        </a>

                      </div>

                    </div>
                    <!-- Card -->
                  </div>
                </div>
              </div>
              <!-- Panel -->

              <!-- Panel -->
              <div class="tab-pane fade" id="L" role="tabpanel" aria-labelledby="L-tab">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6"> 
                    <!-- Card -->
                    <div class="card cardProdus mb-3 mr-2">

                      <!-- Card image -->
                      <div class="view overlay">
                        <img class="card-img-top" src="img/afc/4.jpg" alt="Afc tricou">
                        <a href="produs.html">
                          <div class="mask rgba-white-light"></div>
                        </a>
                      </div>

                      <!-- Card content -->
                      <div class="card-body text-center">

                        <!-- Title -->
                        <a href="produs.html">
                          <h5 class="card-title textInfoProdus">AFC Bournemouth tricou oficial de joc, acasă, 2019-2020</h5>
                        </a>
                        <h3 class="font-weight-bold success-lighter-hover mx-2">300 lei</h3>
                        <!-- Button -->
                        <a href="#" class="btn blue-gradient white-text btn-lg">
                          <i class="fas fa-cart-plus mr-2"></i>Adaugă în coș
                        </a>

                      </div>

                    </div>
                    <!-- Card -->
                  </div>
                </div>
              </div>
              <!-- Panel -->

              <!-- Panel -->
              <div class="tab-pane fade" id="cana" role="tabpanel" aria-labelledby="cana-tab">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6"> 
                    <!-- Card -->
                    <div class="card cardProdus mb-3 mr-2">

                      <!-- Card image -->
                      <div class="view overlay">
                        <img class="card-img-top" src="img/afc/5.jpg" alt="Afc tricou">
                        <a href="produs.html">
                          <div class="mask rgba-white-light"></div>
                        </a>
                      </div>

                      <!-- Card content -->
                      <div class="card-body text-center">

                        <!-- Title -->
                        <a href="produs.html">
                          <h5 class="card-title textInfoProdus">AFC Bournemouth tricou oficial de joc, acasă, 2019-2020</h5>
                        </a>
                        <h3 class="font-weight-bold success-lighter-hover mx-2">300 lei</h3>
                        <!-- Button -->
                        <a href="#" class="btn blue-gradient white-text btn-lg">
                          <i class="fas fa-cart-plus mr-2"></i>Adaugă în coș
                        </a>

                      </div>

                    </div>
                    <!-- Card -->
                  </div>
                </div>
              </div>
              <!-- Panel -->

              <!-- Panel -->
              <div class="tab-pane fade" id="alb" role="tabpanel" aria-labelledby="alb-tab">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6"> 
                    <!-- Card -->
                    <div class="card cardProdus mb-3 mr-2">

                      <!-- Card image -->
                      <div class="view overlay">
                        <img class="card-img-top" src="img/afc/2k.jpg" alt="Afc tricou">
                        <a href="produs.html">
                          <div class="mask rgba-white-light"></div>
                        </a>
                      </div>

                      <!-- Card content -->
                      <div class="card-body text-center">

                        <!-- Title -->
                        <a href="produs.html">
                          <h5 class="card-title textInfoProdus">AFC Bournemouth tricou oficial de joc, acasă, 2019-2020</h5>
                        </a>
                        <h3 class="font-weight-bold success-lighter-hover mx-2">300 lei</h3>
                        <!-- Button -->
                        <a href="#" class="btn blue-gradient white-text btn-lg">
                          <i class="fas fa-cart-plus mr-2"></i>Adaugă în coș
                        </a>

                      </div>

                    </div>
                    <!-- Card -->
                  </div>
                </div>
              </div>
              <!-- Panel -->

              <!-- Panel -->
              <div class="tab-pane fade" id="nike" role="tabpanel" aria-labelledby="nike-tab">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6"> 
                    <!-- Card -->
                    <div class="card cardProdus mb-3 mr-2">

                      <!-- Card image -->
                      <div class="view overlay">
                        <img class="card-img-top" src="img/afc/3k.jpg" alt="Afc tricou">
                        <a href="produs.html">
                          <div class="mask rgba-white-light"></div>
                        </a>
                      </div>

                      <!-- Card content -->
                      <div class="card-body text-center">

                        <!-- Title -->
                        <a href="produs.html">
                          <h5 class="card-title textInfoProdus">AFC Bournemouth tricou oficial de joc, acasă, 2019-2020</h5>
                        </a>
                        <h3 class="font-weight-bold success-lighter-hover mx-2">300 lei</h3>
                        <!-- Button -->
                        <a href="#" class="btn blue-gradient white-text btn-lg">
                          <i class="fas fa-cart-plus mr-2"></i>Adaugă în coș
                        </a>

                      </div>

                    </div>
                    <!-- Card -->
                  </div>
                </div>
              </div>
              <!-- Panel -->

              <!-- Panel -->
              <div class="tab-pane fade" id="barbat" role="tabpanel" aria-labelledby="barbat-tab">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6"> 
                    <!-- Card -->
                    <div class="card cardProdus mb-3 mr-2">

                      <!-- Card image -->
                      <div class="view overlay">
                        <img class="card-img-top" src="img/afc/3k.jpg" alt="Afc tricou">
                        <a href="produs.html">
                          <div class="mask rgba-white-light"></div>
                        </a>
                      </div>

                      <!-- Card content -->
                      <div class="card-body text-center">

                        <!-- Title -->
                        <a href="produs.html">
                          <h5 class="card-title textInfoProdus">AFC Bournemouth tricou oficial de joc, acasă, 2019-2020</h5>
                        </a>
                        <h3 class="font-weight-bold success-lighter-hover mx-2">300 lei</h3>
                        <!-- Button -->
                        <a href="#" class="btn blue-gradient white-text btn-lg">
                          <i class="fas fa-cart-plus mr-2"></i>Adaugă în coș
                        </a>

                      </div>

                    </div>
                    <!-- Card -->
                  </div>
                </div>
              </div>
              <!-- Panel -->

            <!-- Tab content  -->
            </div>

          <!-- Grid col-lg-9 -->          
          </div>
        </div>
      </div>
    </main>

 <?php include_once 'components/footer.php'; ?>

  <?php include_once 'layout/foot.php'; ?>
