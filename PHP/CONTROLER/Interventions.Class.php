<?php 

class Interventions
{
  
    /*****************Attributs***************** */
    private $_idPieces;
    private $_idReparation;
    private $_quantitePiece;

    /*****************Accesseurs***************** */
    
    public function getIdPieces()
    {
        return $this->_idPieces;
    }

    public function setIdPieces($idPieces)
    {
        $this->_idPieces = $idPieces;
    }
    
    public function getIdReparation()
    {
        return $this->_idReparation;
    }

    public function setIdReparation($idReparation)
    {
        $this->_idReparation = $idReparation;
    }

    public function getQuantitePiece()
    {
        return $this->_quantitePiece;
    }

    public function setQuantitePiece($quantitePiece)
    {
        $this->_quantitePiece = $quantitePiece;
    }
    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /*****************Autres Méthodes***************** */
    
    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "idReparation : ". $this->getIdReparation()."idPiece : ". $this->getIdPieces()."QuantitePiece : ". $this->getQuantitePiece();
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] obj
     * @return bool
     */
    public function equalsTo($obj)
    {
        return true;
    }
    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }

   

 

}