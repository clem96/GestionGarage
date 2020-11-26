<?php
$mode = $_GET['mode'];
if (isset($_GET['id']))  // si l'id est renseigné
{
    $idRecu = $_GET['id'];
    if ($idRecu != false)
    {
        $vehicule = VehiculesManager::findById($idRecu);
    }
}
switch ($mode)
{
    case "ajout":    {
            echo '<form action="index.php?codePage=actionVehicule&mode=ajout" method="POST">';
            break;
        }
    case "modif":    {
            echo '<form action="index.php?codePage=actionVehicule&mode=modif" method="POST">
        <input name="idVehicule"  value="' . $vehicule->getIdVehicule() . '" type="hidden" />';
            break;
        }
    case "delete":    {
            echo '<form action="index.php?codePage=actionVehicule&mode=delete" method="POST">
        <input name="idVehicule"  value="' . $vehicule->getIdVehicule() . '" type="hidden" />';
            break;
        }
    case "edit":    { //il n'y a pas d'action sur le formulaire, juste le bouton retour
        echo '<form >  
    <input name="idVehicule"  value="' . $vehicule->getIdVehicule() . '" type="hidden" />';
        break;
    }
}


?>
 <div class="titre info centre">

</div>

    <div class="paire">
        <div></div>
        <div><label for="marqueVehicule">Marque</label></div>
        <div><input name="marqueVehicule" <?php if ($mode !="ajout") { echo 'value="'.$vehicule->getMarqueVehicule().'"';} if ($mode=="delete" || $mode=="edit") echo 'disabled'; ?>/></div>
        <div></div>
    </div>
    <div class="impaire">
        <div></div>
        <div><label for="modeleVehicule">Modele</label></div>
        <div><input name="modeleVehicule"  <?php if ($mode !="ajout") { echo 'value="'.$vehicule->getModeleVehicule().'"';} if ($mode=="delete" || $mode=="edit") echo 'disabled'; ?> /></div>
        <div></div>
    </div>
    <div class="paire">
        <div></div>
        <div><label for="immatriculationVehicule">Immatriculation</label></div>
        <div><input name="immatriculationVehicule" <?php if ($mode !="ajout") { echo 'value="'.$vehicule->getImmatriculationVehicule().'"';} if ($mode=="delete" || $mode=="edit") echo 'disabled'; ?> /></div>
        <div></div>
    </div>
    <div class="impaire">
        <div></div>
        <div><label for="klmVehicule">Kilometrage</label></div>
        <div><input name="klmVehicule" <?php if ($mode !="ajout") { echo 'value="'.$vehicule->getKlmVehicule().'"'; } else{echo 'value=""';} if ($mode=="delete" || $mode=="edit") echo 'disabled'; ?> /></div>
        <div></div>
    </div>
    <input name="idClient" <?php if ($mode !="ajout") { echo 'value="'.$vehicule->getIdClient().'"';} else{echo 'value="1"';}  ?>   type="hidden" >


<?php
 switch ($mode)
{
    case "ajout":    
    {
        echo '    <button type="submit">Ajouter un Vehicule</button>';
        break;
    }
    case "modif":   
    {
        echo '    <button type="submit">Modifier le Vehicule</button>';
        break;
    }
    case "delete":    
    {
        echo '    <button type="submit">Supprimer le véhicule</button>';
        break;
    }
}
   echo '<button><a href="index.php?codePage=listeVehicule">Retour</a></button>
</form>';