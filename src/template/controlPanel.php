<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCJ9LCJ2ZXJzaW9uIjoiMS45LjA5Iiwic2NvcmUiOjEwOTA5fV0="><audio class="audio-for-speech" src=""></audio><div class="translate-tooltip-mtz green sm-root translate hidden_translate" bis_skin_checked="1">
                    <!-- <div class="header-wrapper" bis_skin_checked="1">
                        <div class="header-controls" bis_skin_checked="1">
                            <span class="sound-translate"></span>
                            <span class="copy green"></span>
                            <span class="settings-translator"></span>
                        </div>
                        <div class="header-title" bis_skin_checked="1">translator</div>
                        <div class="translate-icons" bis_skin_checked="1">
                            <img class="from" src="">
                            <img class="translate-arrow" src="chrome-extension://ibppednjgooiepmkgdcoppnmbhmieefh/images/right-arrow.png">
                            <div class="translate_to_dropdown" bis_skin_checked="1">
                                <button class="dropbtn dropdown-toggle" type="button" id="dropdownMenuButton1" aria-expanded="false"></button>
                                <ul class="dropdown-content-wrapper languageSelector green">
                                    <li><a class="dropdown-item" data-lang="pl">Polish - polski</a></li>
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="translated-text" bis_skin_checked="1">
                        <div id="translator-words" class="words" bis_skin_checked="1"></div>
                        <div class="sentences green" bis_skin_checked="1"></div>
                    </div>
                    <div class="trans_controls" bis_skin_checked="1">
                        <div class="trans_controls__control-wrapper double_click" bis_skin_checked="1">
                            <span class="trans_controls__toggle dbl-click active" data-store="double_click">
                                <div class="trans_controls__inner-circle" bis_skin_checked="1"></div>
                            </span>
                            <span class="trans_controls__description">
                            Double-click
                            </span>
                        </div>
                        <div class="trans_controls__control-wrapper selection" bis_skin_checked="1">
                            <span class="trans_controls__toggle icon-trans active" data-store="icon_trans">
                                <div class="trans_controls__inner-circle" bis_skin_checked="1"></div>
                            </span>
                            <span class="trans_controls__description">
                            Select to translate
                            </span>
                        </div>
                    </div> -->
                </div><span class="translate-button-mtz hidden_translate green"></span>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../test">SoundLab Store</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <div class="navbar-nav" bis_skin_checked="1">
    <div class="nav-item text-nowrap" bis_skin_checked="1">
      <a class="nav-link px-3" href="#">Wyloguj się</a>
    </div>
  </div>
</header>

<div class="container-fluid" bis_skin_checked="1">
  <div class="row" bis_skin_checked="1">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse">
      <div class="position-sticky pt-3" bis_skin_checked="1">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart" aria-hidden="true"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              Moje zakupy
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file" aria-hidden="true"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
              Ustawienia konta
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              Pomoc
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2" aria-hidden="true"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers" aria-hidden="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
              Regulamin
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor" bis_skin_checked="1"><div class="chartjs-size-monitor-expand" bis_skin_checked="1"><div class="" bis_skin_checked="1"></div></div><div class="chartjs-size-monitor-shrink" bis_skin_checked="1"><div class="" bis_skin_checked="1"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" bis_skin_checked="1">
        <h1 class="h2">Dashboard</h1>
        <!-- <div class="btn-toolbar mb-2 mb-md-0" bis_skin_checked="1">
          
        <div class="btn-group me-2" bis_skin_checked="1">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            This week
          </button>
        </div> -->
      </div>

      <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="688" height="20" style="display: block; height: 5px; width: 344px;"></canvas>

      <h2>Hisotria zamówień</h2>
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
  </div>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  
      <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</body>
</html>