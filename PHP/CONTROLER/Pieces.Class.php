<?php
class Pieces
{
  
    /*****************Attributs***************** */
    private $_idPiece;
    private $_libelle;
    private $_prix;

    /*****************Accesseurs***************** */

    public function getIdPiece()
    {
        return $this->_idPiece;
    }

    public function setIdPiece($idPiece)
    {
        $this->_idPiece = $idPiece;
    }

    public function getLibelle()
    {
        return $this->_libelle;
    }

    public function setLibelle($libelle)
    {
        $this->_libelle = $libelle;
    }

    public function getPrix()
    {
        return $this->_prix;
    }

    public function setPrix($prix)
    {
        $this->_prix = $prix;
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
      public static function compareTo($obj1, $obj2)
    {
        return 0;
    }
    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "idPiece : ". $this->getIdPiece()."Libelle : ".$this->getLibelle()."Prix : ".$this->getPrix();
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
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
    


}