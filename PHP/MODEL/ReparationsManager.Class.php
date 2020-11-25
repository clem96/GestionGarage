<?php
class ReparationsManager
{
    public static function add(Categories $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Reparations (Libelle) VALUES (:LibelleCategorie)");
		$q->bindValue(":LibelleCategorie", $obj->getLibelleCategorie());
		$q->execute();
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