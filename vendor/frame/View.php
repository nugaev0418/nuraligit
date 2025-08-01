<?php
namespace vendor\frame;

class View {
    public $title = 'Home Page';
    public $data;

    public function render($path, $data, $title ) {
      $this->title = $title;

        if(!is_null($data)) {
            extract($data);
        }
        
        include 'views/layout/main.php';
        include("views/" . $path . ".php");
        include 'views/layout/footer.php';
    }
}