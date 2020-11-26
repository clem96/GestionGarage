<?php

$listevehicules = VehiculesManager::getList();
echo'<div class="titre info centre paire"><p>Liste des véhicules</p></div><br>';
echo '<div class="info colonne">';
echo '<div class="paire centre"><p><button><a href="index.php?codePage=formVehicule&mode=ajout">Ajouter un Vehicule</a></button></p></div>';

$cmp=0;
foreach ($listevehicules as $unVehicule)
{
   
    if($cmp%2==0)
    {
        echo '<div class="impaire centre centreVertical">';
    }
    else
    {
        echo '<div class="paire centre centreVertical">';
    }
    echo $unVehicule->getImmatriculationVehicule();
    echo '<button><a href="index.php?codePage=formVehicule&mode=edit&id='.$unVehicule->getIdVehicule().'">Edition</a></button></p>';
    echo '<button><a href="index.php?codePage=formVehicule&mode=modif&id='.$unVehicule->getIdVehicule().'">Modification</a></button>';
    echo '<button><a href="index.php?codePage=formVehicule&mode=delete&id='.$unVehicule->getIdVehicule().'">Supression</a></button>
    </div>
    <div></div>';
    $cmp++;
}