<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Acteurs</title>
</head>
<body>
    <h1>
        Liste des Acteurs
    </h1>
    <a href="<?=BASE?>acteur/inscription">Inscription</a>

    <div id="container">
        <?php foreach ($acteurs as $acteur) {?>
            <div class="acteur">
                <h3>
                    <?= $acteur['nom']?> <?= $acteur['prenom']?>
                </h3>
                <a href="<?=BASE?>acteur/un/<?= $acteur['Id_acteur']?>">
                    <img src="../img/acteur/<?= $acteur['photo']?>" style="width: 30rem;">
                </a>
            </div><br>
        <?php } ?>
    </div>
</body>
</html>