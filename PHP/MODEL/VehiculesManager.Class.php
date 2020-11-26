<?php

class VehiculesManager
{
 public static function add(Vehicules $obj)
 {
     $db=DbConnect::getDb();
     $q=$db->prepare("INSERT INTO Vehicules (marqueVehicule,modeleVehicule,immatriculationVehicule,klmVehicule,idClient) VALUE (:marqueVehicule,:modeleVehicule,:immatriculationVehicule,:klmVehicule,:idClient");
     $q->bindValue(":marqueVehicule", $obj->getMarqueVehicule());
     $q->bindValue(":modeleVehicule", $obj->getModeleVehicule());
     $q->bindValue(":immatriculationVehicule", $obj->getImmatriculationVehicule());
     $q->bindValue(":klmVehicule", $obj->getKlmVehicule());
     $q->bindValue(":idClient", $obj->getIdClient());
     $q->execute();
 }

 public static function update(Vehicules $obj)
 {
     $db=DbConnect::getDb();
     $q=$db->prepare("UPDATE Vehicules SET marqueVehicule=:marqueVehicule,modeleVehicule=:modeleVehicule,immatriculationVehicule=:immatriculationVehicule,klmVehicule=:klmVehicule,idClient=:idClient WHERE idVehicule=:idVehicule");
     $q->bindValue(":marqueVehicule", $obj->getMarqueVehicule());
     $q->bindValue(":modelVehicule", $obj->getModeleVehicule());
     $q->bindValue(":immatriculationVehicule", $obj->getImmatriculationVehicule());
     $q->bindValue(":klmVehicule", $obj->getKlmVehicule());
     $q->bindValue(":idClient", $obj->getIdClient());
     $q->execute();
 }
 
 public static function delete(Vehicules $obj)
 {
     $db=DbConnect::getDb();
     $idRep[] = $db->exec("SELECT idReparation FROM reparations WHERE idVehicule=".$obj->getIdVehicule());
     var_dump ($idRep);
     $db->exec("DELETE FROM Interventions WHERE idVehicule=".$obj->getIdVehicule());
     $db->exec("DELETE FROM Reparations WHERE idVehicule=".$obj->getIdVehicule());
     $db->exec("DELETE FROM Vehicules WHERE idVehicule=".$obj->getIdVehicule());

 }

 public static function findById($id)
 {
     $db=DbConnect::getDb();
     $id = (int) $id;
     $q=$db->query("SELECT * FROM Vehicules WHERE idVehicule =".$id);
     
     $results = $q->fetch(PDO::FETCH_ASSOC);
     if($results != false)
     {
         return new Vehicules($results);
     }
     else
     {
         return false;
     }
 }

 public static function getList()
 {
     $db=DbConnect::getDb();
     $liste = [];
     $q = $db->query("SELECT * FROM Vehicules");
     while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
     {
        if ($donnees != false)
        {
            $liste[] = new Vehicules($donnees);
        }
     }
     return $liste;
 }

}