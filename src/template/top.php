<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SoundLab Studio</title>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<?php require("../template/extras.php"); ?>
</head>
<body>

<?php
	session_start();
	$pdo = new PDO('mysql:host=localhost;dbname=soundlab', 'root', '');
?>

<header class="p-3 mb-3 border-bottom bg-body">
	<div class="container">
		<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
			<a href="#" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
				<img src="../../assets/images/logo_dark.png" alt="Logo SoundLab Studio" class="logoSL bi me-2" width="100" height="100" role="img">
			</a>

			<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
				<li><a href="../home" class="nav-link px-2 link-secondary">Home</a></li>
				<li><a href="../products" class="nav-link px-2 link-body-emphasis">Produkty</a></li>
				<li><a href="../contact" class="nav-link px-2 link-body-emphasis">Kontakt</a></li>
				<li><a href="../authors" class="nav-link px-2 link-body-emphasis">Autorzy</a></li>
			</ul>

			<?php
				if (isset($_SESSION['user_id'])) {
					?>

					<form class="d-flex" style="margin-right: 10px">
					<div class="button border">
						<a href='../cart' class="btn btn-outline-success><i class="bi-cart-fill me-1"></i>Koszyk
						<span class="badge bg-secondary text-white ms-1 rounded-pill">10</span>
						</a>
					</div>
					</form>
					
					<div class="dropdown text-end">
						<a href="#" class="d-block link-secondary text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
						<img src="../../assets/images/default_avatar.jpg" alt="mdo" class="rounded-circle" width="32" height="32">
						</a>
						<ul class="dropdown-menu text-small">
							<li><a class="dropdown-item" href="../dashboard/index.php?link=shop">Moje zakupy</a></li>
							<li><a class="dropdown-item" href="../dashboard/index.php?link=account">Ustawienia</a></li>
							<li><a class="dropdown-item" href="../dashboard/index.php?link=support">Pomoc</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="../login/logout.php">Wyloguj się</a></li>
						</ul>
					</div>

					<?php
				} else {
					?>

					<div class="text-end" bis_skin_checked="1">
						<a href="../login" class="text-decoration-none btn btn-outline-secondary me-2">Zaloguj się</a>
						<a href="../register" class="btn btn-secondary btn-outline me-2">Zarejestruj się</a>
					</div>                    

					<?php
				}
			?>
			<a id="themeSwitcher" href="#" onclick="setTheme()" class="nav-link px-2 link-body-emphasis"></a>
		</div>
	</div>
</header>