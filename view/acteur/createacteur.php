<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>
        Inscription
    </h1>
    <a href="<?=BASE?>acteur/liste">Retour</a>

    <div id="formilaire">
        <form action="<?=BASE?>acteur/create" method="post">
            <div class="element">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="element">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="element">
                <label for="photo">Photo</label>
                <input type="text" name="photo" id="photo" required>
            </div>
            <input type="submit" value="Inscription">
        </form>
    </div>
</body>
</html>