<?php
namespace vendor\frame;

class Request{
    public $page =1;
    public $limit = 3;
    public function __construct(){
        if (isset($_GET["page"]) ){
            $this->page = $_GET["page"];
        }

    }
}