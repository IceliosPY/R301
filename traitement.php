<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['nom_saisi']) && !empty($_POST['age_saisi'])) {
        $nom = $_POST['nom_saisi'];
        $age = intval($_POST['age_saisi']);

        echo "<h1>Bonjour $nom, vous avez $age ans !</h1>";
    } else {
        echo "<h1>Veuillez remplir tous les champs du formulaire.</h1>";
    }
} else {
    echo "<h1>Formulaire non soumis correctement.</h1>";
}
?>