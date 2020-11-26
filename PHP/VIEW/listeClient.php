<?php

$listeclient = ClientsManager::getList();
echo'<div class="titre info centre"><p>Liste des clients</p></div><br>';
echo '<div class="info colonne">';
echo '<div class="paire"><p><button><a href="index.php?codePage=formClient&mode=ajout">Ajouter un Client</a></button></p></div>';

foreach ($listeclient as $unClient)
{
echo $unClient->getNomClient();
echo $unClient->getPrenomClient();
echo '<div class="impaire"><p><button><a href="index.php?codePage=formClient&mode=edit&id='.$unClient->getIdClient().'">Edition</a></button></p></div>';
echo '<div class="paire"><p><button><a href="index.php?codePage=formClient&mode=modif&id='.$unClient->getIdClient().'">Modification</a></button></p></div>';
echo '<div class="impaire"><p><button><a href="index.php?codePage=formClient&mode=delete&id='.$unClient->getIdClient().'">Supression</a></button></p></div>';
}