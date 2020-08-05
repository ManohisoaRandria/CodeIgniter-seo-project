<?php
namespace App\Entities;

use DateTime;
use DateTimeZone;
class Commentaire
{
    protected $id;
    protected $pseudo;
    protected $contenu;
    protected $article;
    protected $datepublication;

   
    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id)
    {
        $this->id = $id;
    }

   
    public function getPseudo()
    {
        return $this->pseudo;
    }

    
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

   
    public function getContenu()
    {
        return $this->contenu;
    }

    
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

   
    public function getArticle()
    {
        return $this->article;
    }

    
    public function setArticle($article)
    {
        $this->article = $article;
    }

   
    public function getDatepublication()
    {
        $date=new DateTime($this->datepublication,new DateTimeZone('Africa/Nairobi'));
        return $date;
    }

    
    public function setDatepublication($datepublication)
    {
        $this->datepublication = $datepublication;
    }
}