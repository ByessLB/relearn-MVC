<?php

// Paramètres de connexion à la base de données
$dbhost     = "127.0.0.1";
$dbname     = "cinema";
$dbcharset  = "UTF8";
$dbuser     = "root";
$password   = "";

try {
    // Tentative de connexion à la base de données
    // Création d'une instance PDO pour la connexion
    $pdo = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";charset=".$dbcharset, $dbuser, $password);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activation des exceptions
} catch (PDOException $e) {
    // Capture d'une exception de type PDOException en cas d'erreur de connexion
    echo 'Erreur de connexion : ' . $e->getMessage();
}
