<?php

setcookie("koszyk", "", time() - 3600, "/");
header("Location: ../home");

?>