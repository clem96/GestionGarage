<?php

$vehicule = new Vehicules($_POST);
$mode = $_GET['mode'];
var_dump($vehicule);
var_dump($mode);
switch ($mode)
{
    case "ajout":
    {
            VehiculesManager::add($vehicule);
            break;
        }
    case "modif":
            {
            VehiculesManager::update($vehicule);
            break;
        }
    case "delete":
            {
            VehiculesManager::delete($vehicule);
            break;
        }
}

header("location: index.php?codePage=listeVehicule");