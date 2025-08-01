<?php
namespace models;

use vendor\frame\Model;

class Comment extends Model{

    public function tableName(){
        return "comment";
    }
}