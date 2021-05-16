<?php
class Person{
    public $name;
    public $lastname;
    public $sex;
    public $nationality;
    public $age;
    static $color="Rojo";

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

    }

    function run(){
        echo "\nMetodo de la clase padre";
    }

    function see(){
        echo "Yo veo una camisa ".self::$color;
        $this->name;  //trae un atributo
        $this->run(); //trae un metodo 
        $this->sendOrder('see');
    }

    protected function talk(){
        echo "Mi papa dijo que jugaria en la tarde conmigo xd";
    }

    private function sendOrder($order){
        switch($order){
            case 'run':
                echo "correr";
                break;
            case 'see':
                echo "\nver";
                break;
            case 'talk':
                echo "Hablar";
                break;
            default:
                echo "No se encontro la orden";
                break;
        }
    }

}
?>