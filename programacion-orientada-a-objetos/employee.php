<?php
require_once('person.php');
require_once('respiration.php');
class Employee extends Person implements Respiration{
    private $position;
    private $schedule;
    
    function cook(){

    }


    public function getPosition()
    {
        return $this->position;
    }


    public function setPosition($position)
    {
        $this->position = $position;

    }

 
    public function getSchedule()
    {
        return $this->schedule;
    }


    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;

    }
    public function nasalCavity(){

    }
    public function mouth(){

    }
    public function trachea(){

    }
    public function bronchi(){

    }
    public function lungs(){
        
    }
}
?>