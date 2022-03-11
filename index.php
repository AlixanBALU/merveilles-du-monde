<?php
include('include/twig.php');
$twig = init_twig();
$page = basename(__FILE__);   //On recupere le nom de la page pour pouvoir executer le programme

include('include/data_annexe.php');

#Les varaibles active permettent d'explixiter clairement à l'utilisateur sur quelle page il se trouve
echo $twig->render('modele0-menu.twig',[
    'lang' => 'fr',
    'css' => './css/menu.css',
    'titre' => 'Les Merveilles du Monde',
    'lien_lang' => langue_alternative($page),
    'active0' => 'class=active',
    'index' => $index,
    'table' => $aside_table
]);
?>