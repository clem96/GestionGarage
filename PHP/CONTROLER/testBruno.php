<?php
function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$reparation=new Reparations(["libelleReparation"=>"embrayage","prixReparation"=>1000,"dateReparation"=>new DateTime("12-11-2020")]);


$reparation->setIdVehicule(1);
var_dump($reparation);
echo $reparation->getLibelleReparation();
echo $reparation->toString();