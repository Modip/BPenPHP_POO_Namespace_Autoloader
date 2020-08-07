<?php
namespace  src\entities;
class Clientph
// Ajout des attributs

{
    private $id;
    private $nomph;
    private $prenomph;
    private $telph;
    private $salaire;
    private $adresseph;
    private $profession;
    private $emailph;
    private $ninph;
    private $loginph;
    private $passwordph;

    //Constructeur

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
     * Get the value of nomph
     */ 
    public function getNomph()
    {
        return $this->nomph;
    }

    /**
     * Set the value of nomph
     *
     * @return  self
     */ 
    public function setNomph($nomph)
    {
        $this->nomph = $nomph;

        return $this;
    }

    /**
     * Get the value of prenomph
     */ 
    public function getPrenomph()
    {
        return $this->prenomph;
    }

    /**
     * Set the value of prenomph
     *
     * @return  self
     */ 
    public function setPrenomph($prenomph)
    {
        $this->prenomph = $prenomph;

        return $this;
    }

    /**
     * Get the value of telph
     */ 
    public function getTelph()
    {
        return $this->telph;
    }

    /**
     * Set the value of telph
     *
     * @return  self
     */ 
    public function setTelph($telph)
    {
        $this->telph = $telph;

        return $this;
    }

    /**
     * Get the value of adresseph
     */ 
    public function getAdresseph()
    {
        return $this->adresseph;
    }

    /**
     * Set the value of adresseph
     *
     * @return  self
     */ 
    public function setAdresseph($adresseph)
    {
        $this->adresseph = $adresseph;

        return $this;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get the value of profession
     */ 
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set the value of profession
     *
     * @return  self
     */ 
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get the value of emailph
     */ 
    public function getEmailph()
    {
        return $this->emailph;
    }

    /**
     * Set the value of emailph
     *
     * @return  self
     */ 
    public function setEmailph($emailph)
    {
        $this->emailph = $emailph;

        return $this;
    }

    /**
     * Get the value of ninph
     */ 
    public function getNinph()
    {
        return $this->ninph;
    }

    /**
     * Set the value of ninph
     *
     * @return  self
     */ 
    public function setNinph($ninph)
    {
        $this->ninph = $ninph;

        return $this;
    }

    /**
     * Get the value of loginph
     */ 
    public function getLoginph()
    {
        return $this->loginph;
    }

    /**
     * Set the value of loginph
     *
     * @return  self
     */ 
    public function setLoginph($loginph)
    {
        $this->loginph = $loginph;

        return $this;
    }

    /**
     * Get the value of passwordph
     */ 
    public function getPasswordph()
    {
        return $this->passwordph;
    }

    /**
     * Set the value of passwordph
     *
     * @return  self
     */ 
    public function setPasswordph($passwordph)
    {
        $this->passwordph = $passwordph;

        return $this;
    }
}
