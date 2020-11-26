<?php

class Factures
{
  
    /*****************Attributs***************** */
    private $_idFacture;
    private $_dateFacture;

    /*****************Accesseurs***************** */

    public function getIdFacture()
    {
        return $this->_idFacture;
    }

    public function setIdFacture(int $idFacture)
    {
        $this->_idFacture = $idFacture;
    }

    public function getDateFacture()
    {
        return $this->_dateFacture;
    }

 
    public function setDateFacture($dateFacture)
    {
        $this->_dateFacture = $dateFacture;

        return $this;
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
        return $this->getIdFacture()." - ".$this->getDateFacture();
    }

    
}