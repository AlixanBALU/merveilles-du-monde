<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();
$page = basename(__FILE__);   //On recupere le nom de la page pour pouvoir executer le programme

include('include/data_afrique.php');

echo $twig->render('modele1-afrique.twig',[
    'lang' => 'en',
    'css' => './css/afrique.css',
    'titre' => 'The Danakil Desert',
    'lien_lang' => langue_alternative($page),
    'active1' => 'class=active',
    'active1_li1' => 'class=active_li',
    'afrique' => $danakil,
    'table' => $aside_table
]);

?>