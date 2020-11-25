<?php 

// function chargerClasse($classe)
// {
//     if (file_exists("Php/Controller/" . $classe . ".class.php"))
//     {
//         require "Php/Controller/" . $classe . ".class.php";
//     }

//     if (file_exists("Php/Model/" . $classe . ".class.php"))
//     {
//         require "Php/Model/" . $classe . ".class.php";
//     }

// }
// spl_autoload_register("chargerClasse");

include "DbConnect.Class.php";
include "VehiculesManager.Class.php";
include "../CONTROLER/Vehicules.Class.php";

DbConnect::init();

/* Test Manager */

// echo"**********************************************";

// on teste la recherche par ID
echo 'recherche id = 3' . '<br>';
$p = VehiculesManager::findById(3);
var_dump($p);


// echo"**********************************************";

// // on teste l'ajout

// echo "ajout d'un Tickets" . '<br>';
// $aNew = new Vehicules(["marqueVehicule" => "Opel", "modeleVehicule" => "CORSA", "immatriculationVehicule" => "AT-178-CP", "klmVehicule" => "257000", "idClient" => 1]);
// var_dump($aNew);
// VehiculesManager::add($aNew);

// echo"**********************************************";

//on affiche la liste des produits
// echo "Liste des articles" . '<br>';
// $tableau = TicketsManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }

// echo"**********************************************";

// // on teste la mise à jour
// echo "on met à jour l'id 2" . '<br>';
// $p->setprixHT(1.5);
// TicketsManager::update($p);
// $pRecharge = TicketsManager::findById(2);

// on teste la suppression
// echo "on supprime un article" . '<br>';
// $pSuppr = TicketsManager::findById(3);
// TicketsManager::delete($pSuppr);


// //on affiche la liste des produits
// echo "liste des articles" . '<br>';
// $tableau = ProduitsManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }

// include "PHP/VIEW/Footer.php";
