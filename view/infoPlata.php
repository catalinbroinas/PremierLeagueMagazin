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

				    <h2 class="h1-responsive font-weight-bold text-center my-4">Cum plătesc?</h2>

				    <div class="row  border border-light p-5">

				        <!--Grid col-->
				        <div class="col-md-9 mb-md-0 mb-5">
				            <div id="infoPlasareComanda">
				            	<h3>Numerar (la livrare)</h3>
				            	<p class="mb-2">
				            		Se platesc produsele in momentul ridicarii de la sediu sau curierului nostru (in cazul produselor livrate in municipiul Bucuresti). Produsele livrate in Bucuresti se pot plati doar numerar (nu se poate plati cu cardul).
				            	</p>
				            	<h3>Ramburs</h3>
				            	<p class="mb-2">
				            			Se platesc produsele curierului care livreaza impreuna cu taxele de livrare incluse in valoarea facturii.
				            	</p>
				            </div>
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
