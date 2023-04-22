<?php
require_once '../bootloader.php';

$email = '';

include_once 'layout/head.php';

?>

  <header>
    <?php include_once 'components/navbar.php'; ?>
  </header>

<main class="mTop">  

<div class="container-fluid">
	<div class="jumbotron text-center cPD4 cloudy-knoxville-gradient">
    <div class="row d-flex justify-content-center">
      <div class="col-sm-8">   
    		<h1 class="display-4">Contul meu</h1>
    		<p class="lead">Dacă nu ai încă un cont, creazăți unul acum, este foarte simplu și durează cinci minute. Ai nevoie de un singur cont pentru a plasa comenzi simplu și rapid, a putea vizualiza statusul comenzilor tale, de asemenea poți vizualiza istoricul comenzilor tale și asta nu e tot. 
    		<br />
    		Intră în cont sau creazați unul acum!</p>
        <a id="btnL" class="btn" href="<?php echo site_url() . '/view/login.php'; ?>">Conectare</a>  
      </div>
    </div>
	</div>
  
  <section class="mb-5" id="register">
	<div class="row d-flex justify-content-center">
		<div class="col-sm-10 col-md-9 col-lg-8 col-xl-7">
			<div class="card white-text bDP mb-2">
				<h5 class="card-header text-center">Înregistrează-te</h5>
			</div> 

			<form  action="<?php echo site_url() .'/register_insert.php'; ?>" method="post">
        <?php print_notices(); ?>
  				<div class="form-row">
  					<div class="md-form col-md-6">
              <input type="text" id="fname" name="fname" class="form-control">
				    	<label for="fname">Introdu numele tău</label>
				    </div>
				    <div class="md-form col-md-6">
				    	<input type="text" name="lname" id="lname" class="form-control">
              <label for="lname">Introdu prenumele tău</label>
			  		</div>
			  	</div>
				<div class="form-row">
					<div class="md-form col-md-6">
				    	<input type="email" name="email" id="email" value="<?php echo $email; ?>" class="form-control">
              <label for="email">Introdu adresa ta de email</label>
				    </div>
				    <div class="md-form col-md-6">
				    	<input type="tel" id="phone" name="phone" class="form-control">
              <label for="phone">Introdu numărul tău de telefon</label>
				    </div>
			  	</div>
			  	<div class="form-row">
			  		<div class="md-form col-md-6">
    					<input type="password" id="password" name="password" class="form-control">
              <label for="password">Introdu parola</label>
  					</div>
  					<div class="md-form col-md-6">
    					<input type="password" id="confirm_password" name="confirm_password" class="form-control">
              <label for="confirm_password">Confirmă-ți parola</label>
  					</div>
  				</div>
  				<div class="form-row">
  					<div class="md-form col-md-6">
                <input list="jud" type="text" id="judI" name="jud" class="form-control">
                <label for="judI">Introdu județul</label>
    						<datalist id="jud">
      							<option>Alba</option>
     							<option>Arad</option>
     							<option>Argeș</option>
      							<option>Bacău</option>
      							<option>Bihor</option>
      							<option>Bistrița Năsăud</option>
      							<option>Botoșani</option>
      							<option>Brăila</option>
      							<option>Brașov</option>
      							<option>Bucurețti sector 1</option>
      							<option>Bucurețti sector 2</option>
      							<option>Bucurețti sector 3</option>
      							<option>Bucurețti sector 4</option>
      							<option>Bucurețti sector 5</option>
      							<option>Bucurețti sector 6</option>
      							<option>Buzău</option>
      							<option>Caraș-Severin</option>
								    <option>Cluj</option>
                                <option>Constanța</option>
                                <option>Covasna</option>
                                <option>Dambovita</option>
                                <option>Dolj</option>
                                <option>Galați</option>
                                <option>Giurgiu</option>
                                <option>Gorj</option>
                                <option>Harghita</option>
                                <option>Hunedoara</option>
                                <option>Ialomita</option>
                                <option>Iasi</option>
                                <option>Ilfov</option>
                                <option>Mures</option>
                                <option>Mehedinti</option>
                                <option>Maramures</option>
                                <option>Neamt</option>
                                <option>Olt</option>
                                <option>Prahova</option>
                                <option>Satu Mare</option>
                                <option>Salaj</option>
                                <option>Sibiu</option>
                                <option>Suceava</option>
                                <option>Teleorman</option>
                                <option>Timiș</option>
                                <option>Tulcea</option>
                                <option>Vaslui</option>
                                <option>Vâlcea</option>
                                <option>Vrancea</option>
    						</datalist>
  					</div>
  					<div class="md-form col-md-6">
				    	<input type="text" id="loc" name="loc" class="form-control">
              <label for="loc">Introdu localitatea ta</label>
				    </div>
  				</div>
  				<div class="md-form">
				    <input type="text" id="address" name="address" class="form-control">
            <label for="address">Introdu adresa ta</label>
  				</div>
          <div class="text-center">
  				  <input class="btn btn-sm btnI white-text" type="submit" name="Submit" value="Înregistrare">
          </div>
			</form>

      <!-- Alert -->
      <div class="alert alert-info mt-1" id="alertI">
        Ai deja un cont valid?<a href="login.php" class="alert-link" data-toggle="tooltip" title="Sari la pagina de logare" data-placement="right">Click aici</a>
      </div>
		</div>		
	</div>
  </section>
</div>

</main>

  <?php include_once 'components/footer.php'; ?>

  <?php include_once 'layout/foot.php'; ?>
