<?php
use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table      = 'article';
    protected $primaryKey = 'id';

    protected $returnType     = '\App\Entities\Article';
    public function getRecent(){
        $query=$this->db->query('select * from nombrecoms order by datePublication desc');
        $res= $query->getResult('\App\Entities\Article');
        return $res;
    }
    public function getPopular(){
        $query=$this->db->query('select * from nombrecoms order by nbcomments desc limit 3');
        $res= $query->getResult('\App\Entities\Article');
        return $res;
    }
    public function getReportage(){
        $query=$this->db->query("select * from nombrecoms where categorie='reportage'");
        $res= $query->getResult('\App\Entities\Article');
        return $res;
    }
    public function getAllCategorie(){
        $query=$this->db->query("select * from CategorieArticle");
        $res= $query->getResult('\App\Entities\CategorieArticle');
        return $res;
        
    }
    public function getByCategorie($categ){
        $query=$this->db->query("select * from nombrecoms where categorie='".$categ."'");
        $res= $query->getResult('\App\Entities\Article');
        return $res;
    }
    public function getMostView(){
        $query=$this->db->query('select * from nombrecoms order by vue desc limit 3');
        $res= $query->getResult('\App\Entities\Article');
        return $res;
    }
    public function getComments($id){
        $query=$this->db->query("select * from commentaire where article='".$id."'");
        $res= $query->getResult('\App\Entities\Commentaire');
        return $res;
    }
    public function getOne($id){
        $query=$this->db->query("select * from nombrecoms where id='".$id."'");
        $res= $query->getResult('\App\Entities\Article');
        return $res;
    }
    public function increaseView($id){
        // $query = $this->db->query('select nextval(\'seq_users\') as id');
		// $id = $query->getResult()[0]->id;
        $one=$this->getOne($id);
        $vue=$one[0]->getVue();
        if ($this->db->simpleQuery("update article set vue=".($vue+1)." where id='".$id."'"))
        {
               return true;
        }else{
            return false;
        }
    }
    //insert
    //update
    //delete
}