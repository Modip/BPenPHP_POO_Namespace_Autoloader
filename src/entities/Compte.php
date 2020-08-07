<?php
namespace src\entities;
class Compte
// Ajout des attributs

{
    private  $id;
    private  $numeroCte;
    private  $clerib;
    private  $cleribmor;
    private  $agence;
    private  $solde;
    private  $soldemor;
    private  $agios;
    private  $fraisph;
    private  $dateou;
    private  $dateoum;
    private  $etat;
    private  $cltphy_id;
    private  $cltmoral_id;
    private  $typeCompte_id;
 
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
     * Get the value of numeroCte
     */ 
    public function getNumeroCte()
    {
        return $this->numeroCte;
    }

    /**
     * Set the value of numeroCte
     *
     * @return  self
     */ 
    public function setNumeroCte($numeroCte)
    {
        $this->numeroCte = $numeroCte;

        return $this;
    }

    /**
     * Get the value of clerib
     */ 
    public function getClerib()
    {
        return $this->clerib;
    }

    /**
     * Set the value of clerib
     *
     * @return  self
     */ 
    public function setClerib($clerib)
    {
        $this->clerib = $clerib;

        return $this;
    }

    /**
     * Get the value of agence_id
     */ 
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * Set the value of agence
     *
     * @return  self
     */ 
    public function setAgence($agence)
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get the value of soldemor
     */ 
    public function getSoldemor()
    {
        return $this->soldemor;
    }

    /**
     * Set the value of soldemor
     *
     * @return  self
     */ 
    public function setSoldemor($soldemor)
    {
        $this->soldemor = $soldemor;

        return $this;
    }

    /**
     * Get the value of agios
     */ 
    public function getAgios()
    {
        return $this->agios;
    }

    /**
     * Set the value of agios
     *
     * @return  self
     */ 
    public function setAgios($agios)
    {
        $this->agios = $agios;

        return $this;
    }

    /**
     * Get the value of dateou
     */ 
    public function getDateou()
    {
        return $this->dateou;
    }

    /**
     * Set the value of dateou
     *
     * @return  self
     */ 
    public function setDateou($dateou)
    {
        $this->dateou = $dateou;

        return $this;
    }

    /**
     * Get the value of fraisph
     */ 
    public function getFraisph()
    {
        return $this->fraisph;
    }

    /**
     * Set the value of fraisph
     *
     * @return  self
     */ 
    public function setFraisph($fraisph)
    {
        $this->fraisph = $fraisph;

        return $this;
    }

    /**
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @return  self
     */ 
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get the value of cltphy_id
     */ 
    public function getCltphy_id()
    {
        return $this->cltphy_id;
    }

    /**
     * Set the value of cltphy_id
     *
     * @return  self
     */ 
    public function setCltphy_id($cltphy_id)
    {
        $this->cltphy_id = $cltphy_id;

        return $this;
    }

    /**
     * Get the value of cltmoral_id
     */ 
    public function getCltmoral_id()
    {
        return $this->cltmoral_id;
    }

    /**
     * Set the value of cltmoral_id
     *
     * @return  self
     */ 
    public function setCltmoral_id($cltmoral_id)
    {
        $this->cltmoral_id = $cltmoral_id;

        return $this;
    }

    /**
     * Get the value of typeCompte_id
     */ 
    public function getTypeCompte_id()
    {
        return $this->typeCompte_id;
    }

    /**
     * Set the value of typeCompte_id
     *
     * @return  self
     */ 
    public function setTypeCompte_id($typeCompte_id)
    {
        $this->typeCompte_id = $typeCompte_id;

        return $this;
    }

    /**
     * Get the value of cleribmor
     */ 
    public function getCleribmor()
    {
        return $this->cleribmor;
    }

    /**
     * Set the value of cleribmor
     *
     * @return  self
     */ 
    public function setCleribmor($cleribmor)
    {
        $this->cleribmor = $cleribmor;

        return $this;
    }

    /**
     * Get the value of dateoum
     */ 
    public function getDateoum()
    {
        return $this->dateoum;
    }

    /**
     * Set the value of dateoum
     *
     * @return  self
     */ 
    public function setDateoum($dateoum)
    {
        $this->dateoum = $dateoum;

        return $this;
    }
}
