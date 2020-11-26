<?php

$listeReparation = ReparationsManager::getList();
echo'<div class="titre info centre"><p>Liste des Intervention</p></div><br>';
echo '<div class="info colonne">';
echo '<div class="paire"><p><button><a href="index.php?codePage=formClient&mode=ajout">Ajouter une Reparation</a></button></p></div>';


foreach ($listeReparation as $uneReparation)
{
echo'<div class="info colonne">';
    echo '<div class="titre">'.$uneReparation->getLibelleReparation().'</div>';
    echo'<div class="elm colonne">';
        echo '<div><p>Prix de la reparation : '.$uneReparation->getPrixReparation().'</p></div>';
        echo '<div><p>Date de la reparation : '.$uneReparation->getDateReparation().'</p></div>';
        echo '<div><p>Code Postal : '.$uneReparation->getIdVehicule().'</p></div>';
        echo'<button><a href="index.php?codePage=formReparation&mode=edit&id='.$uneReparation->getIdReparation().'">Modifier</a></button>';
        echo'<button><a href="index.php?codePage=formReparation&mode=delete&id='.$uneReparation->getIdReparation().'">Supprimer</a></button>';
    echo '</div>';
echo'</div>'; 

}


