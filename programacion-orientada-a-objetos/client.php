<?php
require_once('person.php');
class Client extends Person{
    private $common;
    private $correo;
    
    function __construct(){
        echo 'Inicio';
        $this->common='';
        $this->email='default@email.com';
    }


    function eat(){
        echo parent::talk();
    }


    public function getCommon()
    {
        return $this->common;
    }


    public function setCommon($common)
    {
        $this->common = $common;

    }


    public function getCorreo()
    {
        return $this->correo;
    }


    public function setCorreo(String $correo)
    {
        $this->correo = $correo;

    }

    function __destruct(){
        echo 'Limpieza';
    }
}
?>