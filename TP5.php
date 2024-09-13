<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['nom_saisi']) && !empty($_POST['age_saisi'])) {
       
        $nom = htmlspecialchars(trim($_POST['nom_saisi']));
        $age = intval($_POST['age_saisi']);
       
        echo "<h1>Bonjour $nom, vous avez $age ans !</h1>";
    } else {
        echo "<h1>Veuillez remplir tous les champs du formulaire.</h1>";
    }
} else {
    
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire Nom et Âge</title>
    </head>
    <body>
        <form action="" method="post">
            Nom : <input type="text" name="nom_saisi"><br />
            Âge : <input type="text" name="age_saisi"><br />
            <input type="submit" value="OK">
            <input type="reset" value="Annuler">
        </form>
    </body>
    </html>
    <?php
}
?>