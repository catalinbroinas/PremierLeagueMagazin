<?php

require_once '../bootloader.php';

include_once 'layout/head.php';

?>

<header>
	<div class="container p-5">
		<div class="jumbotron my-auto cPD4 cloudy-knoxville-gradient card card-image">
		  <div class="text-center py-5 px-4">
		    <div>
		      <h1 class="card-title h1-responsive pt-3 mb-5 font-bold">
		      <i class="fas fa-check-circle"></i>	<strong>Succes!</strong></h1>
		      <?php print_notices(); ?>
		      <p class="mx-5 mb-5">Mulțumim pentru sesizarea trimisă! <br> Vei primi un răspuns în cel mai scurt timp. Nu uita, ne poți contacta și la adresa de email, sau la numărul de telefon pe care le găsești la secțiunea „Contact”.
		      </p>
		      <a id="btnL" class="btn" href="<?php echo site_url() . '/index.php'; ?>">Pagina principală <i class="fas fa-home grey-text ml-2"></i>
		      </a>
		    </div>
		  </div>
		</div>
	</div>
</header>

<?php include_once 'layout/foot.php'; ?>
