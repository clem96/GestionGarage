<?php

$listevehicules = VehiculesManager::getList();
echo '<div class=page contenu>';
echo'<div class="titre info centre paire"><p>Liste des véhicules</p></div><br>';
echo '<div class="info colonne">';
echo '<div class="paire centre"><p><button class="vert"><a href="index.php?codePage=formVehicule&mode=ajout">Ajouter un Vehicule</a></button></p></div>';

$cmp=0;
foreach ($listevehicules as $unVehicule)
{
   
    if($cmp%2==0)
    {
        echo '<div class="impaire centre centreVertical colonne">';
    }
    else
    {
        echo '<div class="paire centre centreVertical colonne">';
    }
    echo '<div><h3>'.$unVehicule->getImmatriculationVehicule().'</h3></div>
          <div>  ';
    echo '<button class="vert"><a href="index.php?codePage=formVehicule&mode=edit&id='.$unVehicule->getIdVehicule().'">Détails</a></button></p>';
    echo '<button class="orange"><a href="index.php?codePage=formVehicule&mode=modif&id='.$unVehicule->getIdVehicule().'">Modification</a></button>';
    echo '<button class="rouge"><a href="index.php?codePage=formVehicule&mode=delete&id='.$unVehicule->getIdVehicule().'">Supression</a></button>
    </div>
    </div>';
    $cmp++;
}
echo '<div>';