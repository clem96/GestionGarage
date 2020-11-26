<?php
// En cours
$listeInt = InterventionsManager::getList();
echo'<div class="titre info centre paire"><p>Liste des interventions</p></div><br>';
echo '<div class="info colonne">';
echo '<div class="paire centre"><p><button><a href="index.php?codePage=formIntervention&mode=ajout">Ajouter une intervention</a></button></p></div>';

$cmp=0;
foreach ($listeInt as $uneInt)
{
   
    if($cmp%2==0)
    {
        echo '<div class="impaire centre centreVertical">';
    }
    else
    {
        echo '<div class="paire centre centreVertical">';
    }
    echo $uneInt->getIdReparation();
    echo '<button><a href="index.php?codePage=formIntervention&mode=edit&id='.$uneInt->getIdIntervention().'">Edition</a></button></p>';
    echo '<button><a href="index.php?codePage=formIntervention&mode=modif&id='.$uneInt->getIdIntervention().'">Modification</a></button>';
    echo '<button><a href="index.php?codePage=formIntervention&mode=delete&id='.$uneInt->getIdIntervention().'">Supression</a></button>
    </div>
    <div></div>';
    $cmp++;
}