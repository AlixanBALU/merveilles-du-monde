<?php
require_once('vendor/autoload.php');

// Fonction qui permet d'initialiser Twig en fixant le dossier des modèles
function init_twig()
{
    // Indique le répertoire ou sont placés les modèles (templates)
    $loader = new \Twig\Loader\FilesystemLoader('templates');

    // Crée un nouveau moteur Twig
    $twig = new \Twig\Environment($loader, ['debug' => true]);
    $twig->addExtension(new \Twig\Extension\DebugExtension());

    // Renvoie le moteur
    return $twig;
}

#Algorythme qui permet de generer automatiquement le lien vers la bonne page en fonction de la langue sur laquelle nous somme.
function langue_alternative($page) {
    $last3 = '';
    $lien_final = '';
    for ($i = 1; $i <= 8; $i++) {
        $last3 = $last3.$page[strlen($page)-$i];
    }
    $last3 = strrev($last3);  //On remet dans le bon sens la chaine str

    if ($last3 == '_eng.php') { //Si cette condition passe, alors le fichier fini par' _eng.php'
        for ($i = 0; $i <= (strlen($page)-9); $i++) {
            $lien_final = $lien_final.$page[$i];    //On ne prend que le lien sans le "_eng.php"
        }
        $lien_final = $lien_final.'.php';    //On ajoute l'extension ".php"
        return $lien_final;
    }

    else {
        for ($i = 0; $i <= (strlen($page)-5); $i++) {
            $lien_final = $lien_final.$page[$i];    //On ne prend que le lien sans le "_eng.php"
        }
        $lien_final = $lien_final.'_eng.php';
        return $lien_final; 
    }
}

?>


