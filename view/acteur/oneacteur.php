<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Un Acteur</title>
</head>
<body>
    <h1>
        Profil Acteur
    </h1>
    <a href="<?=BASE?>acteur/liste">Retour</a>

    <div id="container">
        <div class="acteur">
            <h3>
                <?= $acteur['nom'] ?> <?= $acteur['prenom'] ?>
            </h3>
            <img src="../../img/acteur/<?= $acteur['photo']?>" style="width: 35rem">
        </div>
        <a href="<?=BASE?>acteur/update/<?=$acteur['Id_acteur']?>">Modifier</a>
        <a href="<?=BASE?>acteur/delete/<?=$acteur['Id_acteur']?>">Supprimer</a>
    </div>
</body>
</html>