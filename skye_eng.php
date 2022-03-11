<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();
$page = basename(__FILE__);   //On recupere le nom de la page pour pouvoir executer le programme

include('include/data_europe.php');

echo $twig->render('modele3-europe.twig',[
    'lang' => 'en',
    'css' => './css/europe.css',
    'titre' => 'The Isle of Skye',
    'lien_lang' => langue_alternative($page),
    'active3' => 'class=active',
    'active3_li3' => 'class=active_li',
    'europe' => $skye
]);

?>