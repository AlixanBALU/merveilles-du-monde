<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Thanks !</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="images/done.svg">
    <link rel="stylesheet" href="css/reception.css" />
</head>
<body>

    <img class="svg" src="images/done.svg" alt="" />
    <p class="thanks" >Thank you for your reply</p>
    
    <a href="index.php">
        <div class="home">
            Home
        </div>
    </a>
    <div class="divmore">
        <p class="more">I want to see my transmitted data</p>
        <img class="img_more" src="images/deroulant.svg" alt="more" /> 
    </div>
    <div class="hide">
    <?php
        $i = 1;
        date_default_timezone_set('Europe/Paris');
        foreach ($_POST as $key => $value) {
            print("<div class='niv3'><b>$i.</b> $value</div>");
            $i += 1;
        }
            $retour_ligne = '
            ';
            $date = 'Date : '.date('l jS \of F Y h:i:s A').$retour_ligne;
            $changement_comm = '-------------------------------'.$retour_ligne;
            $init = 'Nouveau commentaire : '.$retour_ligne;
            if (isset($_POST['comments'])) {
                $comm = '[FR] Commentaire : '.$_POST['comments'].$retour_ligne;
            }
            $file = 'data_reception.txt';
            $age = 'Age :'.$_POST['age'].$retour_ligne;
            $statut = 'Statut : '.$_POST['statut'].$retour_ligne;
            $nom = 'Nom : '.$_POST['name'].$retour_ligne;
            $texte = array( 'retour_ligne' => $retour_ligne, 'init' => $init, 'date' => $date, 'age' => $age, 'statut' => $statut, 'nom' => $nom, 'comm' => $comm, 'changement_comm' => $changement_comm, 'retour_ligne' => $retour_ligne );
        
            foreach ($texte as $key => $val) {
                file_put_contents($file, $val, FILE_APPEND | LOCK_EX);
            }
            // afficher le résultat
            exit;
    ?>
    </div>
</body>
</html>