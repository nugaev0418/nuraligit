<?php
namespace models;
use PDO;
use vendor\frame\Model;

class Post extends Model  {

   
    public function tableName(){
        return "post";
    }

    public function getListNews() {
<<<<<<< HEAD
        $sql = "SELECT post.*, user.username, category.name FROM {$this->tableName()} 
    left join user on user.id = post.author
    left join category on category.id = post.category_id
=======
        $sql = "SELECT post.*, category.name, user.username FROM {$this->tableName()}
    left join user on user.id = post.author 
    left join category on category.id = post.category_id 
>>>>>>> 83f1caba8d04b493f41bdab7c9d4016e75d8bcd0
    LIMIT :limit OFFSET :offset";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':limit', $this->limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $this->offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

<<<<<<< HEAD
    public function getByIdNews($id) {
        $sql = "SELECT post.*, user.username, category.name FROM {$this->tableName()} 
        left join user on user.id = post.author
        left join category on category.id = post.category_id
         WHERE post.id = :id";
=======
    public function getByIdNEWS($id) {
        $sql = "SELECT post.*, category.name, user.username FROM {$this->tableName()} 
        left join user on user.id = post.author 
        left join category on category.id = post.category_id 
        WHERE post.id = :id";
>>>>>>> 83f1caba8d04b493f41bdab7c9d4016e75d8bcd0
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
<<<<<<< HEAD

    public function getPostById($post_id) {
        $sql = "SELECT p.*, u.username 
                FROM posts p
                JOIN users u ON p.user_id = u.id
                WHERE p.id = ?";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$post_id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

=======
>>>>>>> 83f1caba8d04b493f41bdab7c9d4016e75d8bcd0
}