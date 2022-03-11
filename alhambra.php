<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();
$page = basename(__FILE__);   //On recupere le nom de la page pour pouvoir executer le programme

include('include/data_europe.php');

echo $twig->render('modele3-europe.twig',[
    'lang' => 'fr',
    'css' => './css/europe.css',
    'titre' => 'L\'Alhambra Grenade',
    'lien_lang' => langue_alternative($page),
    'active3' => 'class=active',
    'active3_li1' => 'class=active_li', 
    'europe' => $alhambra,
    'table' => $aside_table 
]);

?>