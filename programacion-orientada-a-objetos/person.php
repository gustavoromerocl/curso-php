<?php
class Person{
    $name;
    $lastname;
    $sex;
    $nationality;
    $age;
    static $color="Rojo";
    function run(){

    }

    function see(){
        echo "Yo veo una camisa ".self::$color;
        $this->name; 
        $this->run();
    }

    function talk(){

    }
}
?>