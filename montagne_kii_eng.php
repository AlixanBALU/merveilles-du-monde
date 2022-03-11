<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();
$page = basename(__FILE__);   //On recupere le nom de la page pour pouvoir executer le programme

include('include/data_asie.php');

echo $twig->render('modele2-asie.twig',[
    'lang' => 'en',
    'css' => './css/asie.css',
    'titre' => 'The Kii Mountains',
    'lien_lang' => langue_alternative($page),
    'active2' => 'class=active',
    'active2_li1' => 'class=active_li',
    'asie' => $kii,
    'table' => $aside_table
]);

?>