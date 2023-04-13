<?php
if(isset($_POST['cookie_accept'])) {
    setcookie('cookies_accepted', 'true', time() + (86400 * 365), '/'); // ustawienie ciasteczka z ważnością 1 roku
    header("Location: ".$_SERVER['PHP_SELF']);
}

if(!isset($_COOKIE['cookies_accepted'])) {
    echo '<div class="cookie-message">Ta strona wykorzystuje pliki cookies. <form method="post"><button type="submit" name="cookie_accept">Zgadzam się</button></form></div>';
}
?>