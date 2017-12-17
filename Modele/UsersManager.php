<?php


class UsersManager
{

    /* @var PDO $_db */
    private $_db;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function add(User $user)
    {
        $q = $this->_db->prepare('INSERT INTO Users (nom, prenom, mail, sexe, date_naissance, password) VALUES(:nom, :prenom, :mail, :sexe, :date_naissance, :password)');

        $q->bindValue(':nom', $user->nom());
        $q->bindValue(':prenom', $user->prenom());
        $q->bindValue(':mail', $user->mail());
        $q->bindValue(':sexe', $user->sexe());
        $q->bindValue(':date_naissance', $user->date_naissance());
	$q->bindValue(':password', $user->password());

        $q->execute();
    }

    public function delete(User $user)
    {
        $this->_db->exec('DELETE FROM Users WHERE id = '.$user->id());
    }

    public function update(User $user)
    {
        $q = $this->_db->prepare('UPDATE Users SET nom = :nom, prenom = :prenom, mail = :mail, sexe = :sexe, date_naissance = :date_naissance WHERE id = :id');

        $q->bindValue(':nom', $user->nom());
        $q->bindValue(':prenom', $user->prenom());
        $q->bindValue(':mail', $user->mail());
        $q->bindValue(':sexe', $user->sexe());
        $q->bindValue(':id', $user->id(), PDO::PARAM_INT);

        $q->execute();
    }

    public function getUsers()
    {
        $request = $this->_db->query('select * from Users');
        return $request->fetchAll();
    }

    public function getUserById($userId)
    {
        $request = $this->_db->query('select * from Users where id='.$userId);
	if(!empty($request) AND $request->rowCount() > 0){
		return $request->fetch(PDO::FETCH_ASSOC);
	}
	return null;
    }

    public function getUserByMail($mail)
    {
        $request = $this->_db->query('select * from Users where mail='.$mail);
	if(!empty($request) AND $request->rowCount() > 0){
		return $request->fetch(PDO::FETCH_ASSOC);
	}
	return null;
    }

    public function getUsersOrderByIdAsc()
    {
        $request = $this->_db->query('select * from Users ORDER BY id ASC');
        return $request->fetchAll();
    }

    public function getUsersOrderByIdDesc()
    {
        $request = $this->_db->query('select * from Users ORDER BY id DESC ');
        return $request->fetchAll();
    }

    public function getUsersOrderByMailAsc()
    {
        $request = $this->_db->query('select * from Users ORDER BY mail ASC');
        return $request->fetchAll();
    }

    public function getUsersOrderByMailDesc()
    {
        $request = $this->_db->query('select * from Users ORDER BY mail DESC ');
        return $request->fetchAll();
    }

    public function getUsersOrderByNomAsc()
    {
        $request = $this->_db->query('select * from Users ORDER BY nom ASC');
        return $request->fetchAll();
    }

    public function getUsersOrderByNomDesc()
    {
        $db = $this->dbConnect();
        $request = $this->_db->query('select * from Users ORDER BY nom DESC ');
        return $request->fetchAll();
    }

    public function getUsersOrderByPrenomAsc()
    {
        $db = $this->dbConnect();
        $request = $this->_db->query('select * from Users ORDER BY prenom ASC');
        return $request->fetchAll();
    }

    public function getUsersOrderByPrenomDesc()
    {
        $db = $this->dbConnect();
        $request = $this->_db->query('select * from Users ORDER BY prenom DESC ');
        return $request->fetchAll();
    }

    public function getUsersOrderByAgeAsc()
    {
        $request = $this->_db->query('select * from Users ORDER BY age ASC');
        return $request->fetchAll();
    }

    public function getUsersOrderByAgeDesc()
    {
        $request = $this->_db->query('select * from Users ORDER BY age DESC ');
        return $request->fetchAll();
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }

}
