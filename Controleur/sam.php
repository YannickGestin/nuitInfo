
<?php
// Import
require('../Modele/UsersManager.php');
require('../Modele/ConnectionManager.php');
require('../Modele/CovoiturageManager.php');

// Init
$db = new PDO('mysql:host=localhost;dbname=nuit;charset=utf8', 'dbuser', 'np');
$connectionManager = new ConnectionManager($db);
$userManager=new UsersManager($db);
$CovoitManager=new UsersManager($db);

// Start session and check connection
$connectionManager->startSession();

if($connectionManager->isConnected() ){
    $user = $connectionManager->getUser();
}
//$connectionManager->register("pppppa@gmail.com","M","1992-08-07","Benhlal","Adil","passq");
