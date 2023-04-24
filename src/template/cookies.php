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
            <button onclick="setCookie('cookie_accepted', 'true')" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close">Zgadzam się</button>
        </div>
        </div>
    </div>
</div>

<script>

    window.onload = () => {
        if (getCookie('cookie_accepted') !== 'true') {
            $("#cookieModal").modal('show');
        }
    }

    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return null;
    }

    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
</script>