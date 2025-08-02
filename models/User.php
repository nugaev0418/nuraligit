<?php
namespace models;
use PDO;
use vendor\frame\Model;

class User extends Model  {

   
    public function tableName(){
        return "user";
    }
    public function login($data){
       
       $user = $this->getByusername($data["username"]);
       if(empty($user)){
        echo"User not found";
       }else{
        if($data["password"] === $user->password){
           $_SESSION["user"] = $user;
        header("Location: /site/index");
        }else{
            echo"wrong password";
        }
        
       }
    }

    public function getByusername($username){
        $sql = "SELECT * FROM {$this->tableName()} WHERE username = :username";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['username' => $username]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
   
    }
