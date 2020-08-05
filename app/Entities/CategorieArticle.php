<?php
namespace App\Entities;

class CategorieArticle
{
    protected $id;
    protected $nom;
    protected $etat;

   
    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id)
    {
        $this->id = $id;
    }

   
    public function getNom()
    {
        return $this->nom;
    }

    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

   
    public function getEtat()
    {
        return $this->etat;
    }

    
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }
}