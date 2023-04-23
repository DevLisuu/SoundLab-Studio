<?php require("../template/top.php"); ?>

<section class="py-5">
	<div class="container px-4 px-lg-5 ">
		<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
                $result = $pdo->query("select * from produkty");
                $rows = $result->fetchAll();

                foreach($rows as $row) {
                    ?>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <div class="obrazek position-relative">
                                    <img class="obrazek card-img-top" src="../../assets/images/products/<?= $row["zdjecie"] ?>">
                                    <img class="nowy-obrazek" src="../../assets/images/products/<?= $row["zdjecie2"] ?>">
                                </div>
                                <div class="card-body p-3">
                                    <div class="text-center">
                                        <h5 class="fw-bolder"><?= $row["wykonawca"] ?> - <?= $row["tytul"] ?></h5><?= $row["cena"] ?>zł
                                    </div>
                                </div>
                                <div class="card-footer p-3 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Dodaj do koszyka</a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
	</div>
</section>

<?php require("../template/bottom.php"); ?>