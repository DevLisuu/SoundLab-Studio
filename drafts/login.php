<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Połączenie z bazą danych
    $dsn = 'mysql:host=localhost;dbname=database_name';
    $username = 'username';
    $password = 'password';
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    try {
        $db = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit();
    }
    // Pobranie danych z formularza logowania
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Wyszukanie użytkownika w bazie danych
    $stmt = $db->prepare('SELECT * FROM users WHERE username = :username');
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    // Weryfikacja hasła
    if ($user && password_verify($password, $user['password'])) {
        // Ustawienie zmiennej sesyjnej
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        // Przekierowanie do strony głównej
        header('Location: index.php');
        exit();
    } else {
        // Błąd logowania
        echo "Invalid username or password";
    }
    }
?>

    <!-- 
    Haszowanie hasła
    $password = password_hash('hasło123', PASSWORD_DEFAULT);
    $stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
    $stmt->execute(['janusz', $password]);
    -->