<?php
namespace src\models;

class Clientphysique extends DB
{
    //Constructeur

   public function __construct()
      {
         parent::__construct();
      }
 
   //Insertion de client physique dans la base de donnee
   public function addClientphysique($clientphysique)
      {
        $sql = "INSERT INTO client_physique VALUES(NULL,'".$clientphysique->getNomph()."','".$clientphysique->getPrenomph()."','".$clientphysique->getTelph()."','".$clientphysique->getSalaire()."','".$clientphysique->getAdresseph()."','".$clientphysique->getProfession()."', '".$clientphysique->getLoginph()."','".$clientphysique->getPasswordph()."','".$clientphysique->getEmailph()."','".$clientphysique->getNinph()."',NULL,NULL)";

        return $this->db->exec($sql);
      }

   //Fonction pour afficher les clients qui sont dans la base
   public function afficherClient()
      {
   
         $val = ('SELECT * FROM client_physique where id=$id');
       
         return $db->query($val1)->fetchAll();   
      }

   //Fonction pour afficher les clients qui sont dans la base

   public function afficherAgence()
      {
        $val1 = ('SELECT * FROM agence');

        return $db->query($val1)->fetchAll();
      }

   //Fonction pour afficher les types comptes
   public function afficherTypecompte()
   {
      $cpt = ('SELECT * FROM type_compte ');
      $db = getConnection();
      return $db->query($cpt)->fetchAll();
   }
}
?>