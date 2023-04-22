<?php
    if(!isset($_COOKIE["cookies_accepted"])) {
        ?>  
            <div class="modal fade" id="cookieModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ciasteczka!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4>Ta strona wykorzystuje pliki cookies</h4>
                        <p>
                            Cookies (popularnie zwane też ciasteczkami) to pliki wysyłane przez serwis internetowy i zapisywane w przeglądarce użytkownika.
                            Są stosowane w celu śledzenia ruchu na stronie, ułatwiają prawidłowe funkcjonowanie witryny, a także pomagają dostosować stronę do wymagań poszczególnych internautów, zapamiętując ich preferencje oraz sposób zachowania w serwisie.
                            Mogą być także wykorzystywane do przechowywania haseł i danych do logowania.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button onclick="setCookie()" class="btn btn-success">Zgadzam się</button>
                    </div>
                    </div>
                </div>
            </div>

            <script>
                window.onload = () => {
                    $("#cookieModal").modal('show');
                }

                function setCookie() {
                    const expiryDate = new Date();
                    expiryDate.setTime(expiryDate.getTime() + 60 * 60 * 24 * 365);
                    const expires = "expires=" + expiryDate.toUTCString();

                    document.cookie = "cookies_accepted" + "=" + "true" + ";" + expires + "path=/; samesite=strict;";

                    location.reload();
                }
            </script>
        <?php
    }
?>