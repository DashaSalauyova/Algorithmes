<?php
 
// j'inscrits les notes dans le tableau 
$listeVrac = [3, 18, 5, 2, 9];

//je declare une variable pour stocker la plus petite valeur du tableau et je l'instincie sur le premier element
$plusPetiteValeur = $listeVrac[0];

// dans le boucle for je vais parcourir toutes les notes
for($i=0; $i<count($listeVrac); $i++) {
    //chaque valeur sera comparée avec la valeur suivante et si elle est plus grande
    if($plusPetiteValeur > $listeVrac[$i]){
        //alors la valeur plus petite la remplacera et sera stockée dans la variable $plusPetiteValeur
        $plusPetiteValeur = $listeVrac[$i];
    }
}

//j'affiche la plus petite valeur
echo $plusPetiteValeur;
echo "\n";

$plusGrandeValeur = $listeVrac[0];

for($j=0; $j<count($listeVrac); $j++){
    if($plusGrandeValeur < $listeVrac[$j]){
        $plusGrandeValeur = $listeVrac[$j];
    }
}
echo $plusGrandeValeur;