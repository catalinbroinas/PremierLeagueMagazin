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

				    <h2 class="h1-responsive font-weight-bold text-center my-4">Livrarea comenzilor</h2>

				    <div class="row  border border-light p-5">

				        <!--Grid col-->
				        <div class="col-md-9 mb-md-0 mb-5">
				            <div id="infoPlasareComanda">
				            	<h3>Modificare sau anulare comanda</h3>
				            	<p class="mb-2">
				            		Posibilitatea anularii unei comenzi sau livrari este disponibila. In cazul in care anularea nu mai este posibila din cont, daca te-ai razgandit si nu mai vrei un produs din comanda, vrei alt produs decat cel comandat sau nu mai vrei niciunul dintre produsele comandate, ne poti anunta cat mai repede la 0765.277.604. .
				            	</p>
				            	<h3>Modalitati de livrare pentru produsele vandute de PremierLeagueMagazin</h3>
				            	<p class="mb-2">
				            			<h5 class="font-weight-bold">Livrare prin curier (standard)</h5>
				            		Livrarea este gratuita pentru comenzile cu valoare mai mare de 200 lei care contin produse vandute de PremierLeagueMagazin, cu exceptia produselor mentionate la punctele 1 si 2 de mai sus. In cazul in care o comanda contine produse vandute si livrate de PremierLeagueMagazin si un card cadou, valoarea totala rezultata fiind de minimum 200 de lei, transportul gratuit nu se aplica. Mai exact, produsele vandute si livrate de PremierLeagueMagazin din comanda respectiva trebuie sa fie de cel putin 200 de lei, astfel incat sa beneficieze de transport gratuit.<br />Taxa de livrare este de 14,99 lei pentru comenzile cu valoare mai mica de 200 lei care contin produse vandute si livrate de PremierLeagueMagazin.<br />Pentru localitatile din afara retelei de curierat, costul livrarii difera in functie de zona geografica si consta in Taxa pe regiune + Taxa pe zona. Aceste taxe pot fi consultate aici, pentru fiecare localitate in parte.<br />Costul si conditiile de livrare pentru produsele vandute de partenerii PremierLeagueMagazin Marketplace sunt afisate in pagina fiecarui partener – o poti accesa apasand pe numele acestuia, afisat in pagina produsului.
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
