<?php
namespace models;
use PDO;
use vendor\frame\Model;

class Post extends Model  {

   
    public function tableName(){
        return "post";
    }

    public function getListNews() {
        $sql = "SELECT post.*, category.name, user.username FROM {$this->tableName()}
    left join user on user.id = post.author 
    left join category on category.id = post.category_id 
    LIMIT :limit OFFSET :offset";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':limit', $this->limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $this->offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getByIdNEWS($id) {
        $sql = "SELECT post.*, category.name, user.username FROM {$this->tableName()} 
        left join user on user.id = post.author 
        left join category on category.id = post.category_id 
        WHERE post.id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}