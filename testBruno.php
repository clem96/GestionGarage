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
include "PHP/CONTROLER/Reparations.Class.php";
include "PHP/MODEL/ReparationsManager.Class.php";
include "PHP/MODEL/DbConnect.Class.php";

DbConnect::Init();

/****** Test de AdherentsManager ******/

//On teste la recherche par ID
//echo 'Recherche de id=1 <br>';
//$p=PaiementsManager::findById(1);
//var_dump($p);

//On teste l'ajout
//$ticket=ReparationsManager::findById(1);
//$mode=ModesPaiementsManager::findById(1);  
//var_dump($ticket);
//var_dump($mode);
//echo 'On ajoute un objet TVA <br>';
$pNew = new Reparations(["libelleReparation"=>"Embrayage","prixReparation"=>1000,"dateReparation"=>"2020-02-20","idVehicule"=>1,"idFacture"=>1]);
var_dump($pNew);
ReparationsManager::add($pNew);

//On teste la suppression
//echo 'On supprime un article <br>';
//$pSupp=PaiementsManager::findById(4);
//PaiementsManager::delete($pSupp);


//On teste la mise a jour
//$pRecharge=PaiementsManager::findById(2);
//$pRecharge->setPrixTtc(1000);
//PaiementsManager::update($pRecharge);


//On affiche le liste des objets
//echo 'On affiche la liste des objet <br>';
//$tableau=ReparationsManager::getList();
//var_dump($tableau);
//foreach($tableau as $elt)
//{
//	echo $elt->toString()."\n";
//}
//include "PHP/VIEW/Footer.php";

?>