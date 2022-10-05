<?php
$notes = [11, 13, 15];
$eleves = [
    'Tle' => ['Yann', 'Chris', 'Claire'],
    'CM2' => ['Sou', 'Grace', 'Boris']
];

    foreach($eleves as $classe => $liste_eleves) {
        echo "-La classe $classe \n";
        foreach($liste_eleves as $eleve) {
            echo " $eleve";
        }
        echo "\n";
    }





/*UTILISATION DE LA BOUCLE FOR 
for ($i = 0; $i<10; $i++) {
    echo "-$i \n";
}*/


/*UTILISATION PRATIQUE DE LA BOUCLE WHILE (TANT QUE)
$chiffre = null;
while ($chiffre !== 10) {
    $chiffre = (int)readline("Entrez une valeur : ");
}
echo "Bien trouvé";*/
?>