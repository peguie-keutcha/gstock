<?php
$dsn = 'mysql:host=db;dbname=d_clic;charset=utf8mb4';
$user = 'admin';
$password = 'adminpassword';

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query('SELECT * FROM produit');
    $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($produits);
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
