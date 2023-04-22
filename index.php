<?php

require_once 'bootloader.php';
include_once 'view/layout/head.php';

?>
<head>
  <!-- Your custom styles (optional) -->
  <link href="css/intro.css" rel="stylesheet">
</head>

  <header>
    <?php include_once 'view/components/navbarIntro.php'; ?>
    <?php include_once 'view/components/intro.php'; ?>
  </header>

  <main class="mt-5">
    <?php 
    include_once 'view/section/player.php';
    include_once 'view/section/team.php';
    include_once 'view/section/oferta.php';
    ?>

    <!-- Buton Vezi Oferta Completa -->
    <section id="butonVOC" class="mb-5">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-12 d-flex justify-content-center">
            <a href="<?php echo site_url() . '/view/produse.php'; ?>" id="btnOferta" class="btn btn-sm" type="buton">Vezi oferta completă
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Buton Vezi Oferta Completa -->

  </main>

  <?php include_once 'view/components/footer.php'; ?>

  <?php include_once 'view/layout/foot.php'; ?>
