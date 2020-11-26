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
    echo '<div class="paire"><p>Téléphone : '.$reparation->getTelreparation().'</p></div>';
    echo '<div class="impaire"><p>Adresse : '.$reparation->getAdressereparation().'</p></div>';
    echo '<div class="paire"><p>Code Postal : '.$reparation->getCpreparation().'</p></div>';
    echo '<div class="impaire"><p>Ville : '.$reparation->getVillereparation().'</p></div>';
    }
    else
    {
    echo '<div class="paire"><p><label for="nomreparation">Nom : </label><input name="nomreparation" value="'.$reparation->getNomreparation().'"></p></div>';
    echo '<div class="impaire"><p><label for="prenomreparation">Prenom : </label><input name="prenomreparation" value="'.$reparation->getPrenomreparation().'"></p></div>';
    echo '<div class="paire"><p><label for="telreparation">Téléphone : </label><input name="telreparation" value="'.$reparation->getTelreparation().'"></p></div>';
    echo '<div class="impaire"><p><label for="adressereparation">Adresse : </label><input name="adressereparation" value="'.$reparation->getAdressereparation().'"></p></div>';
    echo '<div class="paire"><p><label for="cpreparation">Code Postal : </label><input name="cpreparation" value="'.$reparation->getCpreparation().'"></p></div>';
    echo '<div class="impaire"><p><label for="villereparation">Ville : </label><input name="villereparation" value="'.$reparation->getVillereparation().'"></p></div>';
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
    case "modif":   
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

