<?php

require_once '../bootloader.php';

if (!isset($_SESSION['email'])) {
    header('location: login.php');
  }
  else
  {
    session_start(); 
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
  }


include_once 'layout/head.php';

?>

<header>
	<?php include_once ('components/navbar.php'); ?>
</header>

<main class="mTop">
	<div class="container">
		<div class="row mb-5">
			<div class="col-sm-4 col-lg-3">
				<div class="nav flex-column nav-pills purple darken-4 py-3 h-100" role="tablist" aria-orientation="vertical">
      				<a class="nav-link active white-text" id="detalii-tab" data-toggle="pill" href="#detalii" role="tab" aria-controls="detalii" aria-selected="true">Informații personale</a>
			        <a class="nav-link white-text" id="comenzi-tab" data-toggle="pill" href="#comenzi" role="tab" aria-controls="comenzi" aria-selected="false">Detalii comenzi</a>
    			</div>
			</div>
			<div class="col-sm-8 col-lg-9 p-2">
				<!-- Tab content -->
				<div class="tab-content mt-2" id="v-pills-tabContent">
					<!-- Detalii cont -->
      				<div class="tab-pane fade show active" id="detalii" role="tabpanel" aria-labelledby="detalii-tab">
      					<form id="detaliiForm" class="border border-light p-5">
      					 <!-- Grid row -->
						 <div class="form-group row">
						    <!-- Default input -->
						    <label class="col-6 col-md-5 col-lg-4 col-xl-3 col-form-label black-text font-weight-bold">Id client:</label>
    						<div class="col-6 col-md-7 col-lg-8 col-xl-9">
     	 						<label class="col-form-label black-text"><?php echo $idC; ?></label>
						    </div>
						  </div>
						  <!-- Grid row -->
						  <!-- Grid row -->
						 <div class="form-group row">
						    <!-- Default input -->
						    <label class="col-6 col-md-5 col-lg-4 col-xl-3 col-form-label black-text font-weight-bold">Nume:</label>
    						<div class="col-6 col-md-7 col-lg-8 col-xl-9">
     	 						<label class="col-form-label black-text"><?php echo $fnameC; ?></label>
						    </div>
						  </div>
						  <!-- Grid row -->
						  <!-- Grid row -->
						 <div class="form-group row">
						    <!-- Default input -->
						    <label class="col-6 col-md-5 col-lg-4 col-xl-3 col-form-label black-text font-weight-bold">Prenume:</label>
    						<div class="col-6 col-md-7 col-lg-8 col-xl-9">
     	 						<label class="col-form-label black-text"><?php echo $lnameC; ?></label>
						    </div>
						  </div>
						  <!-- Grid row -->
						  <!-- Grid row -->
						 <div class="form-group row">
						    <!-- Default input -->
						    <label class="col-6 col-md-5 col-lg-4 col-xl-3 col-form-label black-text font-weight-bold">Adrsă de email:</label>
    						<div class="col-6 col-md-7 col-lg-8 col-xl-9">
     	 						<label class="col-form-label black-text"><?php echo $emailC; ?></label>
						    </div>
						  </div>
						  <!-- Grid row -->
						  <!-- Grid row -->
						 <div class="form-group row">
						    <!-- Default input -->
						    <label class="col-6 col-md-5 col-lg-4 col-xl-3 col-form-label black-text font-weight-bold">Număr de telefon:</label>
    						<div class="col-6 col-md-7 col-lg-8 col-xl-9">
     	 						<label class="col-form-label black-text">0<?php echo $phoneC; ?></label>
						    </div>
						  </div>
						  <!-- Grid row -->
						  <!-- Grid row -->
						 <div class="form-group row">
						    <!-- Default input -->
						    <label class="col-6 col-md-5 col-lg-4 col-xl-3 col-form-label black-text font-weight-bold">Județ:</label>
    						<div class="col-6 col-md-7 col-lg-8 col-xl-9">
     	 						<label class="col-form-label black-text"><?php echo $judC; ?></label>
						    </div>
						  </div>
						  <!-- Grid row -->
						  <!-- Grid row -->
						 <div class="form-group row">
						    <!-- Default input -->
						    <label class="col-6 col-md-5 col-lg-4 col-xl-3 col-form-label black-text font-weight-bold">Localitate:</label>
    						<div class="col-6 col-md-7 col-lg-8 col-xl-9">
     	 						<label class="col-form-label black-text"><?php echo $locC; ?></label>
						    </div>
						  </div>
						  <!-- Grid row -->
						  <!-- Grid row -->
						 <div class="form-group row">
						    <!-- Default input -->
						    <label class="col-6 col-md-5 col-lg-4 col-xl-3 col-form-label black-text font-weight-bold">Adresă:</label>
    						<div class="col-6 col-md-7 col-lg-8 col-xl-9">
     	 						<label class="col-form-label black-text"><?php echo $addressC; ?></label>
						    </div>
						  </div>
						  <!-- Grid row -->
						</form>
      				</div>
      				<!-- Detalii cont -->

      				<!-- Detalii comenzi -->
      				<div class="tab-pane fade d-flex flex-center" id="comenzi" role="tabpanel" aria-labelledby="comenzi-tab">
      					<h1>Nu există comenzi</h1>
      				</div>
      				<!-- Detalii comenzi -->
    			</div>
    			<!-- Tab content -->
			</div>
		</div>
	</div>
</main>

	<?php include_once 'components/footer.php'; ?>

    <?php include_once 'layout/foot.php'; ?>