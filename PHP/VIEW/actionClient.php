<?php

$client = new Clients($_POST);
$mode = $_GET['mode'];
var_dump($client);
switch ($mode)
{
    case "ajout":
    {
            ClientsManager::add($client);
            break;
        }
    case "modif":
            {
            ClientsManager::update($client);
            break;
        }
    case "delete":
            {
            ClientsManager::delete($client);
            break;
        }
}

header("location: index.php?codePage=listeClient");