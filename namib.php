<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();
$page = basename(__FILE__);   //On recupere le nom de la page pour pouvoir executer le programme

include('include/data_afrique.php');

echo $twig->render('modele1-afrique.twig',[
    'lang' => 'fr',
    'css' => './css/afrique.css',
    'titre' => 'Le Désert du Namib',
    'lien_lang' => langue_alternative($page),
    'active1' => 'class=active',
    'active1_li5' => 'class=active_li',
    'afrique' => $namib,
    'table' => $aside_table
]);

?>