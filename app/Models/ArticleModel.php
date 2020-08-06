<?php

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table      = 'article';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'titre',
        'description',
        'contenu',
        'photo',
        'categorie',
        'datepublication',
        'vue',
        'sponsorise',
        'etat',
        'nbcomments'
    ];

    protected $returnType     = '\App\Entities\Article';
    public function getRecent()
    {
        $query = $this->db->query('select * from nombrecoms order by datePublication desc');
        $res = $query->getResult('\App\Entities\Article');
        return $res;
    }
    public function getAll()
    {
        $query = $this->db->query('select * from nombrecoms');
        $res = $query->getResult('\App\Entities\Article');
        return $res;
    }
    public function getPopular()
    {
        $query = $this->db->query('select * from nombrecoms order by nbcomments desc limit 3');
        $res = $query->getResult('\App\Entities\Article');
        return $res;
    }
    public function getReportage()
    {
        $query = $this->db->query("select * from nombrecoms where categorie='reportage'");
        $res = $query->getResult('\App\Entities\Article');
        return $res;
    }
    public function getAllCategorie()
    {
        $query = $this->db->query("select * from CategorieArticle");
        $res = $query->getResult('\App\Entities\CategorieArticle');
        return $res;
    }
    public function getByCategorie($categ)
    {
        $query = $this->db->query("select * from nombrecoms where categorie='" . $categ . "'");
        $res = $query->getResult('\App\Entities\Article');
        return $res;
    }
    public function getMostView()
    {
        $query = $this->db->query('select * from nombrecoms order by vue desc limit 3');
        $res = $query->getResult('\App\Entities\Article');
        return $res;
    }
    public function getComments($id)
    {
        $query = $this->db->query("select * from commentaire where article='" . $id . "'");
        $res = $query->getResult('\App\Entities\Commentaire');
        return $res;
    }
    public function getOne($id)
    {
        $query = $this->db->query("select * from nombrecoms where id='" . $id . "'");
        $res = $query->getResult('\App\Entities\Article');
        return $res;
    }
    public function increaseView($id)
    {
        // $query = $this->db->query('select nextval(\'seq_users\') as id');
        // $id = $query->getResult()[0]->id;
        $one = $this->getOne($id);
        $vue = $one[0]->getVue();
        if ($this->db->simpleQuery("update article set vue=" . ($vue + 1) . " where id='" . $id . "'")) {
            return true;
        } else {
            return false;
        }
    }
    //insert
    public function addArticle($data){

        if ($this->db->simpleQuery("insert into article values('".$data['id']."','".$data['titre']."',
        '".$data['description']."','".$data['contenu']."','".$data['photo']."','".$data['categorie']."','".$data['datepublication']."',
        ".$data['vue'].",".$data['sponsorise'].",".$data['etat'].")")) {
            return true;
        } else {
            return false;
        }
    }
    public function addCategorie($data){

        if ($this->db->simpleQuery("insert into categorieArticle values('".$data['id']."','".$data['nom']."',
        '".$data['etat']."')")) {
            return true;
        } else {
            return false;
        }
    }
    public function addComments($data){
        if ($this->db->simpleQuery("insert into commentaire values('".$data['id']."','".$data['pseudo']."',
        '".$data['contenu']."','".$data['article']."','".$data['datepublication']."')")) {
            return true;
        } else {
            return false;
        }
    }
    //update
    public function updateArticle($data){
        $sql="";
        if(isset($data['photo'])){
            $sql="update article set titre='".$data['titre']."',
            description='".$data['description']."',contenu='".$data['contenu']."',photo='".$data['photo']."',categorie='".$data['categorie']."'
             where id='".$data['id']."'";
        }else{
            $sql="update article set titre='".$data['titre']."',
            description='".$data['description']."',contenu='".$data['contenu']."',categorie='".$data['categorie']."'
             where id='".$data['id']."'";
        }
        if ($this->db->simpleQuery($sql)) {
            return true;
        } else {
            return false;
        }
    }
    //delete
}
