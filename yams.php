<?php

readline ("Bonjour, on va jouer. Lance les dés ! (appuie sur 'Enter' pour le terminal)") ;
//un dés lancé présente un nombre alléatoire de 1 à 6
$cube = rand(1,6);

//j'initialise un tableau pour enregistrer les resultats de tous les dés lancés
$cubes = [];

//j'affiche tous les dés
echo "Vos dés :";
echo "\n"; 
for ($i = 0; $i < 5; $i++) {
    $cube = rand(1, 6);
    echo $cube . "\n";
    //j'envoie le resultat de chaque dé dans le tableau au-dessus
    array_push($cubes, $cube);
}
//j'affiche le resultat de tableau, si je décommente
//print_r($cubes);

/*je crée un compteur sous forme d'un tableau associatif
qui va calculer le nombre de fois que la même valeur du dé(les points de 1 à 6) à été lancé lors d'un tour joué
Au depart le compteur de valeurs est à zéro.
*/
$compteur = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0];
//j'inscrits les resultats de chaque dé à chaque tour du boucle
foreach($cubes as $cube){
    //le compteur incremente ses élements de 1 0 6
    $compteur[$cube]++;
}
//j'affiche les données du compteur
print_r($compteur);

//je boucle les resultats de dés (le nombre de dés avec la même valeur)
foreach ($compteur as $value => $result) {
    // var_dump($result);
    //si les dés ayant la même valeur (même nombre de points) est égal à 5
    if ($result == 5) {
        //j'affiche ce message
        echo "Yam's !!!";
    }
}
//si le nombre de mêmes dés n'est pas égal à 5(ce qui sera le cas toujours)
if ($result != 5){
    //j'affiche ce message
   echo "Tu pourrais faire mieux, he-he";
}