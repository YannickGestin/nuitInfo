<?php


class User
{
    private $_id;
    private $_mail;
    private $_nom;
    private $_prenom;
    private $_sexe;
    private $_date_naissance;
    private $_password;

    public function __construct($donnees = array())
    {
        if(!empty($donnees))
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

    public function mail()
    {
        return $this->_mail;
    }

    public function nom()
    {
        return $this->_nom;
    }

    public function prenom()
    {
        return $this->_prenom;
    }

    public function sexe()
    {
        return $this->_sexe;
    }

    public function date_naissance()
    {
        return $this->_date_naissance;
    }

    public function password()
    {
        return $this->_password;
    }


    public function setId($id)
    {
        $this->_id = $id;
    }

    public function setMail($mail)
    {
        $this->_mail = $mail;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function setSexe($sexe)
    {
        $this->_sexe = $sexe;
    }

    public function setDate_naissance($date_naissance)
    {
        $this->_date_naissance = $date_naissance;
    }

    public function setPassword($password)
    {
        $this->_password = $password;
    }

}