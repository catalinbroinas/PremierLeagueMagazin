<?php

require_once '../bootloader.php';
include_once 'layout/head.php';

?>

<header>
	<?php include_once 'components/navbar.php'; ?>
</header>

<main class="mTop">
	<div class="container">
		<div class="row flex-center">
			<div class="col-lg-10 col-sm-11">
				<!--Section: Alert -->
				<section class="mb-4 cPD4" id="formAlert">

				    <h2 class="h1-responsive font-weight-bold text-center my-4">Reclamații</h2>
				    <p class="text-center w-responsive mx-auto mb-5">Dacă ai vreo nemulțumire cu privire la serviciile oferite de noi, te rugăm să o trimiți aici. Ne poți contacta oricând prin email sau la numărul de telefon de mai jos.</p>

				    <div class="row  border border-light p-5">

				        <!--Grid col-->
				        <div class="col-md-9 mb-md-0 mb-5">
				            <form id="alert-form" name="alert-form" action="<?php echo site_url() .'/alert_insert.php'; ?>" method="post">
				            	<?php print_notices(); ?>
				                <!--Grid row-->
				                <div class="row">
				                    <!--Grid col-->
				                    <div class="col-md-4">
				                        <div class="md-form mb-0">
				                        	<?php print_notices(); ?>
				                            <input type="text" id="fname" name="fname" class="form-control">
				                            <label for="fname" class="">Numele tău</label>
				                        </div>
				                    </div>
				                    <!--Grid col-->

				                    <!--Grid col-->
				                    <div class="col-md-4">
				                        <div class="md-form mb-0">
				                            <input type="text" id="lname" name="lname" class="form-control">
				                            <label for="lname" class="">Prenumele tău</label>
				                        </div>
				                    </div>
				                    <!--Grid col-->

				                    <!--Grid col-->
				                    <div class="col-md-4">
				                        <div class="md-form mb-0">
				                            <input type="text" id="email" name="email" class="form-control">
				                            <label for="email" class="">Adresa ta de email</label>
				                        </div>
				                    </div>
				                    <!--Grid col-->

				                </div>
				                <!--Grid row-->

				                <!--Grid row-->
				                <div class="row">
				                    <div class="col-md-12">
				                        <div class="md-form mb-0">
				                            <input type="text" id="subject" name="subject" class="form-control">
				                            <label for="subject" class="">Subiect</label>
				                        </div>
				                    </div>
				                </div>
				                <!--Grid row-->

				                <!--Grid row-->
				                <div class="row">

				                    <!--Grid column-->
				                    <div class="col-md-12">

				                        <div class="md-form">
				                            <textarea type="text" id="message" name="message" rows="3" class="form-control md-textarea"></textarea>
				                            <label for="message">Mesajul tău</label>
				                        </div>

				                    </div>
				                </div>
				                <!--Grid row-->

				                <div class="text-center text-md-left">
				                	<input class="btn btn-sm purple darken-4 white-text" type="submit" name="Submit" value="Trimite">
				            	</div>
				            </form>

				        </div>
				        <!--Grid column-->

				        <!--Grid column-->
				        <div class="col-md-3 text-center">
				            <ul class="list-unstyled mb-0">
				                <li><i class="fas fa-map-marker-alt fa-2x"></i>
				                    <p>Bihor, Aleșd, Str. Ciocârliei nr. 1, RO</p>
				                </li>
				                <li><i class="fas fa-phone mt-4 fa-2x"></i>
				                    <p>+40 765 277 604</p>
				                </li>

				                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
				                    <p>catalinbroinas@yahoo.com</p>
				                </li>
				            </ul>
				        </div>
				        <!--Grid column-->

				    </div>

				</section>
				<!--Section: Contact v.2-->
			</div>
		</div>
	</div>
</main>

	<?php include_once 'components/footer.php'; ?>


	<?php include_once 'layout/foot.php'; ?>
