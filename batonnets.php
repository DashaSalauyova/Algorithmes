<?php

/** le nombre de battonets est 20,
 * chaque joueur peut prendre entre 1 et 3 batonnets à la fois
 * Le but de jeu c'est de prendre le dernier batonnet
 * L'utilisateur commence le jeu
 * 
 * la strategie de l'algorithme est de sectionner les parties par 4.
 * Ce nombre 4 est basé sur la quantité de batonnets de depart.
 * Chaque fois quand l'utilisateur prend un certain nombre de batonnets, 
 * l'ordinateur complete le compte afin que la somme du tour joué soit 4.
 * 
 * La derniere partie doit etre 4 batonnets. Dans ce vas de figure, l'utlisateur soit perdant toujours.
 * Il commence (1 contre 3, ou 2 contre 2, ou 3 contre 1) - dans tous les cas le dernier joueur (l'ordi)
 * recupere les batonnets restants et gagne.
 * 
*/

//j'initialise le nombre de batonnets de depart.ce nombre va definir l'algorithme que je mettrai en place
$start = 20;

//utilisateur joue 
echo "Salut. C'est toi qui commence, combien tu prends ? ";

//dans la fonction un tour est joué. 
function turn($start) {
    $result = 0;
    //j'utilise la fonction readline pour executer le code via le terminal
    //je stock le nombre rentré par utilisateur dans la variable $response
    $response = readline();
    //si l'utilisateur prend 1 batonnet, alors l'ordinateur en prend 3
    if($response == 1){
        //je soustrais le nombre pris par utilisateur
        $result = ($start - 1);
        //j'affiche le nombre restant après le tour d'utilisateur
        echo "tu as pris $response batonnet(s). Il reste $result"; 
        echo readline();
        echo "ok, maintenant c'est moi: 3 ! ";
        echo readline();
        //je soustrais les batonnets pris par ordinateur
        $result = ($start - 1) - 3;
        //j'affiche la somme restante après le tour d'ordinateur
        echo "... il reste " . $result;
        echo readline();
    }
    //si l'utilisateur prend 2 batonnets, alors l'ordinateur en prend 2
    elseif($response == 2){
        $result = $start - 2;
        //j'affiche la somme restante après le tour d'utilisateur
        echo "tu as pris $response batonnet(s). Il reste $result";
        echo readline();
        echo "j'égalise le compte : 2! ";
        echo readline();
        $result = ($start - 2) - 2;
        //j'affiche la somme restante après le tour d'ordinateur
        echo "... il reste " . $result;
        echo readline(); 
    }
    //si l'utilisateur prend 3 batonnets, alors l'ordinateur en prend 3
    elseif($response == 3){
        //je calcule la quantité restante apres le tour d'utilisateur
        $result = $start - 3;
        echo "vous avez pris $response batonnets. Il reste $result";
        echo readline();
        echo "daccord, j'en prends 1 ";
        echo readline();
        //j'affiche la somme restante après le tour d'utilisateur
        $result = ($start - 3) - 1;
        //j'affiche le reste
        echo "... il reste " . $result;
        echo readline();
    }
    return $result;
}

//J'inscrits un nouveau resultat dans la variablre $start
$start = turn($start);

do { 
    //utilisateur commence le tour
    echo "on continu, vas-y c'est toujours à toi ! ";
    //je lance la fonction
    $start = turn($start);
    //tant que le nombre de batonnets est surperieur à 4, relancer le jeu(appele ma fonction)
} while($start > 4);

//si le nombre de batonnets est égale ou inferieur à 4, alors 
if($start <= 4)
{
    echo "A toi ? ";
    //utilisateur joue, je stock sa "reponse" dans la variable
    $response = readline();
    //je soustrais le nombre de batonnets retiré par utilisateur de la totalité
    $result = $start - $response;
    echo "tu as pris $response il reste $result ";
    echo readline(); 
    //l'ordi joue son tour. j'affiche le nombre restant et je prends ce nombre quelque soit il
    //(dans tous les cas il ne sera pas plus grand que 3, et donc il restera 0)
    echo "très bien, je prends le reste : $result ";
    echo readline(); 
    //je soustrait le nombre restant de la totaité de batonnets
    // $result = ($start -1) - 3;
    $result = ($start - $response) - $result;
    //comme il reste 0 batonnets, et que c'est l'ordi qui a joué en dernier, j'affiche que c'est moi qui a gagné
    echo "Il reste $result batonnets, qui a gagné ? Moi =)";
    echo readline(); 
}
    