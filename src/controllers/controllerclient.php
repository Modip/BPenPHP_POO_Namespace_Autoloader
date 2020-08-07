<?php
//On appel le fichier autoload car on l'a besoin ici
require_once '../../config/autoload.php';
//On fait des use avec les namespace
use src\entities\Clientph;
use src\entities\Clientmor;
use src\models\Clientphysique;
use src\models\Clientmordb;
if(isset($_POST['submit']))

{
    extract($_POST);
    if($typeclient == '1')
    {
        $a = new Clientph();
        $a->setNomph($nomph);
        $a->setPrenomph($prenomph);
        $a->setTelph($telph);
        $a->setSalaire($salaire);
        $a->setAdresseph($adresseph);
        $a->setProfession($profession);
        $a->setLoginph($loginph);
        $a->setPasswordph($passwordph);
        $a->setEmailph($emailph);
        $a->setNinph($ninph);

        $cp = new Clientphysique();
        $rep = $cp->addClientphysique($a);
        var_dump($rep);
        die();
    }
    
    if($typeclient == '2'){
      
        $b = new Clientmor();
        $b->setRaisonsocial($raisonsocial);
        $b->setNommor($nommor);
        $b->setAdressemor($adressemor);
        $b->setTelmor($telmor);
        $b->setMailmor($mailmor);
        $b->setLoginmor($loginmor);
        $b->setPasswordmor($passwordmor);

        $cm = new Clientmordb();
        $rep=$cm->addClientmoral($b);
       // header("")
        var_dump($rep);
        die();
    }      
}

?>



