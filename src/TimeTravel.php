<?php

namespace App;

class TimeTravel {
    private $start;
    private $end;
    
    public function __construct() 
    {
        $this->start = new \DateTime("1985-12-31");
    }
    
    public function getTravelInfo() : string
    {
        return 'Il y a ? années, ? mois, ? jours, ? heures, ? minutes et ? secondes entre les deux dates';
    }
    
    public function findDate($interval) 
    {
        $this->start->add(new \DateInterval('PT' . $interval . 'S'));
    }
    
    public function backToFutureStepByStep($step) : array
    {
            return [];
    }
    
    function getStart() 
    {
        return $this->start;
    }

    function getEnd() 
    {
        return $this->end;
    }

    function setStart($start) 
    {
        $this->start = $start;
    }

    function setEnd($end) 
    {
        $this->end = $end;
    }
}
