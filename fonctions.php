<?php
/*$mot = readline ("Entrez votre mot: ");
//$min_mot = strtolower ($mot); // strtolower permet de convertir en miniscule une chaine de caractères
$inverse = strtolower (strrev ($mot)); //strrev est une fonction qui permet d'inverser un string
if (strtolower($mot) === $inverse) {
    echo "Votre mot est un palindrome";
} else {
    echo "Votre mot n'est pas un palindrome";
}*/
$notes = [14, 15, 05];
$somme = array_sum ($notes); //faire la somme des éléments d'un tableau
$count = count ($notes); //compter les éléments d'un tableau
$moyenne = round($somme/$count, 2); //le round permet d'arrondir un résultat et on peut ajouter le nombre de virgule souhaité comme fait ici avec le 2
echo "Vous avez $moyenne de moyenne";
//var_dump($moyenne)
?>