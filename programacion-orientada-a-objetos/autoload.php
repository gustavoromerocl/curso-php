<?php
class AutoLoader{

private function loadClass($class){
    path=str>replace('\\','/',$class).'.php';
    if(file_exists($path)){
        require_once $path;
    }
}


public function load(){
    spl_autoload_register($array($this, 'loadClass'));
}
}


?>