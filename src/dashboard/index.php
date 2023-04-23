<?php require("top.php"); ?>

<?php
    if(isset($_GET['link'])) {
        $kliknietyLink = $_GET['link'];

        switch ($kliknietyLink) {
            case 'shop':
                ?>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor" bis_skin_checked="1"><div class="chartjs-size-monitor-expand" bis_skin_checked="1"><div class="" bis_skin_checked="1"></div></div><div class="chartjs-size-monitor-shrink" bis_skin_checked="1"><div class="" bis_skin_checked="1"></div></div></div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" bis_skin_checked="1">
                <h1 class="h2">Historia Zamówień</h1>
                </div>
        
                <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="688" height="20" style="display: block; height: 5px; width: 344px;"></canvas>
        
                <div class="table-responsive" bis_skin_checked="1">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nazwa</th>
                        <th scope="col">Data zamówienia</th>
                        <th scope="col">Cena</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1,001</td>
                        <td>random</td>
                        <td>data</td>
                        <td>placeholder</td>
                        <td>text</td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </main>
                <?php
                break;
            case 'account':
                ?>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor" bis_skin_checked="1"><div class="chartjs-size-monitor-expand" bis_skin_checked="1"><div class="" bis_skin_checked="1"></div></div><div class="chartjs-size-monitor-shrink" bis_skin_checked="1"><div class="" bis_skin_checked="1"></div></div></div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" bis_skin_checked="1">
                <h1 class="h2">Ustawienia Konta</h1>
                <?php
                break;
            case 'support':
                ?>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor" bis_skin_checked="1"><div class="chartjs-size-monitor-expand" bis_skin_checked="1"><div class="" bis_skin_checked="1"></div></div><div class="chartjs-size-monitor-shrink" bis_skin_checked="1"><div class="" bis_skin_checked="1"></div></div></div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" bis_skin_checked="1">
                <h1 class="h2">Pomoc Techniczna</h1>
                <?php
                break;
            case 'reports':
                ?>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor" bis_skin_checked="1"><div class="chartjs-size-monitor-expand" bis_skin_checked="1"><div class="" bis_skin_checked="1"></div></div><div class="chartjs-size-monitor-shrink" bis_skin_checked="1"><div class="" bis_skin_checked="1"></div></div></div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" bis_skin_checked="1">
                <h1 class="h2">Raporty</h1>
                <?php
                break;
            case 'rules':
                ?>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor" bis_skin_checked="1"><div class="chartjs-size-monitor-expand" bis_skin_checked="1"><div class="" bis_skin_checked="1"></div></div><div class="chartjs-size-monitor-shrink" bis_skin_checked="1"><div class="" bis_skin_checked="1"></div></div></div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" bis_skin_checked="1">
                <h1 class="h2">Regulamin</h1>
                </div>
        
                <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="688" height="20" style="display: block; height: 5px; width: 344px;"></canvas>
        
                <div class="table-responsive" bis_skin_checked="1">
                <table class="table table-striped table-sm">
                    <thead>
                    <p>Prosimy o zapoznanie się z poniższymi zasadami korzystania z naszej strony:</p>
                    <ol>
                    <li>Wszystkie treści na stronie są chronione prawem autorskim i nie mogą być kopiowane ani rozpowszechniane bez zgody właściciela strony.</li>
                    <li>Korzystanie z treści na stronie odbywa się na własne ryzyko. Właściciel strony nie ponosi odpowiedzialności za ewentualne szkody wynikające z korzystania z treści na stronie.</li>
                    <li>Zabrania się zamieszczania na stronie treści o charakterze obraźliwym, wulgaryzmów, treści pornograficznych, nawoływania do przemoc i innych treści niezgodnych z obowiązującym prawem.</li>
                    <li>Strona może korzystać z plików cookie w celu śledzenia aktywności użytkowników. Użytkownik ma prawo wyłączyć obsługę plików cookie w swojej przeglądarce, jeśli nie wyraża na to zgody.</li>
                    <li>Właściciel strony zastrzega sobie prawo do zmiany regulaminu w dowolnym czasie bez konieczności powiadamiania użytkowników.</li>
                    </ol>
                    <p>Korzystając z naszej strony, akceptujesz powyższy regulamin.</p>
                    </div>
                    </main>
                <?php
                break;
        }
    }
?>


<?php require("bottom.php"); ?>
