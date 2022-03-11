<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();
$page = basename(__FILE__);   //On recupere le nom de la page pour pouvoir executer le programme

include('include/data_asie.php');

echo $twig->render('modele2-asie.twig',[
    'lang' => 'en',
    'css' => './css/asie.css',
    'titre' => 'The Chinese wall',
    'lien_lang' => langue_alternative($page),
    'active2' => 'class=active',
    'active2_li2' => 'class=active_li',
    'asie' => $muraille,
    'table' => $aside_table
]);

?>