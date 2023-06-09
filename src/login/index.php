<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundLab Studio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../template/extra.css">
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
            
            <div class="col-auto">
                <img src="../../assets/images/logo_dark.png" class="img-fluid" alt="Sample image">
            </div>

            <div class="col-md-9 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST">
                    <div class="divider d-flex align-items-center my-4">
                        <h3 class="text-center fw-bold mx-3 mb-0">Logowanie</h3>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">Email</label>
                        <input type="email" id="form3Example3" class="form-control form-control-lg" name="username" required />
                    </div>

                    <div class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">Hasło</label>
                        <input type="password" id="form3Example4" class="form-control form-control-lg" name="password" required />
                    </div>

                    <?php
                        session_start();
                        
                        if(isset($_SESSION['loginerror']) && isset($_POST["username"])) {
                            if($_SESSION['loginerror'] == true) {
                            $_SESSION['loginerror'] = null;
                    ?>
                    <div class="divider d-flex align-items-center my-4">
                        <h4 class="text-center mx-3 mb-0 text-danger">Hasło lub login są błędne, spróbuj ponownie.</h4>
                    </div>
                    <?php
                            }
                        }
                    ?>

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" id="form2Example3" checked />
                            <label class="form-check-label" for="form2Example3">Zapamiętaj mnie</label>
                        </div>
                        <a href="#" class="text-body">Odzyskaj hasło</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                    <input type="submit" class="btn btn-secondary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Zaloguj się" />
                        <p class="small fw-bold mt-2 pt-1 mb-0">Nie masz konta? <a href="../register" class="link-danger">Załóż konto</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<?php
    try {
        $conn = new PDO('mysql:host=localhost;dbname=soundlab', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Błąd połączenia z bazą danych: " . $e->getMessage();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $stmt = $conn->prepare("SELECT * FROM uzytkownicy WHERE email = :username AND haslo = :password");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $_SESSION['user_id'] = $user['id_klienta'];
            $_SESSION['username'] = $user['email'];    
            header("Location: ../home");
            exit;
        } else {
            $_SESSION['loginerror'] = true;
        }
    }
?>
</body>
</html>