<?php
class FacturesManager
{
	public static function add(Factures $obj)
	{
		 $db=DbConnect::getDb();
		 $q=$db->prepare("INSERT INTO factures (dateFacture) VALUE 
		 (:dateFacture)");
		 $q->bindValue(":dateFacture", $obj->getDateFacture());
		 $q->execute();
	}

	public static function update(Factures $obj)
 	{
		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE factures SET idFacture=:idFacture,dateFacture=:dateFacture 
        WHERE idFacture=:idFacture");
        $q->bindValue(":idFacture", $obj->getIdFacture());
		$q->bindValue(":dateFacture", $obj->getDateFacture());
		$q->execute();
 	}
 
 	public static function delete(Factures $obj)
 	{
		$db=DbConnect::getDb();
		$db->exec("DELETE FROM factures WHERE idFacture=".$obj->getIdFacture());
 	}

    public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM factures WHERE idFacture =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Factures($results);
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
		$q = $db->query("SELECT * FROM factures");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Factures($donnees);
			}
		}
		return $liste;
	}

	public static function getListByReparation(Reparations $obj)
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM factures WHERE idFacture=".$obj->getIdFacture());
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Factures($donnees);
			}
		}
		return $liste;
	}
}