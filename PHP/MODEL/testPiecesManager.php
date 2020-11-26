<?php
require 'PiecesManager.Class.php';
require '../CONTROLER/Pieces.Class.php';
require 'DbConnect.Class.php';
$db = DbConnect::init();


//teste ajout
$p = new Pieces(["idPiece"=>20, "libelle"=>"testlibelle", "prix"=>20]);
var_dump($p);
PiecesManager::add($p);



//teste modif
$up = new Pieces(["idPiece"=>1, "libelle"=>"testmodif", "prix"=>500]);
PiecesManager::upDate($up);


//teste suppression
$del = new Pieces(["idPiece"=>2, "libelle"=>"testmodif", "prix"=>2]);
PiecesManager::delete($del);


//recherche par id
var_dump(PiecesManager::findById(5));


//affiche list
$tab = PiecesManager::getList();
foreach($tab as $piece){
    var_dump($piece);
}

