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
include "InterventionsManager.Class.php";
include "../CONTROLER/Interventions.Class.php";

DbConnect::init();

/* Test Manager */

// echo"**********************************************";

// // on teste la recherche par ID
echo 'recherche id = 3' . '<br>';
$p = InterventionsManager::findById(2);
var_dump($p);


// echo"**********************************************";

// // on teste l'ajout

// echo "ajout d'un Tickets" . '<br>';
// $aNew = new Interventions(["idPiece" => 2, "idReparation" => 1 , "quantitePiece" => 5]);
// var_dump($aNew);
// InterventionsManager::add($aNew);

// echo"**********************************************";

// on affiche la liste des produits

// echo "Liste des articles" . '<br>';
// $tableau = InterventionsManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }

// echo"**********************************************";

// // on teste la mise à jour
// echo "on met à jour l'id 3" . '<br>';
// $p->setQuantitePiece(50);
// InterventionsManager::update($p);
// $pRecharge = InterventionsManager::findById(2);

// on teste la suppression
// echo "on supprime un article" . '<br>';
// $pSuppr = InterventionsManager::findById(3);
// InterventionsManager::delete($pSuppr);


// //on affiche la liste des produits
// echo "liste des articles" . '<br>';
// $tableau = ProduitsManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }

// include "PHP/VIEW/Footer.php";
