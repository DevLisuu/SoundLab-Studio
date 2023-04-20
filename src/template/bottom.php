<?php
    if(basename(__FILE__) == basename($_SERVER["REQUEST_URI"])) {
        die('Bezpośredni dostęp nie jest dozwolony dla danego adresu!');
    }
?>

<div class="container">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col mb-4">
            
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
             <img src="../../assets/images/logo.png" alt="" srcset="" class="bi me-2" width="150" height="150" role="img" aria-label="Bootstrap">
            </a>
            <p class="text-body-secondary">© 2023 SoundLab Studio</p>
        </div>

        <div class="col mb-3">

        </div>

        <div class="col mb-3">
            <h5>SoundLab Studio</h5>
            <ul class="nav flex-column" id='animation'>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">O nas</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Mapa strony</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Centrum pomocy</h5>
            <ul class="nav flex-column" id='animation'>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pomoc</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Dla kupujących</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Polityka zwrotów towaru</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Polityka plików "cookies"</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Regulamin</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Ustawienia lokalizacji</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary">Kraj: <b>Polska</b></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary">Dostawa <b>do Polska</b></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary">Język <b>polski</b></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary">Waluta <b>PLN</b></li>
            </ul>
        </div>
    </footer>
</div>

<script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/bootstrap/js/popper.min.js"></script>
<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>