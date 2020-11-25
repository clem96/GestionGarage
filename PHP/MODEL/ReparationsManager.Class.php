<?php
class ReparationsManager
{
    public static function add(Reparations $obj)
    {
        $db=DBConnect::getDB();
        $q=$db->prepare("INSERT INTO Reparations(libelleReparation,prixReparation,dateReparation,")
    }
}