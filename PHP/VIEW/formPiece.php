<?php
$mode = $_GET['mode'];
if (isset($_GET['id']))  
{
$obj = PiecesManager::findById($_GET['id']);
}
switch ($mode)
{
    case "ajout":    {
            echo '<form action="formPiece.php?mode=ajout" method="POST">';
            break;
        }
    case "modif":    {
            echo '<form action="actionPiece.php?mode=modif" method="POST">
        <input name="idpiece"  value="' . $obj->getIdPiece() . '" type="hidden" />';
            break; 
        }
    case "delete":    {
            echo '<form action="actionPiece.php?mode=delete&id='.$obj->getIdPiece().'" method="POST">
        <input name="idpiece"  value="' . $obj->getIdPiece() . '" type="hidden" />';
            break;
        }
    case "edit":    {
        echo '<form >  
    <input name="idpiece"  value="' . $obj->getIdPiece() . '" type="hidden" />';
        break;
    }
}


?>
 <div class="titre info centre"><p>
     
 <?php echo $obj->getLibelle();?>

</p></div><br>


<div class="info colonne">
    <?php
    if ($mode=="edit")
    {
    echo '<div class="paire"><p>id piece : '.$obj->getIdPiece().'</p></div>';
    echo '<div class="impaire"><p>Libelle : '.$obj->getLibelle().'</p></div>';
    echo '<div class="paire"><p>Prix : '.$obj->getPrix().'</p></div>';
    }
    else
    {
        echo '<div class="paire"><input name="idPiece" value"'.$obj->getIdPiece().'" type="hidden"/></p></div>';
        echo '<div class="impaire"><input name="libellePiece" value"'.$obj->getLibelle().'"/></p></div>';
        echo '<div class="paire"><input name="prixPiece" value"'.$obj->getPrix().'"/></p></div>';
}
    ?>
</div> 

    
  
<?php
 switch ($mode)
{
    case "ajout":    
    {
        echo '    <button type="submit">Ajouter une piece</button>';
        break;
    }
    case "modif":   
    {
        echo '    <button type="submit">Modifier les détails de la piece</button>';
        break;
    }
    case "delete":    
    {
        echo '    <button type="submit">Supprimer la piece</button>';
        break;
    }
}
   echo '<button><a href="index.php?codePage=pageAccueil">Retour</a></button>
</form>';

