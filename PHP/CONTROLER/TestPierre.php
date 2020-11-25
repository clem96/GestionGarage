<?php

function chargerClasse($classe)
{
    if (file_exists("../Controller/" . $classe . ".class.php"))
    {
        require "../Controller/" . $classe . ".class.php";
    }

    if (file_exists("../Model/" . $classe . ".class.php"))
    {
        require "../Model/" . $classe . ".class.php";
    }

}
spl_autoload_register("chargerClasse");


$v = new Vehicules (["idVehicule" => 1 ,"marqueVehicule"=>"Opel","modeleVehicule" => "Corsa C", "immatriculationVehicule" => "AT-178-CP", "klmVehicule" => 257325]);


echo $v->toString();