                    <!-- Card -->
                    <div class="card cardProdus mb-3 mr-2">

                      <!-- Card image -->
                      <div class="view overlay zoom">
                        <img class="card-img-top img-fluid" src="<?php echo site_url_img() . $imgsrc; ?>" alt="<?php echo $t; ?>">
                        <a href="produs.php">
                          <div class="mask waves-effect waves-light"></div>
                        </a>
                      </div>

                      <!-- Card content -->
                      <div class="card-body text-center d-flex flex-column">

                        <a href="produs.php" class="mb-auto" data-toggle="tooltip" data-placement="right" title="Click penru a vedea produsul">
                          <small class="card-title textInfoProdus"><?php echo $t; ?></small>
                        </a>
                        <h6 class="font-weight-bold success-lighter-hover mt-2"><?php echo $p; ?></h6>

                      </div>
                      <!-- Card content -->

                      <!-- Card footer -->
                      <div class="card-footer text-center">
                        <!-- Button -->
                        <a href="#" class="btn blue-gradient white-text btn-sm py-1">
                          <i class="fas fa-cart-plus mr-2"></i><small class="white-text"> Adaugă în coș</small>
                        </a>  
                      </div>
                      <!-- Card footer -->

                    </div>
                    <!-- Card -->
