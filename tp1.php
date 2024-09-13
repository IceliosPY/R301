<?php
// Exercice 1

$age = 25; // Remplacez 25 par votre âge réel

// a) En utilisant la concaténation des chaînes de caractères
echo 'J\'ai ' . $age . ' ans' . "\n";

// b) À l’aide de la seule fonction echo
echo "J'ai $age ans\n";

// Exercice 2

$chaine1 = "Bonjour";
$chaine2 = "Bonjour";

// a) En comparant les deux chaînes à l’aide de l’opérateur ==
if ($chaine1 == $chaine2) {
    echo "Les deux chaînes sont identiques avec ==.\n";
} else {
    echo "Les deux chaînes sont différentes avec ==.\n";
}

// b) En comparant les deux chaînes à l’aide de la fonction strcmp
if (strcmp($chaine1, $chaine2) == 0) {
    echo "Les deux chaînes sont identiques avec strcmp.\n";
} else {
    echo "Les deux chaînes sont différentes avec strcmp.\n";
}

// Vérification de quand une chaîne est considérée comme plus petite qu'une autre
$chaine1 = "Apple";
$chaine2 = "Banana";

$resultat = strcmp($chaine1, $chaine2);
if ($resultat < 0) {
    echo "\"$chaine1\" est considérée comme plus petite que \"$chaine2\" avec strcmp.\n";
} elseif ($resultat > 0) {
    echo "\"$chaine1\" est considérée comme plus grande que \"$chaine2\" avec strcmp.\n";
} else {
    echo "\"$chaine1\" et \"$chaine2\" sont identiques avec strcmp.\n";
}

// Vérification si "bonjour" et "Bonjour" sont considérées comme identiques
$chaine1 = "bonjour";
$chaine2 = "Bonjour";

if (strcmp($chaine1, $chaine2) == 0) {
    echo "\"$chaine1\" et \"$chaine2\" sont identiques avec strcmp.\n";
} else {
    echo "\"$chaine1\" et \"$chaine2\" sont différentes avec strcmp.\n";
}

// Pour comparaison insensible à la casse
if (strcasecmp($chaine1, $chaine2) == 0) {
    echo "\"$chaine1\" et \"$chaine2\" sont identiques avec strcasecmp (insensible à la casse).\n";
} else {
    echo "\"$chaine1\" et \"$chaine2\" sont différentes avec strcasecmp (insensible à la casse).\n";
}
?>