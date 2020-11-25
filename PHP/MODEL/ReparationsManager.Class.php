<?php
class ReparationsManager
{
    public static function add(Reparations $obj)
    {
        $db=DBConnect::getDB();
        $q=$db->prepare("INSERT INTO Reparations(libelleReparation,prixReparation,dateReparation,
        idVehicule,idFacture) VALUES (:libelleReparation,:prixreparation,:dateDeReparartion,:idVehicule,
        :idFacture)");
        $q->bindValue(":libelleReparation",$obj->getLibelleReparation());
        $q->bindValue(":prixReparation",$obj->getPrixReparation());
        $q->bindValue(":dateReparation",$obj->getDateReparation());
        $q->bindValue(":idVehicule",$obj->getIdVehicule());
        $q->bindValue(":idFacture",$obj->getIdFacture());
    }

    public static function getList()
    {
        $db=DBConnect::getDb();
        $liste = [];
        $q=$db->query("SELECT * FROM Reparations");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC));
        {
            var_dump($donnees);
            if($donnees != false)
            {
                $liste[]=new Reparations ($donnees);
            }
        }
        return $liste;
    }
}