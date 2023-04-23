<div class="container">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col mb-3">
            <a class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                <img src="../../assets/images/logo.png" alt="Logo SoundLab Studio" class="bi me-2" width="150" height="150">
            </a>
            <p class="text-body-secondary">© 2023 SoundLab Studio</p>
        </div>

        <div class="col mb-3">
            <!-- Goofy ahh solution -->
        </div>

        <div class="col mb-3">
            <h5>SoundLab Studio</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="../home" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="../products" class="nav-link p-0 text-body-secondary">Produkty</a></li>
                <li class="nav-item mb-2"><a href="../contact" class="nav-link p-0 text-body-secondary">Kontakt</a></li>
                <li class="nav-item mb-2"><a href="../authors" class="nav-link p-0 text-body-secondary">Autorzy</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Centrum pomocy</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="../dashboard/index.php?link=rules" class="nav-link p-0 text-body-secondary">Regulamin</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pomoc online</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Polityka zwrotów</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Polityka plików "cookies"</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Ustawienia lokalizacji</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary">Kraj: <b>Polska</b></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary">Język: <b>polski</b></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary">Waluta: <b>PLN</b></li>
            </ul>
        </div>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<?php require("../template/cookies.php"); ?>
<script> feather.replace(); </script>
<script>
    let storedTheme = getCookie("theme");
    const themeSwitcher = document.querySelector("#themeSwitcher");

    function getPreferredTheme() {
        storedTheme = getCookie("theme");

        if(storedTheme) {
            return storedTheme;
        }
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    }

    function updateWebsiteTheme() {
        storedTheme = getPreferredTheme();

        if(storedTheme == "dark") {
            document.documentElement.setAttribute('data-bs-theme', 'dark');
            themeSwitcher.innerHTML = '<i data-feather="moon"></i>';
        } else {
            document.documentElement.setAttribute('data-bs-theme', 'light');
            themeSwitcher.innerHTML = '<i data-feather="sun"></i>'; 
        }

        feather.replace();
    }

    function setTheme() {
        storedTheme = getPreferredTheme();

        if(storedTheme == "dark") {
            document.cookie = "theme=light; expires=Fri, 31 Dec 9999 23:59:59 GMT; SameSite=Lax;";
        }else {
            document.cookie = "theme=dark; expires=Fri, 31 Dec 9999 23:59:59 GMT; SameSite=Lax;";
        }

        updateWebsiteTheme();
    }

    function getCookie(cname) {
        let name = cname + "=";
        let ca = document.cookie.split(';');

        for(let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    updateWebsiteTheme();
</script>
<?php
	$pdo = null;
?>

</body>
</html>