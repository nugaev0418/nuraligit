<?php
namespace vendor\frame;


class Controller{
    public  $view;
    public function __construct(){
        $this->view = new View();
    }
    public function render($path, $data = null, $title = "Home page"){
        $this->view->render($path, $data,  $title);
    }
}