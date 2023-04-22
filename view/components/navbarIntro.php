<?php

if (isset($_SESSION['email']))
{
$db = Db()->connection;
  $emailCurent = $_SESSION['email'];

  $query = "SELECT * FROM users WHERE email = '$emailCurent'";
  $result = $db->query($query);

   $query = $db->query("SELECT * FROM users WHERE email = '$emailCurent'");  

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $idC = $row["id"];
  $fnameC = $row["fname"]; 
  $lnameC = $row["lname"]; 
  $emailC = $row["email"]; 
  $phoneC = $row["phone"]; 
  $judC = $row["jud"]; 
  $locC = $row["loc"]; 
  $addressC = $row["address"]; 
      }

  $db->close();
}
?>

<!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

      <div class="container-fluid">
      <!-- Navbar brand -->
        <a class="navbar-brand white-text" style="height: 100%;" href="<?php echo site_url() .'/index.php'; ?>">
          <i class="fas fa-caret-square-right">
          Premier League Magazin</i>
        </a>

        <!-- Collapse button -->
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls=      "basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item white-text">
                    <a class="nav-link" href="<?php echo site_url() .'/view/produse.php'; ?>"><strong>Oferta completă</strong>
                    </a>
                </li>
                <li class="nav-item white-text">
                    <a class="nav-link" href="<?php echo site_url() .'/view/nou.php'; ?>"><strong>Noutăți</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link white-text" href="<?php echo site_url() .'/view/promo.php'; ?>"><strong>Promoții</strong>
                    </a>
                </li>
                <li class="nav-item white-text">
                    <a class="nav-link" href="<?php echo site_url() .'/view/moda.php'; ?>"><strong>Modă</strong>           
                    </a>
                </li>
                 <li class="nav-item white-text">
                    <a class="nav-link" href="<?php echo site_url() .'/view/suveniruri.php'; ?>"><strong>Suveniruri</strong>
                    </a>
                </li>
            </ul>
            <!-- Links -->

            <form class="form-inline">
                <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Caută" aria-label="Caută">
                    <i class="fas fa-search text-white ml-1" aria-hidden="true"></i>
                </div>
            </form>
            <ul class="navbar-nav mr-auto">
              <?php
              if (!isset($_SESSION['email'])) {
              ?>
              <li class="nav-item dropdown">
                <a id="cont" class="nav-link dropdown-toggle white-text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user text-white mx-1" aria-hidden="true"></i><strong>Contul meu</strong>
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="cont">
                  <a class="dropdown-item white-text" href="<?php echo site_url() . '/' . 'view/register.php'; ?>">Înregistrare</a>
                  <a class="dropdown-item white-text" href="<?php echo site_url() . '/' . 'view/login.php'; ?>">Conectare</a>
                </div>
              </li>
              <?php 
              }
              else
              {
              ?>
              <li class="nav-item dropdown">
                <a id="cont" class="nav-link dropdown-toggle white-text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <strong><?php echo 
                  $lnameC . ' ' . '<span class="text-uppercase">' . $fnameC . '</span>'; ?></strong>
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="cont">
                  <a class="dropdown-item white-text" href="<?php echo site_url() . '/' . 'view/detaliiCont.php'; ?>"><i class="fas fa-user text-white mx-1" aria-hidden="true"></i>
                  Detalii cont</a>
                  <a class="dropdown-item white-text" href="<?php echo site_url() .'/logout.php'; ?>">
                  <i class="fas fa-power-off text-white mx-1" aria-hidden="true"></i><strong>Deconectare</strong>
                </a>
                </div>
              </li>
              <?php 
              }
              ?>
            </ul>

        </div>
        <!-- Collapsible content -->
      </div>
    </nav>
    <!--/.Navbar-->