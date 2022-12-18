<?php

//je demande utilisateur de rentrer un mot
echo "Saisissez un mot : ";

//je le stock dans la variable mot
$mot = readline();

// je parcours la chaine de caracteres par chaque index pour lire chaque lettre du mot
for($i=0; $i<strlen($mot); $i++) {
    //Je stock le resultat dans un tableau, le mot est fractionné en lettres
    $tab[$i] = $mot[$i];
    //Verifiacation que le resultat attendu est bien des lettres (separées par vergule)
    var_dump($tab);
}

//je demande utilisateur de rentrer une lettre
echo "Maintenant une lettre : ";

//je le stock dans la variable lettre
$lettre = readline();

/* pour pouvoir compter le nombre de fois que la lettre est présente dans le mot, j'initialise un compteur
Je parcours tous les élements du tableau(ses élements sont des lettres une par une)
Si la lettre du mot est égale à la lettre saisie, j'active le compteur qui va incrementer +1,
il va le faire à chaque tour du boucle s'il retrouve les mêmes lettres par la suite */

$compteur = 0;
for ($i=0; $i<count($tab); $i++){
    if($tab[$i] == $lettre)
    { 
        $compteur++;
    }
}

//si le compteur est resté sur 0 c'est que le mot ne contient pas de lettre saisie par ulilisateur
if($compteur == 0){
    //alors je l'affiche dans le message
    echo "pas de lettre $lettre dans le mot";
    //sinon j'affiche le nombre de fois que le compteur rencontre la lettre saisie dans les tours du boucle
} else {
    echo "la lettre '$lettre' est trouvée dans le mot '$mot' '$compteur' de fois ";
}



