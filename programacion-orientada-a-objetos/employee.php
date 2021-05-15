<?php
require_once('person.php');
class Employee extends Person{
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
}
?>