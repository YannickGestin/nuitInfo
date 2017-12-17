<?php


class Propose
{

    private $_idUser;
    private $_idCovoiturage;

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

    public function setIdCoivoiturage($idCovoiturage)
    {
        $this->_idCovoiturage = $idCovoiturage;
    }

    public function setIdUser($idUser)
    {
        $this->_idUser = $idUser;
    }

    public function idCoivoiturage()
    {
        return $this->_idCovoiturage;
    }

    public function idUser()
    {
        return $this->_idUser;
    }


}