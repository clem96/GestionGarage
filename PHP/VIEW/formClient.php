<?php
$mode = $_GET['mode'];
if (isset($_GET['id']))  // si l'id est renseigné
{
    $idRecu = $_GET['id'];
    if ($idRecu != false)
    {
        $client = ClientsManager::findById($idRecu);
    }
}
switch ($mode)
{
    case "ajout":    {
            echo '<form action="index.php?codePage=actionClient&mode=ajout" method="POST">';
            break;
        }
    case "modif":    {
            echo '<form action="index.php?codePage=actionClient&mode=modif" method="POST">
        <input name="idClient"  value="' . $client->getIdClient() . '" type="hidden" />';
            break;
        }
    case "delete":    {
            echo '<form action="index.php?codePage=actionClient&mode=delete" method="POST">
        <input name="idClient"  value="' . $client->getIdClient() . '" type="hidden" />';
            break;
        }
    case "edit":    { //il n'y a pas d'action sur le formulaire, juste le bouton retour
        echo '<form >  
    <input name="idClient"  value="' . $client->getIdClient() . '" type="hidden" />';
        break;
    }
}


?>
 <div class="titre info centre"><p>
     
 <?php echo $client->getNomClient()."".$client->getPrenomClient();?>

</p></div><br>


<div class="info colonne">
    <?php
    if ($mode=="edit")
    {
    echo '<div class="paire"><p>Téléphone : '.$client->getTelClient().'</p></div>';
    echo '<div class="impaire"><p>Adresse : '.$client->getAdresseClient().'</p></div>';
    echo '<div class="paire"><p>Code Postal : '.$client->getCpClient().'</p></div>';
    echo '<div class="impaire"><p>Ville : '.$client->getVilleClient().'</p></div>';
    }
    else
    {
    echo '<div class="paire"><p><label for="nomClient">Nom : </label><input name="nomClient" value="'.$client->getNomClient().'"></p></div>';
    echo '<div class="impaire"><p><label for="prenomClient">Prenom : </label><input name="prenomClient" value="'.$client->getPrenomClient().'"></p></div>';
    echo '<div class="paire"><p><label for="telClient">Téléphone : </label><input name="telClient" value="'.$client->getTelClient().'"></p></div>';
    echo '<div class="impaire"><p><label for="adresseClient">Adresse : </label><input name="adresseClient" value="'.$client->getAdresseClient().'"></p></div>';
    echo '<div class="paire"><p><label for="cpClient">Code Postal : </label><input name="cpClient" value="'.$client->getCpClient().'"></p></div>';
    echo '<div class="impaire"><p><label for="villeClient">Ville : </label><input name="villeClient" value="'.$client->getVilleClient().'"></p></div>';
}
    ?>
</div> 

    
  
<?php
 switch ($mode)
{
    case "ajout":    
    {
        echo '    <button type="submit">Ajouter un client</button>';
        break;
    }
    case "modif":   
    {
        echo '    <button type="submit">Modifier les détails du client</button>';
        break;
    }
    case "delete":    
    {
        echo '    <button type="submit">Supprimer le client</button>';
        break;
    }
}
   echo '<button><a href="index.php?codePage=listeClient">Retour</a></button>
</form>';

