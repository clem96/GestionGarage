<?php
/*function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$reparation=new Factures(["idFacture"=>1,"dateFacture"=>new DateTime("12-11-2020")]);


var_dump($reparation);
echo $reparation->toString();*/

/*function chargerClasse($classe)
{
    if (file_exists("php/controller/".$classe.".class.php"))
    {
        require "php/controller/".$classe.".class.php";
    }
    else if (file_exists("../controller/".$classe.".class.php"))
    {
        require "../controller/".$classe.".class.php";
    }


    if (file_exists("php/model/".$classe.".class.php"))
    {
        require "php/model/".$classe.".class.php";
    }
    else if (file_exists("../model/".$classe.".class.php"))
    {
        require "../model/".$classe.".class.php";
    }
}

spl_autoload_register("chargerClasse");


*/
include "PHP/CONTROLLER/Vehicules.Class.php";
include "PHP/CONTROLLER/Pieces.Class.php";
include "PHP/CONTROLLER/Clients.Class.php";
include "PHP/CONTROLLER/Factures.Class.php";
include "PHP/CONTROLLER/Reparations.Class.php";
include "PHP/CONTROLLER/Interventions.Class.php";
include "PHP/CONTROLLER/Pieces.Class.php";
include "PHP/MODEL/VehiculesManager.Class.php";
include "PHP/MODEL/PiecesManager.Class.php";
include "PHP/MODEL/ClientsManager.Class.php";
include "PHP/MODEL/FacturesManager.Class.php";
include "PHP/MODEL/ReparationsManager.Class.php";
include "PHP/MODEL/InterventionsManager.Class.php";
include "PHP/MODEL/DbConnect.Class.php";

DbConnect::Init();

/****** Test de AdherentsManager ******/

//On teste la recherche par ID
//echo 'Recherche de id=1 <br>';
//$p=FacturesManager::findById(2);
//var_dump($p);

//On teste l'ajout
//$ticket=ReparationsManager::findById(1);
//$mode=ModesPaiementsManager::findById(1);  
//var_dump($ticket);
//var_dump($mode);
//echo 'On ajoute un objet TVA <br>';
//$pNew = new vehicules(["marqueVehicule"=>"Renault","modeleVehicule"=>"Dauphine","immatriculationVehicule"=>"AN-534-KP","klmVehicule"=>3000,"idClient"=>1]);
//var_dump($pNew);
//VehiculesManager::add($pNew);

//On teste la suppression
//echo 'On supprime un article <br>';
//$pSupp=VehiculesManager::findById(1);
//var_dump($pSupp);
//VehiculesManager::delete($pSupp);


//On teste la mise a jour
//$pRecharge=VehiculesManager::findById(6);
//$pRecharge->setKlmVehicule(12500);
//var_dump($pRecharge);
//VehiculesManager::update($pRecharge);


//On affiche le liste des objets
//echo 'On affiche la liste des objet <br>';
$tableau=PiecesManager::getList();
var_dump($tableau);
foreach($tableau as $elt)
{
	echo $elt->toString()."\n";
}
//include "PHP/VIEW/Footer.php";

?>