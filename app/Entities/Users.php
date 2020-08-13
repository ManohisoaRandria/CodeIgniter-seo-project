<?php namespace App\Entities;



class Users
{
    protected  $id;
    protected  $nom;
    protected  $pseudo;
    protected  $mdp;

   
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

   
    public function getPseudo()
    {
        return $this->pseudo;
    }

    
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

   
    public function getMdp()
    {
        return $this->mdp;
    }

    
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }
}