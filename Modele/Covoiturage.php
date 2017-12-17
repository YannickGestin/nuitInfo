<?php


class Covoiturage
{

    private $_id;
    private $_dateDepart;
    private $_lieuDepart;
    private $_lieuArrivee;


    public function __construct($donnees = array())
    {
        if(!empty($donnes))
            $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    public function id()
    {
        return $this->_id;
    }

    public function dateDepart()
    {
        return $this->_dateDepart;
    }

    public function lieuDepart()
    {
        return $this->_lieuDepart;
    }

    public function dateArrivee()
    {
        return $this->_dateArrivee;
    }

    public function lieuArrivee()
    {
        return $this->_lieuArrivee;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function setDateDepart($dateDepart)
    {
        $this->_dateDepart = $dateDepart;
    }

    public function setLieuDepart($lieuDepart)
    {
        $this->_lieuDepart = $lieuDepart;
    }


    public function setLieuArrivee($lieuArrivee)
    {
        $this->_lieuArrivee = $lieuArrivee;
    }
}