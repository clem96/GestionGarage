<?php
$conteur=0;
$liste = PiecesManager::getList();

echo'<div class="info colonne">';
foreach($liste as $piece)
{
    $conteur++;
    //'if($conteur%2=0){echo'.paire'}else{echo'impaire'}'
echo'<div class="paire"><p>'.$piece->getLibelle().'</p></div>';
}
echo'</div>';


