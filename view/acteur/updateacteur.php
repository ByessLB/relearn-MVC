<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <h1>
        formulaire
    </h1>
    <a href="<?=BASE?>acteur/liste">Retour</a>

    <div id="formulaire">
        <form action="<?=BASE?>acteur/modify" method="post">
            <div class="element">
                <label for="nom"> Nom </label>
                <input type="text" name="nom" id="nom" value="<?=$elts['nom']?>" required>
            </div>
            <div class="element">
                <label for="prenom"> Prenom </label>
                <input type="text" name="prenom" id="prenom" value="<?=$elts['prenom']?>" required>
            </div>
            <div class="element">
                <label for="photo"> Photo </label>
                <input type="text" name="photo" id="photo" value="<?=$elts['photo']?>" required>
            </div>
            <input type="hidden" name="id" value="<?=$elts['Id_acteur']?>">
            <button type="submit">Modifier</button>
        </form>
    </div>
</body>
</html>