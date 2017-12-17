
<?php
// Import
//require('../Modele/UsersManager.php');
//require('../Modele/ConnectionManager.php');
//require('../Modele/CovoiturageManager.php');

// Init
//$db = new PDO('mysql:host=localhost;dbname=nuit;charset=utf8', 'dbuser', 'np');
//$connectionManager = new ConnectionManager($db);
//$userManager=new UsersManager($db);
//$covoitManager=new CovoiturageManager($db);

// Start session and check connection
//$connectionManager->startSession();

//if($connectionManager->isConnected() ){
//    $user = $connectionManager->getUser();
//}
//$connectionManager->register("pppppa@gmail.com","M","1992-08-07","Benhlal","Adil","passq");
// add covoiturage bdd
/*$covoit = new Covoiturage(array(
    'lieuDepart' =>$_POST['lieuDepart'],
    'lieuArrivee' =>$_POST['lieuArrivee'],
    'dateDepart' =>$_POST['dateDepart'],
    'nom'=> $_POST['nom'],
    'telephone' =>$_POST['telephone']
));*/


//$user = $connectionManager->register("papa@gmail.com","M","1992-08-07",$_POST['nom'],"Moi","pass");

//$covoitManager->add($covoit,$user);

//header('Location: voiture.php');