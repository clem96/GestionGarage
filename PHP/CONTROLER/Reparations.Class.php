<?php

class Reparations
{
  
    /*****************Attributs***************** */
    private $_idReparation;
    private $_libelleReparation;
    private $_prixReparation;
    private $_dateReparation;
    private $_idVehicule;
    private $_idFacture;

    /*****************Accesseurs***************** */
    public function getIdReparation()
    {
        return $this->_idReparation;
    }

    public function setIdReparation(int $idReparation)
    {
        $this->_idReparation = $idReparation;
    }

    public function getLibelleReparation()
    {
        return $this->_libelleReparation;
    }

    public function setLibelleReparation($libelleReparation)
    {
        $this->_libelleReparation = $libelleReparation;
    }

    public function getPrixReparation()
    {
        return $this->_prixReparation;
    }

    public function setPrixReparation(float $prixReparation)
    {
        $this->_prixReparation = $prixReparation;
    }

    public function getDateReparation()
    {
        return $this->_dateReparation;
    }

    public function setDateReparation($dateReparation)
    {
        $this->_dateReparation = $dateReparation;
    }

    public function getIdVehicule()
    {
        return $this->_idVehicule;
    }

    public function setIdVehicule(int $idVehicule)
    {
        $this->_idVehicule = $idVehicule;
    }

    public function getIdFacture()
    {
        return $this->_idFacture;
    }

    public function setIdFacture(int $idFacture)
    {
        $this->_idFacture = $idFacture;
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
        return $this->getLibelleReparation()." - "
            .$this->getPrixReparation()." - "
            .$this->getDateReparation()->format('d-m-Y');
    }
}
