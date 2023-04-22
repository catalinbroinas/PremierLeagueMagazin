<!-- Panel -->
<div class="tab-pane fade <?php echo $promo; ?>" id="promo" role="tabpanel" aria-labelledby="echipament-tab">
	<!-- Grid row -->
	<div class="row">
		<!-- Card group -->
		<div class="card-group">
			<?php
                  	$imgsrc = '/ars/t/t5.jpg';
                  	$t = 'Arsenal tricou, deplasare, copii, 2018-2019';
                  	$p = '235 lei';
                  	include 'cardpromo.php';
                  	?>

            <?php
                  	$imgsrc = '/ars/ps/ps2.jpg';
                  	$t = 'Arsenal pantaloni scurți, deplasare, 2018-2019';
                  	$p = '100 lei';
                  	include 'cardpromo.php';
                  	?>
            <div class="w-100 d-none d-sm-block d-lg-none"></div>

            <?php
            $imgsrc = '/wol/kit/b1.jpg';
            $t = 'Wolverhampton Wanderers bluză pentru portar 2018-2019, acasă, bărbați';
            $p = '150 lei';
            include 'cardpromo.php';
            ?>
            <div class="w-100 d-none d-lg-block d-xl-none"></div>

            <?php
            $imgsrc = '/wol/kit/ps3.jpg';
            $t = 'Wolverhampton Wanderers pantaloni scurți 2018-2019, acasă, bărbați';
            $p = '75 lei';
            include 'cardpromo.php';
            ?>
            <div class="w-100 d-none d-sm-block d-lg-none"></div>
            <div class="w-100 d-none d-xl-block"></div>	
		</div>
		<!-- Card group -->
	</div>
	<!-- Grid row -->
</div>
<!-- Panel -->
