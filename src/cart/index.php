<?php require("../template/top.php"); ?>

<div class="container">
<div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-success">Twój koszyk</span>
          <span class="badge bg-success rounded-pill koszyk-badge"></span>
        </h4>
        <ul class="list-group mb-3">
        <?php
          if(!isset($_SESSION['user_id'])) {
            header("Location: ../home");
          }

          $pdo = new PDO('mysql:host=localhost;dbname=soundlab', 'root', '');

          if (!isset($_COOKIE['koszyk']) || empty($_COOKIE["koszyk"])) {
              $_COOKIE['koszyk'] = json_encode([]);
          }

          $koszyk = json_decode($_COOKIE["koszyk"]);
          $koszykStr = join(',', $koszyk);

          $suma = 0;

          if(!(count($koszyk) > 0) && isset($_POST["zamow"])) {
            header("Location: ../products");
          }

          if(count($koszyk) > 0) {
            if(isset($_POST["zamow"])) {
              for($i=0; $i < count($koszyk); $i++) {
                $result = $pdo->query("INSERT INTO `zamowienia` (`id_klienta`, `id_produktu`, `rodzaj_platnosci`, `data_zamowienia`) VALUES ('".$_SESSION['user_id']."', '".$koszyk[$i]."', '".$_POST['metodap']."', CURRENT_TIMESTAMP())");
              }

              header("Location: wyczysckoszyk.php");
            }

            for($i=0; $i < count($koszyk); $i++) { 
              $result = $pdo->query("SELECT id_produktu, tytul, wykonawca, cena from produkty WHERE id_produktu = ".$koszyk[$i]);
              $row = $result->fetch();
              
              $suma += $row["cena"];

              ?>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0"><?= $row["wykonawca"] ?></h6>
                  <small class="text-body-secondary"><?= $row["tytul"] ?></small>
                </div>
                <span class="text-body-secondary"><?= $row["cena"] ?>zł</span>
              </li>
              <?php
            }
          }

          $pdo = null;
        ?>
          <li class="list-group-item d-flex justify-content-between">
            <span>Łącznie</span>
            <strong><?= $suma ?>zł</strong>
          </li>
        </ul>

        <a href="wyczysckoszyk.php" class="text-center btn btn-outline-danger">Wyczyść koszyk</a>

      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Dane zamówienia</h4>
        <form method="post" class="needs-validation">
          <div class="row g-3">

          <div class="row g-3">
            <div class="col-sm-6">
              <label for="imie" class="form-label">Imię</label>
              <input type="text" class="form-control" id="imie" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Podaj prawidłowe imię.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="nazwisko" class="form-label">Nazwisko</label>
              <input type="text" class="form-control" id="nazwisko" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Podaj prawidłowe nazwisko.
              </div>
            </div>


            <div class="col-12">
              <label for="adres" class="form-label">Adres</label>
              <input type="text" class="form-control" id="adres" placeholder="Wyszków" required="">
              <div class="invalid-feedback">
                Podaj prawidłowy adres.
              </div>
            </div>

            <div class="col-12">
              <label for="ulica" class="form-label">Adres2 <span class="text-body-secondary">(Opcjonalnie)</span></label>
              <input type="text" class="form-control" id="adres2" placeholder="ul. Wyszkowska 15" required="">
            </div>


            <div class="col-md-3">
              <label for="kodp" class="form-label">Kod pocztowy</label>
              <input type="text" class="form-control" id="kodp" placeholder="00-000" required="">
              <div class="invalid-feedback">
                Kod pocztowy jest wymagany.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <h4 class="mb-1">Rodzaj płatności</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="karta" value="karta" name="metodap" type="radio" class="form-check-input" checked="" required="">
              <label class="form-check-label" for="karta">Karta</label>
            </div>
            <div class="form-check">
              <input id="paypal" value="paypal" name="metodap" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
            <div class="form-check">
              <input id="paysafecard" value="paysafecard" name="metodap" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paysafecard">PaySafeCard</label>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-success btn-lg" type="submit" name="zamow">Zamawiam</button>
        </form>
      </div>
    </div>
</div>
</div>

<?php require("../template/bottom.php"); ?>