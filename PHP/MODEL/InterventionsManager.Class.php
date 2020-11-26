<?php

class InterventionsManager 
{
	public static function add(Interventions $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Interventions (idIntervention, idReparation, quantitePiece, idPiece) VALUES (:idIntervention, :idReparation, :quantitePiece, :idPiece)");
		$q->bindValue(":idIntervention", $obj->getIdIntervention());
		$q->bindValue(":idPiece", $obj->getIdPiece());
		$q->bindValue(":idReparation", $obj->getIdReparation());
		$q->bindValue(":quantitePiece", $obj->getQuantitePiece());
		$q->execute();
	}

	public static function update(Interventions $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Interventions SET idIntervention=:idIntervention,idReparation=:idReparation,idPiece:idPiece,quantitePiece=:quantitePiece WHERE idIntervention=:idIntervention");
		$q->bindValue(":idIntervention", $obj->getIdIntervention());
		$q->bindValue(":idPiece", $obj->getIdPiece());
		$q->bindValue(":idReparation", $obj->getIdReparation());
		$q->bindValue(":quantitePiece", $obj->getQuantitePiece());
		$q->execute();
	}
	public static function delete(Interventions $obj)
	{
		 $db=DbConnect::getDb();

		//  $idRep = PiecesManager::getListByVehicule($obj);
     	// foreach ($idRep as $uneReparation)
     	// {
        // 	ReparationsManager::delete($uneReparation);
     	// }
		$db->exec("DELETE FROM Interventions WHERE idIntervention=" .$obj->getIdIntervention());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Interventions WHERE idIntervention =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Interventions($results);
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
		$q = $db->query("SELECT * FROM Interventions");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Interventions ($donnees);
			}
		}
		return $liste;
	}

	public static function getListByReparation(Reparations $obj)
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Interventions WHERE idReparation =".$obj->getIdReparation());

		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Interventions($donnees);
			}
		}
		return $liste;
	}
}