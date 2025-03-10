<?php
// Informations de connexion à la base de données
$host = 'localhost';
$dbname = 'smarttech_db';
$username = 'root';
$password = ''; // Laisser vide si aucun mot de passe n'est défini

try {
    // Création de la connexion avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    
    // Configurer PDO pour afficher les erreurs SQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Afficher l'erreur en cas d'échec de connexion
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
