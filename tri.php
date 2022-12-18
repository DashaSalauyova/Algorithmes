<?php

//variable qui contient toutes les notes dans un tableau
$notes = [3, 1, 5, 2, 4];

//fonction va inervertir les deux valeur sur deux si la valeur suivante est plus petite, la mettre à gauche
function intervertion($notes){
    //parcourir le tableau
    for($i=0; $i<4; $i++){
        //si la valeur d'après est plus petite que la valeur d'avant, je vais la deplacer a gauche
        if($notes[$i+1] <= $notes[$i] ){
            //je declare une variable temporaire juste avant pour qu'elle ne soit pas écrasée
            $tempStock = $notes[$i];
            //ensuite j'echange de la place, valeur plus petite se place a gauche
            $notes[$i] = $notes[$i+1];
            //par consequent la valeur de l'indice suivant va recuperer la valeur de la variable $tempsStock
            $notes[$i+1] = $tempStock;
        }
    }
    // renvoie le tableau a jour
    return $notes;
}

/**j'utilise le deuxieme boucle for pour faire un traitement du tableau à jour
 * afin d'intervertir les notes qui ne sont pas à leurs places et trier le tableau
 **/
for($i=0;$i<5;$i++){
    //je passe la fonction dans la variable $notes pour qu'elle ne prend pas les valeurs par defaut (tableau initial)
    $notes = intervertion($notes);
    echo "tableau ".$i." : ".$notes[$i]."<br>";

}


