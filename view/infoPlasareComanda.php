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

				    <h2 class="h1-responsive font-weight-bold text-center my-4">Cum comand online?</h2>

				    <div class="row  border border-light p-5">

				        <!--Grid col-->
				        <div class="col-md-9 mb-md-0 mb-5">
				            <div id="infoPlasareComanda">
				            	<h3>Cum găsesc produsul dorit?</h3>
				            	<p class="mb-2">
				            		Cauta produsul dorit: poti cauta un produs direct in campul special de cautare sau navigand in categoriile de produse direct din meniul afisat in stanga.Adauga produsele dorite in cosul de cumparaturi prin selectarea butonului “Adauga in cos”. Poti adauga in cos mai multe produse, din categorii diferite.
				            	</p>
				            	<h3>Detalii de facturare si livrare comanda</h3>
				            	<p class="mb-2">
				            		<ul class="text-left">
				            		<li>In momentul primirii comenzii poti solicita curierului deschiderea coletului pentru a verifica starea produsului/produselor. Produsele resigilate nu beneficiaza de eventualele promotii care insotesc produsele noi.</li>
				            		<li>Nu uita sa citesti termenii si conditiile si sa bifezi casuta “Prin trimiterea comenzii accept termenii și condițiile PremierLeagueMagazin” inainte de a trimite comanda.</li>
				            		<li>Pasul final pentru trimiterea comenzii este butonul “Trimit comanda”. La scurt timp dupa apasarea acestui buton vei primi un e-mail prin care se confirma inregistrarea comenzii.</li>
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
