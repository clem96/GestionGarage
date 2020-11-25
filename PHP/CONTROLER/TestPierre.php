<?php

function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

//VEHICULES

$v = new Vehicules (["idVehicule" => 1 ,"marqueVehicule"=>"Opel","modeleVehicule" => "Corsa C", "immatriculationVehicule" => "AT-178-CP", "klmVehicule" => 257325]);


echo "\n";

//INTERVENTIONS

echo $v->toString();

$i = new Interventions (["idPieces" => 1 ,"idReparation"=>2, "quantitePieces" => 5]);


echo $i->toString();