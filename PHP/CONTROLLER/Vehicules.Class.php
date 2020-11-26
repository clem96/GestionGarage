<?php

class Vehicules
{

    /*****************Attributs***************** */

    private $_idVehicule;
    private $_marqueVehicule;
    private $_modeleVehicule;
    private $_immatriculationVehicule;
    private $_klmVehicule;
    private $_idClient;

    /*****************Accesseurs***************** */

    public function getIdVehicule()
    {
        return $this->_idVehicule;
    }

    public function setIdVehicule($idVehicule)
    {
        $this->_idVehicule = $idVehicule;
    }

    public function getMarqueVehicule()
    {
        return $this->_marqueVehicule;
    }

    public function setMarqueVehicule($marqueVehicule)
    {
        $this->_marqueVehicule = $marqueVehicule;
    }

    public function getModeleVehicule()
    {
        return $this->_modeleVehicule;
    }

    public function setModeleVehicule($modeleVehicule)
    {
        $this->_modeleVehicule = $modeleVehicule;
    }

    public function getImmatriculationVehicule()
    {
        return $this->_immatriculationVehicule;
    }

    public function setImmatriculationVehicule($immatriculationVehicule)
    {
        $this->_immatriculationVehicule = $immatriculationVehicule;
    }

    public function getKlmVehicule()
    {
        return $this->_klmVehicule;
    }

    public function setKlmVehicule(int $klmVehicule)
    {
        $this->_klmVehicule = $klmVehicule;
    }

    public function getIdClient()
    {
        return $this->_idClient;
    }

    public function setIdClient(int $idClient)
    {
        $this->_idClient = $idClient;
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
        foreach ($data as $key => $value) {
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
        return "idVehicule : ".$this->getIdVehicule()."\n"."marqueVehicule : ".$this->getMarqueVehicule()."\n"."modeleVehicule : ".$this->getModeleVehicule()."\n"."immatriculationVehicule : ".$this->getImmatriculationVehicule()."\n"."klmVehicule : ".$this->getKlmVehicule()."\n";
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
