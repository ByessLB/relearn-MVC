<?php

function listeActeurs() {
require ('connect.php');

    try {
        // Preparation de la requete
        $sql = $pdo->prepare('SELECT * FROM acteur');

        // Execution de la requete 
        if ($sql->execute()) {
            // Recuperation des resultats
            $rows = $sql->fetchAll();
            return $rows;
        } else {
            // Gestion d'une erreur d'execution
            echo 'Erreur d\'exécution de la requête'; // Ajout du message de débogage
            return false;
        }
    } catch (PDOException $e) {
        // Gestion d'une exception PDO (erreur de preparation, etc...)
        echo 'Erreur de BDD : ' . $e->getMessage();
    }
}

function unActeur($id) {
    require ('connect.php');

    try {
        $sql = $pdo -> prepare ("SELECT * FROM acteur WHERE Id_acteur = ?");
        if ($sql -> execute ([$id])) {
            $row = $sql -> fetch();
            return $row;
        } else {
            echo "Erreur d'exécution de la requête";
        }
    } catch(PDOException $e){
        echo 'Erreur de BDD : ' . $e -> getMessage();
    }
}

function acteur($id) {
    require ('connect.php');

    try {
        $sql = $pdo -> prepare ("SELECT * FROM acteur
                                INNER JOIN joue ON joue.Id_acteur = acteur.Id_acteur
                                WHERE joue.Id_film = ?");
        if ($sql -> execute ([$id])) {
            $row = $sql -> fetchAll ();
            return $row;
        } else {
            echo "Erreur d'exécution de la requête";
        }
    } catch (PDOException $e) {
        echo "Erreur de BDD : " . $e -> getMessage();
    }
}

function creActeur ($elts) {
    require ('connect.php');

    try {
        $nom    = $elts['nom'];
        $prenom = $elts['prenom'];
        $photo  = $elts['photo'];

        $sql = $pdo -> prepare ("INSERT INTO acteur (nom, prenom, photo)
                                VALUES (?, ?, ?)");
        if ($sql -> execute ([$nom, $prenom, $photo])) {
            header("location:".BASE."acteur/liste");
        } else {
            echo "Erreur d'exécution de la requête";
        }
    } catch (PDOException $e) {
        echo "Erreur de BDD : " . $e -> getMessage();
    }
}

function updActeur ($elts) {
    require ('connect.php');

    try {
        $nom    = $elts['nom'];
        $prenom = $elts['prenom'];
        $photo  = $elts['photo'];
        $id     = $elts['id'];

        $sql = $pdo -> prepare ("UPDATE acteur set nom = ?, prenom = ?, photo = ? WHERE Id_acteur = ?");
        if ($sql -> execute ([$nom, $prenom, $photo, $id])) {
            header("location:".BASE."acteur/liste");
        } else {
            echo "Erreur d'exécution de la requête";
        }
    } catch (PDOException $e) {
        echo "Erreur de BDD : " . $e -> getMessage();
    }
}

function delActeur ($id) {
    require ('connect.php');

    try {
        $sql = $pdo -> prepare ("DELETE FROM acteur WHERE Id_acteur=?");
        if ($sql -> execute ([$id])) {
            header("location:".BASE."acteur/liste");
        } else {
            echo "Erreur d'exécution de la requête.";
        }
    } catch (PDOException $e) {
        echo "Erreur de BDD : " . $e -> getMessage();
    }
}