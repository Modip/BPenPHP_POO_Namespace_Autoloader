<?php
namespace src\entities;
class Clientmor 
// Ajout des attributs
{   
    private $id;
    private $nommor;
    private $adressemor;
    private $raisonsocial;
    private $numidentf;
    private $telmor;
    private $mailmor;
    private $loginmor;
    private $passwordmor;

//  Constructeur
    public function __construct()
    {

    }
//Les Fonctions getters et setters
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nommor
     */ 
    public function getNommor()
    {
        return $this->nommor;
    }

    /**
     * Set the value of nommor
     *
     * @return  self
     */ 
    public function setNommor($nommor)
    {
        $this->nommor = $nommor;

        return $this;
    }

    /**
     * Get the value of adressemor
     */ 
    public function getAdressemor()
    {
        return $this->adressemor;
    }

    /**
     * Set the value of adressemor
     *
     * @return  self
     */ 
    public function setAdressemor($adressemor)
    {
        $this->adressemor = $adressemor;

        return $this;
    }

    /**
     * Get the value of raisonsocial
     */ 
    public function getRaisonsocial()
    {
        return $this->raisonsocial;
    }

    /**
     * Set the value of raisonsocial
     *
     * @return  self
     */ 
    public function setRaisonsocial($raisonsocial)
    {
        $this->raisonsocial = $raisonsocial;

        return $this;
    }

    /**
     * Get the value of numidentf
     */ 
    public function getNumidentf()
    {
        return $this->numidentf;
    }

    /**
     * Set the value of numidentf
     *
     * @return  self
     */ 
    public function setNumidentf($numidentf)
    {
        $this->numidentf = $numidentf;

        return $this;
    }

    /**
     * Get the value of telmor
     */ 
    public function getTelmor()
    {
        return $this->telmor;
    }

    /**
     * Set the value of telmor
     *
     * @return  self
     */ 
    public function setTelmor($telmor)
    {
        $this->telmor = $telmor;

        return $this;
    }

    /**
     * Get the value of mailmor
     */ 
    public function getMailmor()
    {
        return $this->mailmor;
    }

    /**
     * Set the value of mailmor
     *
     * @return  self
     */ 
    public function setMailmor($mailmor)
    {
        $this->mailmor = $mailmor;

        return $this;
    }

    /**
     * Get the value of loginmor
     */ 
    public function getLoginmor()
    {
        return $this->loginmor;
    }

    /**
     * Set the value of loginmor
     *
     * @return  self
     */ 
    public function setLoginmor($loginmor)
    {
        $this->loginmor = $loginmor;

        return $this;
    }

    /**
     * Get the value of passwordmor
     */ 
    public function getPasswordmor()
    {
        return $this->passwordmor;
    }

    /**
     * Set the value of passwordmor
     *
     * @return  self
     */ 
    public function setPasswordmor($passwordmor)
    {
        $this->passwordmor = $passwordmor;

        return $this;
    }
}