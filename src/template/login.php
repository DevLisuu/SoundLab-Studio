<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .divider:after,.divider:before {
          content: "";
          flex: 1;
          height: 1px;
          background: #eee;
        }

        .h-custom {
         height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
          .h-custom {
          height: 100%;
         }
        }
    </style>
</head>
<body>
    <section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          
        <div class="col-auto">
            <img src="../../assets/images/logo.png" class="img-fluid" alt="Sample image">
        </div>

        <div class="col-md-9 col-lg-6 col-xl-4 offset-xl-1">
            <form>
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            </div>

            <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Logowanie </p>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control form-control-lg"
                placeholder="Login lub adres e-mail " />
                <label class="form-label" for="form3Example3">Adres Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Wpisz hasło" />
                <label class="form-label" for="form3Example4">Hasło</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                    Zapamiętj mnie
                </label>
                </div>
                <a href="#!" class="text-body">Odzyskaj hasło</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
                <button type="button" class="btn btn-dark btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Zaloguj się</button>
                <p class="small fw-bold mt-2 pt-1 mb-0">Nie masz konta? <a href="register.php"
                    class="link-danger">Załóż Konto</a></p>
            </div>

            </form>
        </div>
        </div>
    </div>   
    </section>
</body>
</html>