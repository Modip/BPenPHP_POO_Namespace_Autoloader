<?php
namespace src\models;
require_once '../../config/autoload.php';

class Comptedb extends DB
{
  public function __construct()
  { 
    parent::__construct();
  }

  public function addCompteph($compteph) //Ouverture de compte pour un client Physique
  {
    $sql= "INSERT INTO compte_client VALUES (NULL,NULL,'".$compteph->getClerib()."','".$compteph->getAgence()."','".$compteph->getSolde()."',Null,Null,Null,Null,'".$compteph->getDateou()."',NULL,NULL,Null)";
    return $this->db->exec($sql);
  
  }

  public function addComptemor($comptemor) //Ouverture de compte pour un client Moral

  {
 
    $sql1= "INSERT INTO compte_client VALUES (NULL,NULL,'".$comptemor->getCleribmor()."',Null,'".$comptemor->getSoldemor()."',Null,Null,Null,Null,'".$comptemor->getDateoum()."',NULL,NULL,Null)";
    return $this->db->exec($sql1);
  }


 //Fonction pour afficher les clients physiques qui sont dans la base
  function afficherClient()
  {
   
    $val = ('SELECT * FROM client_physique');
  
    return $this->db->query($val)->fetchAll();
  }
 //Afficher le sclients morals
  function afficherClientmor(){
   
   $val2 = ('SELECT * FROM client_moral');

   return $this->db->query($val2)->fetchAll();
  
}
 //Fonction pour afficher les agences qui sont dans la base
 function afficherAgence(){
   $val1 = ('SELECT * FROM agence');

   return $this->db->query($val1)->fetchAll();
  }
//Fonction pour afficher les types comptes
 function afficherTypecompte()
 {
     $cpt = ('SELECT * FROM type_compte');
   
     return $this->db->query($cpt)->fetchAll();
  }

}

?>

