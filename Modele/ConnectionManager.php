<?php

require('User.php');
//require('UsersManager.php');

class ConnectionManager
{
    /* @var PDO $_db */
    private $_db;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function startSession()
    {
        session_start();
    }

    public function destroySession()
    {
        session_destroy();
    }

    public function isConnected()
    {
        return isset($_SESSION["connected"]) && $_SESSION["connected"];
    }

    public function disconnect()
    {
        $_SESSION["connected"] = false;
        session_destroy();
    }

    public function connect($mail, $password)
    {
        $userManager = new UsersManager($this->_db);
        /* @var User $user */
        $user=$userManager->getUserByMail($mail);

        if( $password ==  $user->password())
        {
    		$_SESSION["connected"] = true;
    		$_SESSION["userId"] = $user->id();
            return true;
    	}
        else return false;
    }

    public function getUser()
    {
        $userManager = new UsersManager($this->_db);
        return $userManager->getUserById($_SESSION["userId"]);
    }

    public function register($mail, $sexe, $date_naissance, $nom, $prenom, $password){

        $userManager = new UsersManager($this->_db);
        /* @var User $user */
        $user=$userManager->getUserByMail($mail);

		if($user != null){
            return false;
		}
		$user = new User(array(
		'mail' => $mail,
		'sexe' =>$sexe,
		'date_naissance' => $date_naissance,
		'nom' =>$nom,
		'prenom' =>$prenom,
		'password' =>$password));
        $userManager->add($user);
        $user->setId($this->_db->lastInsertId());

        return $user;
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }

}
