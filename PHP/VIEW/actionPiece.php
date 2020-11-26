<?php

$obj = new Pieces($_POST);
$mode = $_GET['mode'];

switch ($mode)
{
    case "ajout":
    {
            PiecesManager::add($obj);
            break;
        }
    case "modif":
            {
            PiecesManager::update($obj);
            break;
        }
    case "delete":
            {
            PiecesManager::delete($obj);
            break;
        }
}

header("location: pageAccueil.php?codePage=listeClient");