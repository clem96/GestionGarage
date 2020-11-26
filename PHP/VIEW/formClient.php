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

    <div>
        <label for="nomClient">Nom</label>
        <input name="nomClient" <?php if ($mode !="ajout") { echo 'value="'.$client->getNomClient().'"';} if ($mode=="delete" || $mode=="edit") echo 'disabled'; ?>/>
    </div>
    <div class="espace"></div>
     <div>
     <label for="prenomClient">Prenom</label>
     <input name="prenomClient"  <?php if ($mode !="ajout") { echo 'value="'.$client->getPrenomClient().'"';} if ($mode=="delete" || $mode=="edit") echo 'disabled'; ?> />
     </div>
     <div class="espace"></div>
     <div>
         <label for="adresseClient">Adresse</label>
         <input name="adresseClient" <?php if ($mode !="ajout") { echo 'value="'.$client->getAdresseClient().'"';} if ($mode=="delete" || $mode=="edit") echo 'disabled'; ?> />
     </div>
     <div class="espace"></div>
    <div></div>
  
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

