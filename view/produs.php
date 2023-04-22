<?php

require_once '../bootloader.php';
include_once 'layout/head.php';

?>
<head>
  <link rel="stylesheet" href="<?php echo site_url() . '/css/quantyti.css'; ?>">
</head>

  <header>
    <?php include_once 'components/navbar.php'; ?>
  </header>


  <main class="mb-5" style="margin-top: 80px;">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-6">
          <img src="<?php echo site_url() .  '/img/liv/t/t2.jpg'; ?>" class="float-left" style="width: 500px;height: 500px;">
        </div>
        <div class="col-lg-5 ml-3">
          <h5 class="font-weight-bold grey-text">Liverpool tricou oficial de joc cu Mohamed Salah, acasă, bărbați</h5>
          <hr class="font-weight-bold purple darken-4">
          <label class="mr-3 black-text font-weight-bold mt-3">Selecteaza marimea: </label>
          <select class="browser-default custom-select selectMarime">
            <option selected>Selectează marimea</option>
            <option value="1">S</option>
            <option value="2">M</option>
            <option value="3">L</option>
            <option value="4">XL</option>
          </select>
          <div class="qty my-3">
            <label class="mr-3 black-text font-weight-bold">Cantitatea</label>
            <span class="minus bg-dark">-</span>
            <input type="number" class="count" name="qty" value="1">
            <span class="plus bg-dark">+</span>
          </div>
          <div class="red-text font-weight-bold">
            <label class="mr-3">Preț</label>
            <label>550 lei</label>
          </div>
          <a href="#" class="btn blue-gradient white-text btn-sm">
            <i class="fas fa-cart-plus mr-2"></i>Adaugă în coș
          </a>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-12 mx-auto">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#desc" role="tab" aria-controls="desc"
                aria-selected="true">Descriere</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="spec-tab" data-toggle="tab" href="#spec" role="tab" aria-controls="spec"
                aria-selected="false">Specificatii</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="retur-tab" data-toggle="tab" href="#retur" role="tab" aria-controls="retur"
                aria-selected="false">Returnare</a>
            </li>
          </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="desc" role="tabpanel" aria-labelledby="desc-tab">
            <p>
              Noul Balance lansează un produs sport de top roșu, care vă va ajuta să iubiți și să vă pasovați clubul iubit în vremuri bune și rele. Mai mult sprijin este greu posibil! Liverpool Home Sporttop adăugați un element la colecția dvs. de ventilatoare, precum cele din Premier League. Acest model este respirabil, foarte confortabil și ușor. Datorită inserțiilor de plasă extrem de funcționale pe spate, partea superioară a sportului este ventilată în mod special. Cămașa impresionează vizual cu o stemă de club pe piept.
            </p>
          </div>
          <div class="tab-pane fade" id="spec" role="tabpanel" aria-labelledby="spec-tab">
            <p>
              Liverpool's fans is considered amongst the most passionate and loyal, earning respect beyond the clubs own fans. Most visible by the ever popular "You'll Never Walk Alone" - being sung from the Kop and rest of Anfield. "The Reds" has won 18 English Championships, and is determined to add another one.

• Same design as used by the players.

Liverpool Home Shirt 2018/19 Kids.
            </p>
          </div>
          <div class="tab-pane fade" id="retur" role="tabpanel" aria-labelledby="retur-tab">
            <p>
              
Product ID: 3546036
Material: 100% Polyester
NB Dry moisture management technology keeps the wearer dry and comfortable
Body map fabric on the side panels
Anti Bacterial finish
Embroidered crest and NB logo
NB Authenticator - Holographic woven tab with a stitched finish on the lower hem to ensure genuine NB quality
Moisture wicking technology to keep you cool and dry
Heat transfer mock vent on the underarms
Loose fit
Short sleeve
Machine wash, tumble dry low
Officially licensed
Imported
Brand: New Balance
            </p>
          </div>
        </div>
        </div>
      </div>
    </div>
  </main>

  <?php include_once 'components/footer.php'; ?>

  <?php include_once 'layout/foot.php'; ?>
  <script type="text/javascript" src="<?php echo site_url() . '/js/quantyti.js'; ?>"></script>
