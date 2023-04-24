<?php
session_start(); 

if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    echo "<h1>Koszyk</h1>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nazwa</th><th>Cena</th></tr>";

    foreach ($_SESSION['cart'] as $item) {
        echo "<tr>";
        echo "<td>" . $item['product_id'] . "</td>";
        echo "<td>" . $item['product_name'] . "</td>";
        echo "<td>" . $item['product_price'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<h1>Koszyk jest pusty</h1>";
}
?>
