<?php
namespace models;
use PDO;
use vendor\frame\Model;

class Comment extends Model{

    public function tableName(){
        return "comment";
    }

    public function getCommentByIdPost($post_id){
        $sql = 'SELECT comment.*, user.username FROM comment
        join user on user.id = comment.user_id                        
                                WHERE comment.post_id = :post_id';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['post_id' => $post_id]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public function addComment($data){
        $sql = "INSERT INTO comment (post_id, user_id, message) VALUES(?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$data['post_id'], $data['user_id'], $data['message']]);
        return $stmt;
    }
}