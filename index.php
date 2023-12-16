<?php

define('BASE', 'http://localhost:81/PHP/relearn-MVC/');

// Récupération des paramètres de l'URL
$action = isset($_GET['execution']) ? $_GET['execution'] : '';
$tab = explode('/', $action);

// Initialisation des variables
$controller = isset($tab[0]) ? $tab[0] : 'default'; // Utilisation d'une valeur par défaut si non spécifié
$fonction = isset($tab[1]) ? $tab[1] : 'index'; // Utilisation d'une valeur par défaut si non spécifié
$arg = isset($tab[2]) ? $tab[2] : null;

// Validation des segments d'URL pour des raisons de sécurité
$controller = preg_replace('/[^a-zA-Z0-9_]/', '', $controller);
$fonction = preg_replace('/[^a-zA-Z0-9_]/', '', $fonction);

// Inclusion du fichier de contrôleur
$controllerFile = 'controller/' . $controller . '.php';
if (file_exists($controllerFile)) {
    require_once $controllerFile;
} else {
    // Gestion d'une erreur de fichier manquant
    die('Contrôleur non trouvé.');
}

// Vérification de l'existence de la fonction
if (!function_exists($fonction)) {
    // Gestion d'une erreur de fonction manquante
    die('Fonction non trouvée.');
}

// Appel de la fonction avec ou sans argument
if ($arg !== null) {
    $fonction($arg);
} else {
    $fonction();
}
