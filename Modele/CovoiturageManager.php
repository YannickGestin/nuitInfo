<?php


class CovoiturageManager
{

    /* @var PDO $_db */
    private $_db;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function add(Covoiturage $covoiturage,User $user)
    {
        try
        {
            $this->_db->beginTransaction();

            $q = $this->_db->prepare('INSERT INTO Covoiturages (dateDepart, lieuDepart, lieuArrivee) VALUES(:dateDepart, :lieuDepart, :lieuArrivee)');
            $q->bindValue(':dateDepart', $covoiturage->dateDepart());
            $q->bindValue(':lieuDepart', $covoiturage->lieuDepart());
            $q->bindValue(':lieuArrivee', $covoiturage->lieuArrivee());
            $q->execute();

            $q2 = $this->_db->prepare('INSERT INTO Propose (idUser, idCovoiturage) VALUES(:idUser, :idCovoiturage)');
            $q2->bindValue(':idUser', $user->id());
            $q2->bindValue(':idCovoiturage', $covoiturage->id());
            $q2->execute();

            $this->_db->commit();
        }
        catch(Exception $e)
        {
            $this->_db->rollback();

            exit();
        }
    }

    public function delete(Covoiturage $covoiturage,User $user)
    {
        try
        {
            $this->_db->beginTransaction();

            $q2 = $this->_db->prepare('DELETE FROM Propose where idCovoiturage = :idCovoiturage AND idUser = :idUser)');
            $q2->bindValue(':idCovoiturage', $covoiturage->id());
            $q2->bindValue(':idUser', $user->id());
            $q2->execute();

            $q = $this->_db->prepare('DELETE FROM Covoiturages WHERE id = :idCovoiturage');
            $q->bindValue(':id', $covoiturage->id());
            $q->execute();

            $this->_db->commit();
        }
        catch(Exception $e)
        {
            $this->_db->rollback();

            exit();
        }
    }

    public function update(Covoiturage $covoiturage)
    {
        $q = $this->_db->prepare('UPDATE Covoiturages SET dateDepart = :dateDepart, lieuDepart = :lieuDepart, lieuArrivee = :lieuArrivee, date_naissance = :date_naissance WHERE id = :id');

        $q->bindValue(':dateDepart', $covoiturage->dateDepart());
        $q->bindValue(':lieuDepart', $covoiturage->lieuDepart());
        $q->bindValue(':lieuArrivee', $covoiturage->lieuArrivee());
        $q->bindValue(':id', $covoiturage->id(), PDO::PARAM_INT);

        $q->execute();
    }

    public function getCoivoiturages()
    {

        $request = $this->_db->query('SELECT * FROM covoiturages');
        return $request->fetchAll();
    }

    public function getCovoiturageById($coivoiturageId)
    {

        $request = $this->_db->query('SELECT * FROM covoiturages WHERE id= '.$coivoiturageId);
        $covoiturage = $request->fetch(PDO::FETCH_ASSOC);
        return $covoiturage;
    }

    public function getCovoituragesOrderByIdAsc()
    {

        $request = $this->_db->query('SELECT * FROM covoiturages ORDER BY id ASC');
        return $request->fetchAll();
    }

    public function getCovoituragesOrderByIdDesc()
    {

        $request = $this->_db->query('SELECT * FROM covoiturages ORDER BY id DESC');
        return $request->fetchAll();
    }

    public function getCovoituragesOrderByDateDepartAsc()
    {

        $request = $this->_db->query('SELECT * FROM covoiturages ORDER BY dateDepart ASC');
        return $request->fetchAll();
    }

    public function getCovoituragesOrderByDateDepartDesc()
    {

        $request = $this->_db->query('SELECT * FROM covoiturages ORDER BY  dateDepart DESC');
        return $request->fetchAll();
    }


    public function getCovoituragesOrderByLieuDepartAsc()
    {

        $request = $this->_db->query('SELECT * FROM covoiturages ORDER BY lieuDepart ASC');
        return $request->fetchAll();
    }

    public function getCovoituragesOrderByLieuDepartDesc()
    {

        $request = $this->_db->query('SELECT * FROM covoiturages ORDER BY  lieuDepart DESC');
        return $request->fetchAll();
    }

    public function getCovoituragesOrderByLieuArriveeAsc()
    {

        $request = $this->_db->query('SELECT * FROM covoiturages ORDER BY lieuArrivee ASC ');
        return $request->fetchAll();
    }

    public function getCovoituragesOrderByLieuArriveeDesc()
    {
        $request = $this->_db->query('SELECT * FROM covoiturages ORDER BY lieuArrivee DESC');
        return $request->fetchAll();
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }

}