<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre1 = '';
    $nombre2 = '';
    $resultat = '';

    if (!empty($_POST['Nombre1_saisi']) && !empty($_POST['Nombre2_saisi'])) {
        $nombre1 = floatval($_POST['Nombre1_saisi']);
        $nombre2 = floatval($_POST['Nombre2_saisi']);
        $operation = $_POST['operation'];

        switch ($operation) {
            case "Additionner":
                $resultat = $nombre1 + $nombre2;
                break;
            case "Soustraire":
                $resultat = $nombre1 - $nombre2;
                break;
            case "Multiplier":
                $resultat = $nombre1 * $nombre2;
                break;
            case "Diviser":
                if ($nombre2 != 0) {
                    $resultat = $nombre1 / $nombre2;
                } else {
                    $resultat = "Erreur : Division par zéro";
                }
                break;
        }

        if (is_numeric($resultat)) {
            $nombre1 = '';
            $nombre2 = '';
        } else {
        }
    } else {
        $resultat = "Erreur : Veuillez saisir les deux nombres.";
    }
} else {
    $nombre1 = '';
    $nombre2 = '';
    $resultat = '';
}
?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>
    <script>
        function copierResultat() {
            var resultat = document.getElementById('Resultat_saisi').value;

            // Vérifier si le champ Résultat n'est pas vide
            if (resultat === '') {
                alert('Aucun résultat à copier.');
                return;
            }

            // Copier le texte dans le presse-papiers
            var tempTextarea = document.createElement('textarea');
            tempTextarea.value = resultat;
            document.body.appendChild(tempTextarea);
            tempTextarea.select();
            tempTextarea.setSelectionRange(0, 99999); // Pour les appareils mobiles

            try {
                var successful = document.execCommand('copy');
                if (successful) {
                    alert('Résultat copié : ' + resultat);
                    // Vider le champ Résultat après la copie
                    document.getElementById('Resultat_saisi').value = '';
                } else {
                    alert('Échec de la copie du résultat.');
                }
            } catch (err) {
                alert('Erreur lors de la copie du résultat : ' + err);
            }

            // Supprimer le textarea temporaire
            document.body.removeChild(tempTextarea);
        }
    </script>
</head>
<body>
    <form action="TP6_2.php" method="post">
        Nombre 1 : <input type="number" name="Nombre1_saisi" value="<?php echo htmlspecialchars($nombre1); ?>"><br />
        Nombre 2 : <input type="number" name="Nombre2_saisi" value="<?php echo htmlspecialchars($nombre2); ?>"><br />
        Résultat : <input type="text" id="Resultat_saisi" name="Resultat_saisi" value="<?php echo htmlspecialchars($resultat); ?>" readonly>
        <button type="button" onclick="copierResultat()">Copier</button><br />
        <br>
        Opération :
        <input type="submit" name="operation" value="Soustraire">
        <input type="submit" name="operation" value="Additionner">
        <input type="submit" name="operation" value="Multiplier">
        <input type="submit" name="operation" value="Diviser">
    </form>
</body>
</html>


