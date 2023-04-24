<?php
$pdo = new PDO('mysql:host=localhost;dbname=soundlab', 'root', '');

$result = $pdo->query("select * from produkty");
$rows = $result->fetchAll();
session_start();
echo ('$row["tytul"]');
function addToCart($product_id, $product_name, $product_price) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array(); // Inicjalizacja koszyka, jeśli nie istnieje
    }

    // Dodanie produktu do koszyka w formie tablicy asocjacyjnej
    $item = array(
        'product_id' => $product_id,
        'product_name' => $product_name,
        'product_price' => $product_price
    );

    array_push($_SESSION['cart'], $item); // Dodanie produktu do koszyka w sesji
}

if (isset($row['id_produktu']) && isset($row['tytul']) && isset($row['cena'])) {
    $product_id = $row["id_produktu"];
    $product_name = $row["tytul"];
    $product_price = $row["cena"];
    addToCart($product_id, $product_name, $product_price);
}
?>