<?php
require 'PiecesManager.Class.php';
require 'PiecesClass.Class.php';

//test d ajout
$p = new Pieces(["idPiece"=>20, "libelle"=>"testlibelle", "prix"=>20]);
PiecesManager::add($p);

//test de modif
//$up = new Pieces(["idPiece"=>1, "libelle"=>"testmodif", "prix"=>500]);
//PiecesManager::upDate($up);

//suppression
//$del = new Pieces(["idPiece"=>2, "libelle"=>"testmodif", "prix"=>2]);
//PiecesManager::delete($del);

//test de recherche par id
//var_dump(PiecesManager::findById(5));

//test affiche list
//var_dump(PiecesManager::getList());

