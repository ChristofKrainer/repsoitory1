<?php
require_once("Auto.class.php");
class Sportwagen extends Auto{
    private $hoechstgeschwindigkeit = 250; 
    public function beschleunigen($aenderung) {
        if ($this->getGeschwindigkeit() + $aenderung < $this->hoechstgeschwindigkeit) {
        $this->setGeschwindigkeit(
        $this->getGeschwindigkeit() + $aenderung);
        echo "Die aktuelle Geschwindigkeit des Sportwagens beträgt "
            .$this->getGeschwindigkeit() ."<br />";
    }
    
    else{
        $this->setGeschwindigkeit($this->hoechstgeschwindigkeit);
        echo "Die maximale Geschwindigkeit des Sportwagens beträgt "
            .$this->hoechstgeschwindigkeit ."<br />";
    }
    }
    public function bremsen($aenderung) {
        if ($this->getGeschwindigkeit() - $aenderung < 0) {
            $this->setGeschwindigkeit(0);
        }
        else {
            $this->setGeschwindigkeit($this->getGeschwindigkeit() - $aenderung);
        }
        echo "Die aktuelle Geschwindigkeit des Sportwagens beträgt "
            .$this->getGeschwindigkeit() ."<br />";
    }
}


?>