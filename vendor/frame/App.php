<?php

namespace vendor\frame;


class App {
    protected $id = null;
    public $defaultController = 'SiteController';
    public $defaultFunction = 'index';

    public function run() {
        $path = $_SERVER["REQUEST_URI"];
        $path = trim($path, "/");
        $path = explode("/", $path);

        if (empty($path[0])) {
            $className = 'controllers\\' . $this->defaultController;
            $functionName = $this->defaultFunction;
        } else {
            $className = ucfirst($path[0]) . 'Controller';
            $className = 'controllers\\' . $className;

            if (isset($path[1])) {
                $functionName = explode('?', $path[1])[0];
            } elseif (isset($path[1])) {
                $functionName = $path[1];
            } else {
                $functionName = $this->defaultFunction;
            }

            if (isset($path[2])) {
                $this->id = $path[2];
            }
        }

        $obj = new $className();

        if (empty($this->id)) {
            $obj->$functionName();
        } else {
            $obj->$functionName($this->id);
        }
    }
}
