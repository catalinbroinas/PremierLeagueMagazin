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

				    <h2 class="h1-responsive font-weight-bold text-center my-4">Returnare produs</h2>
				    <p class="text-center w-responsive mx-auto mb-1">Dacă din orice motiv nu ești mulțumit de produsul pe care l-ai primit de la noi, dă click pe butonul de mai jos pentru a fi trimis la pagina cu formularul de returnare, apoi tot ce trebuie să faci este să-l complectezi și apoi să ni-l trimiți. Ne poți contacta oricând prin email sau la numărul de telefon de mai jos.
				    </p>
				    <div class="text-center mb-5"><a href="<?php echo site_url() . '/view/retur.php'; ?>" class="btn btn-sm purple darken-4 white-text">Frmula retur</a></div>

				    <div class="row  border border-light p-5">

				        <!--Grid col-->
				        <div class="col-md-9 mb-md-0 mb-5">
				            <div id="returD">
				            	<h3>Retur gratuit în 30 de zile.</h3>
				            	<p class="mb-2">
				            		Dacă un produs achiziționat nu te mulțumește 100%, îl poți returna gratuit în 30 de zile calendaristice de la momentul livrării/ridicării. Trebuie să trimiți formularul de retur în maxim 30 de zile de la momenntul livrării/ridicării.
				            	</p>
				            	<h3>Detalii despre dreptul la retragere:</h3>
				            	<p class="mb-0">
				            		Cumparatorul are dreptul sa se retraga din Contract, respectiv sa returneze un Bun sau sa renunțe la un Serviciu, în termen de 14 zile calendaristice, fara invocarea niciunui motiv si fara a suporta alte costuri decât cele de livrare. Astfel, potrivit OUG nr 34/2014, perioada de returnare a unui Bun sau renunțare la un Serviciu expiră în termen de 14 zile de la:
				            		<ul class="text-left">
				            			<li>
				            				 ziua în care Cumparatorul intră în posesia fizică a ultimului Bun – în cazul în care Cumparatorul comandă printr-o singură comandă produse multiple care vor fi livrate separate
				            			</li>
				            			<li>
				            				ziua în care Cumparatorul intră în posesia fizică a ultimului Bun sau a ultimei piese – în cazul livrării unui produs care constă din mai multe loturi sau piese
				            			</li>
				            		</ul>
				            		Unele produse au o politică de retur specifică, îți recomandăm să citești condițiile mai jos.
				            	</p>
				            	<h3 class="mt-2">Conditii generale pentru returul produselor:</h3>
				            	<p class="mb-0">
				            		<ul class="text-left">
				            			<li>
				            				Produsul trebuie sa fie in aceeasi stare in care a fost livrat, nepurtat, fara pete sau rupturi.
				            			</li>
				            			<li>
				            				Produsele marcate in formularul de retur trebuie predate integral curierului, exact cum au fost bifate in site la solicitarea returului. Daca in coletul de retur se afla produse diferite fata de cele din formularul completat, dupa verificarea pachetului de catre curier, preluarea va fi refuzata.
				            			</li>
				            		</ul>
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
