<?php

  require_once 'Vehicle.php';
  
  class Bike extends Vehicle {
      private $cadence;
  
      public function __construct($color = 'unknown', $maxSpeed = 0, $speed = 0, $cadence = 0, $tireNum = 2) {
          parent::__construct($speed, $maxSpeed, $color, $tireNum);
          $this->cadence = $cadence;
      }
  
      public function accelerate($accelerationPower, $accelerationTime) {
          $this->cadence += ($accelerationPower * $accelerationTime);
          return $this->cadence;
      }
  
      public function setCadence($cadence) {
          $this->cadence = $cadence;
          $this->speed = $cadence * 2;
      }
  
      public function ringBell() {
          echo "Ding ding!\n";
      }
  
      public function cadenceStatus() {
          echo "-> Cadence: {$this->cadence}\n";
      }
  }

?>
