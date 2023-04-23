<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundLab Studio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <section class="vh-100 bg-image" style="background-image: url('../../assets/images/logo.png');">
    <div class="mask d-flex align-items-center h-100">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-3">Załóż konto</h2>
                <p class="small fw-bold mt-2 pt-1 mb-4">Masz już konto? <a href="login.php" class="link-danger">Zaloguj się</a></p>
                <form>
                  <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example1cg">Imię</label>
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" required />
                  </div>

                  <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example1cg">Nazwisko</label>
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" required />
                  </div>

                  <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example3cg">Email</label>
                    <input type="email" id="form3Example3cg" class="form-control form-control-lg" required />
                  </div>

                  <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4cg">Hasło</label>
                    <input type="password" id="form3Example4cg" class="form-control form-control-lg" required />
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3cg" required />
                    <label class="form-check-label" for="form2Example3g">Oświadczam, że znam i akceptuję Regulamin SoundLab Store.</label>
                  </div>

                  <div class="d-flex justify-content-center">
                    <input type="submit" class="btn btn-secondary btn-lg" value="Zarejestruj się" />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>