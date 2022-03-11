<?php
include('include/twig.php');
$twig = init_twig();
$page = basename(__FILE__);   //On recupere le nom de la page pour pouvoir executer le programme

include('include/data_annexe.php');

#Les varaibles active permettent d'explixiter clairement à l'utilisateur sur quelle page il se trouve
#Bien heureusement communisé par Enzo BRUNIER
echo $twig->render('modele4-contact.twig',[
    'lang' => 'fr',
    'css' => './css/contact.css',
    'titre' => 'Les Merveilles du Monde',
    'lien_lang' => langue_alternative($page),
    'active4' => 'class=active',
    'contact' => $contact,
    'table' => $aside_table
]);

?>
