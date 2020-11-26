<?php
$mode = $_GET['mode'];
if (isset($_GET['id']))  // si l'id est renseigné
{
    $idRecu = $_GET['id'];
    if ($idRecu != false)
    {
        $reparation = ReparationsManager::findById($idRecu);
    }
}
switch ($mode)
{
    case "ajout":    {
            echo '<form action="index.php?codePage=actionReparation&mode=ajout" method="POST">';
            break;
        }
    case "modif":    {
            echo '<form action="index.php?codePage=actionReparation&mode=modif" method="POST">
        <input name="idReparation"  value="' . $reparation->getIdReparation() . '" type="hidden" />';
            break;
        }
    case "delete":    {
            echo '<form action="index.php?codePage=actionReparation&mode=delete" method="POST">
        <input name="idReparation"  value="' . $reparation->getIdReparation() . '" type="hidden" />';
            break;
        }
    case "edit":    { //il n'y a pas d'action sur le formulaire, juste le bouton retour
        echo '<form >  
    <input name="idReparation"  value="' . $reparation->getIdReparation() . '" type="hidden" />';
        break;
    }
}


?>
 <div class="titre info centre"><p>
     
 <?php echo $reparation->getLibelleReparation();?>

</p></div><br>


<div class="info colonne">
    <?php
    if ($mode=="edit")
    {
   echo '<div class="paire"><p><label for="libelleReparation">Libelle de la reparation : </label><input name="libelleReparation" value="'.$reparation->getIdReparation().'"></p></div>';
    echo '<div class="impaire"><p><label for="prixReparation">Prix de la reparation : </label><input name="prixReparation" value="'.$reparation->getPrixReparation().'"></p></div>';
    echo '<div class="paire"><p><label for="dateReparation">Date de la reparation : </label><input name="dateReparation" value="'.$reparation->getDateReparation().'"></p></div>';
    echo '<div class="impaire"><p><label for="idVehicule">Vehicule : </label><input name="idVehicule" value="'.$reparation->getIdVehicule().'"></p></div>';
    }
    else
    {
    echo '<div class="paire"><p>libelle : '.$reparation->getIdReparation().'</p></div>';
    echo '<div class="impaire"><p>prix : '.$reparation->getPrixReparation().'</p></div>';
    echo '<div class="paire"><p>Date de Reparation : '.$reparation->getdateReparation().'</p></div>';
    echo '<div class="impaire"><p>Vehicule : '.$reparation->getIdVehicule().'</p></div>';
} 
    ?>
</div> 

    
  
<?php
 switch ($mode)
{
    case "ajout":    
    {
        echo '    <button type="submit">Ajouter un reparation</button>';
        break;
    }
    case "edit":   
    {
        echo '    <button type="submit">Modifier les détails du reparation</button>';
        break;
    }
    case "delete":    
    {
        echo '    <button type="submit">Supprimer le reparation</button>';
        break;
    }
}
   echo '<button><a href="index.php?codePage=listereparation">Retour</a></button>
</form>';

