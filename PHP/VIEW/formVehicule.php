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
        <input name="idVehicule"  value="' . $client->getIdVehicule() . '" type="hidden" />';
            break;
        }
    case "edit":    { //il n'y a pas d'action sur le formulaire, juste le bouton retour
        echo '<form >  
    <input name="idVehicule"  value="' . $client->getIdVehicule() . '" type="hidden" />';
        break;
    }
}


?>
 <div class="titre info centre">
     
 <h2>'.<?php $vehicule->getImmatriculationVehicule()?>.'</h2>'

</div>

<div class="info colonne">
    <div class="paire"><p><?php echo "Téléphone : ".$client->getTelClient();?></p></div>
    <div class="impaire"><p><?php echo "Adresse : ".$client->getAdresseClient();?></p></div>
    <div class="paire"><p><?php echo "Code Postal : ".$client->getCpClient();?></p></div>
    <div class="impaire"><p><?php echo "Ville : ".$client->getVilleClient();?></p></div>
</div> 
