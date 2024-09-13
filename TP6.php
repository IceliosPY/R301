<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['Nombre1_saisi']) && !empty($_POST['Nombre2_saisi'])) {
        $nombre1 = floatval($_POST['Nombre1_saisi']);
        $nombre2 = floatval($_POST['Nombre2_saisi']);
        $operation = $_POST['operation'];
        $resultat = '';
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
    } else {
        $resultat = "Erreur : Veuillez saisir les deux nombres.";
    }
} else {
    $resultat = "";
}
?>

<form action="TP6.php" method="post">
    Nombre 1 : <input type="number" name="Nombre1_saisi" value="<?php if (isset($_POST['Nombre1_saisi'])) echo $_POST['Nombre1_saisi']; ?>"><br />
    Nombre 2 : <input type="number" name="Nombre2_saisi" value="<?php if (isset($_POST['Nombre2_saisi'])) echo $_POST['Nombre2_saisi']; ?>"><br />
    Résultat : <input type="text" name="Resultat_saisi" value="<?php if (isset($resultat)) echo $resultat; ?>" readonly><br />
    <br>
    Opération :
    <input type="submit" name="operation" value="Soustraire">
    <input type="submit" name="operation" value="Additionner">
    <input type="submit" name="operation" value="Multiplier">
    <input type="submit" name="operation" value="Diviser">
</form>