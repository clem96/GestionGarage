<?php
class PiecesManager
{
    public static function add($obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO pieces (idPiece, libellePiece, prixPiece) VALUES (:id, :libelle, :prix)");
        $q->bindvalue(":id", $obj->getidPiece());
        $q->bindvalue(":libelle", $obj->getLibelle());
        $q->bindvalue(":prix", $obj->getPrix());
    }

    public static function upDate($obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE `pieces` SET `idPiece`=:id, libellePiece=:libelle, prixPiece=:prix");
        $q->bindvalue(":id", $obj->getidPiece());
        $q->bindvalue(":libelle", $obj->getLibelle());
        $q->bindvalue(":prix", $obj->getPrix());
    }

    public static function delete($obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM pieces WHERE idPiece = " . $obj->getIdPiece());
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $q = $db->query("SELECT * FROM pieces");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Pieces($donnees);
            }
        }
        return $liste;

    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM pieces WHERE idPiece =" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Pieces($results);
        } else {
            return false;
        }
    }

}
