<?php

//mot à deviner est stocké dans un tableau, en dur dans le code
$mot = "porc";

//j'initialise une variable temporaire pour remplacer les lettres par les tirés
$motcache = "";

//dans la boucle je remplace chaque lettre de chaine de caracteres par le tiré et les stock dans la variable initialisée précedemment
for($i=0; $i<strlen($mot); $i++){
    $motcache .= "_" ;
}
//j'annonce a l'utilisateur le jeu 
echo "Devinez le mot caché :\n";
echo nl2br("\n");
//j'affiche le mot caché (les tirés)
echo $motcache;
echo nl2br("\n");
echo nl2br("\n");

//j'initialise le compteur de tentatives à 10
$compteur = 10;
//j'initialise une nouvelle variable de type boolean pour afficher les resultats et activer le compteur par la suite 
$lettreDevinee = false;

while($motcache !== $mot && $compteur > 0){
    //je demande de saisir une lettre et je la stock dans une variable
    $lettre = readline("Saisissez une lettre en miniscule. Vous avez $compteur tentative(s) : ");
    //j'affiche la lettre
    echo "Votre lettre : $lettre";
    echo nl2br("\n"); 

    //si la lettre est devinée, je la montre a la place de tiré et à sa position dans le mot
    for($i=0; $i<strlen($mot); $i++){
        //si la lettre existe dans le mot
        if($mot[$i] === $lettre){
            //le tiré(reperé par son index) sera remplacé par cette lettre 
            $motcache[$i] = $mot[$i];
            /*j'utilise la variable boolean pour avoir la main sur le cas où la lettre a été trouvée 
            (elle prend la valeur differente donc "vrai" */
            $lettreDevinee = true;
        }
    }

    //si la lettre ne correspond pas a une des lettre du mot
    if(!$lettreDevinee){
        //j'affiche ce message
        echo "Hélas, cette lettre n'est pas dans le mot. ";
        //et j'active le compteur qui va decrémenter une tentative
        $compteur --;
    //sinon j'affiche à l'utilisateur qu'il a deviné une lettre
    } else {
        echo "pas mal, vous avez trouvé une lettre : ";
    }

    /* la fin du jeu : soit l'utilisateur a deviné le mot en 10 tentatives et il a gagné;
    soit il n'a plus de vies (le compteur est arrivé au zéro) et alors - perdu
    */
    if($compteur === 0){
        echo "Vous n'avez plus de vies, enfilez la corde";
        //si le mot est egal au mot caché
    } elseif ($mot === $motcache){
        //j'affiche le mot et j'affiche le messages
        echo $motcache;
        echo nl2br("\n");
        echo "Et bravo, vous ne serez pas pendu ";
        echo "...aujourd'hui";
        break;
    }

    echo $motcache;
    echo nl2br("\n");
}

