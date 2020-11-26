<?php
class ReparationsManager
{
	public static function add(Reparations $obj)
	{
		 $db=DbConnect::getDb();
		 $q=$db->prepare("INSERT INTO Reparations (libelleReparation,prixReparation,dateReparation,idVehicule,idFacture) VALUE 
		 (:libelleReparation,:prixReparation,:dateReparation,:idVehicule,:idFacture)");
		 $q->bindValue(":libelleReparation", $obj->getLibelleReparation());
		 $q->bindValue(":prixReparation", $obj->getPrixReparation());
		 $q->bindValue(":dateReparation", $obj->getDateReparation());
		 $q->bindValue(":idVehicule", $obj->getIdVehicule());
		 $q->bindValue(":idFacture", $obj->getIdFacture());
		 $q->execute();
	}

	public static function update(Reparations $obj)
 	{
		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Reparations SET idReparation=:idReparation,libelleReparation=:libelleReparation,prixReparation=:prixReparation,dateReparation=:dateReparation,idVehicule=:idVehicule,idFacture=:idFacture 
		WHERE idReparation=:idReparation");
		$q->bindValue(":idReparation", $obj->getIdReparation());
		$q->bindValue(":libelleReparation", $obj->getLibelleReparation());
		$q->bindValue(":prixReparation", $obj->getPrixReparation());
		$q->bindValue(":dateReparation", $obj->getDateReparation());
		$q->bindValue(":idVehicule", $obj->getIdVehicule());
		$q->bindValue(":idFacture", $obj->getIdFacture());
		$q->execute();
 	}
 
 	public static function delete(Reparations $obj)
 	{
		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Reparations WHERE idReparation=".$obj->getIdReparation());
 	}

    public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Reparations WHERE idReparation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Reparations($results);
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
		$q = $db->query("SELECT * FROM Reparations");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Reparations($donnees);
			}
		}
		return $liste;
	}
}