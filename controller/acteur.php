<?php
function liste () {
    require ("model/acteur.php");
    $acteurs = listeActeurs();
    require ('view/acteur/allacteur.php');
}

function un ($id) {
    require ("model/acteur.php");
    $acteur = unActeur($id);
    require ('view/acteur/oneacteur.php');
}

function inscription () {
    require ("view/acteur/createacteur.php");
}

function create () {
    require ("model/acteur.php");
    creActeur($_POST);
}

function update ($id) {
    require ("model/acteur.php");
    $elts = unActeur($id);
    require ('view/acteur/updateacteur.php');
}

function modify () {
    require ("model/acteur.php");
    updActeur ($_POST);
}

function delete ($id) {
    require ("model/acteur.php");
    delActeur($id);
}