<?php
namespace App\Entities;

use DateTime;
use DateTimeZone;

class Article
{
    protected $id;
    protected $titre;
    protected $description;
    protected $contenu;
    protected $photo;
    protected $categorie;
    protected $datepublication;
    protected $vue;
    protected $sponsorise;
    protected $etat;
    protected $nbcomments;

   
    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id)
    {
        $this->id = $id;
    }

   
    public function getTitre()
    {
        return $this->titre;
    }
    public function getTitreUrl()
    {
        return $this->replaceAccents($this->titre);
    }

    public function replaceAccents($str) {
        $search = explode(",",
        "ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,ø,Ø,Å,Á,À,Â,Ä,È,É,Ê,Ë,Í,Î,Ï,Ì,Ò,Ó,Ô,Ö,Ú,Ù,Û,Ü,Ÿ,Ç,Æ,Œ");
        $replace = explode(",",
        "c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,o,O,A,A,A,A,A,E,E,E,E,I,I,I,I,O,O,O,O,U,U,U,U,Y,C,AE,OE");
        $enleve=str_replace($search, $replace,$str);
		$spec=str_replace(' ', '-', $enleve);
		$test=preg_replace('/[^A-Za-z0-9\-]/', '', $spec);
		return strtolower(preg_replace('/-{2,}/', '-', $test));
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

   
    public function getDescription()
    {
        return $this->description;
    }

    
    public function setDescription($description)
    {
        $this->description = $description;
    }

   
    public function getContenu()
    {
        return $this->contenu;
    }

    
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

   
    public function getPhoto()
    {
        return $this->photo;
    }

    
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

   
    public function getCategorie()
    {
        return $this->categorie;
    }

    
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

   
    public function getDatePublication()
    {
        $date=new DateTime($this->datepublication,new DateTimeZone('Africa/Nairobi'));
        return $date;
    }

    
    public function setDatePublication($datepublication)
    {
        $this->datepublication = $datepublication;
    }

   
    public function getVue()
    {
        return $this->vue;
    }

    
    public function setVue($vue)
    {
        $this->vue = $vue;
    }

   
    public function getSponsorise()
    {
        return $this->sponsorise;
    }

    
    public function setSponsorise($sponsorise)
    {
        $this->sponsorise = $sponsorise;
    }

   
    public function getEtat()
    {
        return $this->etat;
    }

    
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

   
    public function getNbComments()
    {
        return $this->nbcomments;
    }

    
    public function setNbComments($nbcomments)
    {
        $this->nbcomments = $nbcomments;
    }
}
