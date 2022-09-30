<?php
$identite = [
    'nom' => 'MINKA',
    'prenom' => 'Jean',
    'notes' => [12, 14, 07, 10]

];
$identite['prenom'] = 'John'; // on a changé directement le prénom ou de manière globale, la valeur contenur dans la variable prenom
$identite['notes'][] = 17; // on ajoute une nouvelle note au tableau contenant les notes
print_r ($identite['notes']); // on utilie print_r pour afficher tout le contenu d'un tableau

?>