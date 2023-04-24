<?php require("../template/top.php"); ?>

<div class="container">
<div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Twój koszyk</span>
          <span class="badge bg-primary rounded-pill koszyk-badge"></span>
        </h4>
        <ul class="list-group mb-3">
          <?php 
          $pdo = new PDO('mysql:host=localhost;dbname=soundlab', 'root', '');

          if (!isset($_COOKIE['koszyk']) || empty($_COOKIE["koszyk"])) {
              $_COOKIE['koszyk'] = json_encode([]);
          }

          $koszyk = json_decode($_COOKIE["koszyk"]);
          $koszykStr = join(',', $koszyk);

          $result = $pdo->query("SELECT id_produktu, tytul, wykonawca, cena from produkty WHERE id_produktu IN ($koszykStr)");

          $rows = $result->fetchAll();

          $suma = 0;
          foreach ($rows as $row) {
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

          ?>
          <li class="list-group-item d-flex justify-content-between">
            <span>Łącznie</span>
            <strong><?= $suma ?>zł</strong>
          </li>
        </ul>

      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Dane zamówienia</h4>
        <form method="post" class="needs-validation" novalidate="">
          <div class="row g-3">

          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Imię</label>
              <input type="text" class="form-control" id="imie" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Podaj prawidłowe imię.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Nazwisko</label>
              <input type="text" class="form-control" id="nazwisko" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Podaj prawidłowe nazwisko.
              </div>
            </div>


            <div class="col-12">
              <label for="address" class="form-label">Adres</label>
              <input type="text" class="form-control" id="adres" placeholder="Wyszków" required="">
              <div class="invalid-feedback">
                Podaj prawidłowy adres.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Ulica <span class="text-body-secondary">(Opcjonalnie)</span></label>
              <input type="text" class="form-control" id="ulica" placeholder="ul. Wyszkowska 15">
            </div>


            <div class="col-md-3">
              <label for="zip" class="form-label">Kod pocztowy</label>
              <input type="text" class="form-control" id="kodp" placeholder="" required="">
              <div class="invalid-feedback">
                Kod pocztowy jest wymagany.
              </div>
            </div>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Zapisz informacje na następne zakupy</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Rodzaj płatności</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="cardm" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
              <label class="form-check-label" for="cardm">Karta Mastercard</label>
            </div>
            <div class="form-check">
              <input id="cardv" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="cardv">Karta Visa</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
            <div class="form-check">
              <input id="psc" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="psc">PaySafeCard</label>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Zamawiam</button>
        </form>
      </div>
    </div>
</div>
</div>

<?php require("../template/bottom.php"); ?>