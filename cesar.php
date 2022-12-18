<?php

////je demande utilisateur de rentrer un mot et je le stock dans la variable saisie
$saisie = readline("Saisissez votre texte, il sera entre les bonnes mains : ");

// je parcours le tableau par chaque index pour lire chaque lettre du mot
//strlen pour un element de type string
for($i=0; $i<strlen($saisie); $i++) {
    //Je stock le resultat dans un tableau, le mot fractionné par lettre
    $lettreParLettre = $saisie[$i];
    //Verifiacation que le resultat attendu est bien des lettres (separées par vergule)
    var_dump($saisie[$i]);
}

//alphabet français 26 lettres
$alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];

//chiffrer l'alphabet, en rajoutant 2 positions
// for ($i = 0; $i < count($alphabet); $i++) {
//     /* modulo 26 correspond au nombre de lettres dans l'alphabet;
//     permet d'incrementer la position pour les lettres a partir de la 24me */ 
//     $alphabetChiffré = $alphabet[($i+2)%26];
//     // var_dump($alphabetChiffré);
// }

/* je renomme ma variable pour distinguer le mot que je vais manipuler dans le code et que je vais chiffrer
de la saisie utilisateur */
$mot = $saisie;

echo "Nous avons bien pris en compte votre message : ";


function crypte($mot) {
//j'applique le chiffrement César sur le mot. Pour chaque lettre de mot...
    $motFinal = "";
    //Hello
    for($i=0; $i<strlen($mot); $i++) {
        //parcourir l'alphabet...
        $alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        for ($j = 0; $j < count($alphabet); $j++) {
            //Pour trouver chaque lettre de mot : si la lettre du mot est egale à la lettre de l'alphabet...
            if ($mot[$i] == $alphabet[$j]) {
                //je lui rajoute 2 positions 
                $motFinal .= $alphabet[($j+2)%26];
                //j'affiche le mot chiffré; je sors le texte de ma phrase en dehors de ma fonction
            }
            
        }
    }

    return $motFinal;
}

$motCrypte = crypte($mot);
echo $motCrypte . " (chiffré). ";

//Déchiffrer le mot 
function decrypte($motChiffre){
    $motFinal = "";
for($i=0; $i<strlen($motChiffre); $i++) {
        //parcourir l'alphabet...
        $alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        for ($j = 0; $j < count($alphabet); $j++) {
            //Pour trouver chaque lettre de mot : si la lettre du mot est egale à la lettre de l'alphabet...
            if ($motChiffre[$i] == $alphabet[$j]) {
                //je lui soustrait 2 positions 
                $motFinal .= $alphabet[($j-2)%26]; 
            }
        }
    }
    return $motFinal;
}

$motDechiffre = decrypte($motCrypte);
echo "Le mot d'origine dechiffré par nos soins est $motDechiffre";