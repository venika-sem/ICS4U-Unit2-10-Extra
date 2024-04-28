<?php

  require_once 'Vehicle.php';
  
  class Truck extends Vehicle {
      private $licensePlate;
  
      public function __construct($color = 'unknown', $maxSpeed = 0, $speed = 0, $licensePlate = 'unknown', $tireNum = 0) {
          parent::__construct($speed, $maxSpeed, $color, $tireNum);
          $this->licensePlate = $licensePlate;
      }
  
      public function brake($brakePower, $brakeTime, $airPressure = 0) {
          parent::brake($brakePower, $brakeTime);
          $this->speed -= ($airPressure * $brakeTime);
          echo "New Speed: {$this->speed}\n";
      }
  
      public function plateStatus() {
          echo "-> License Plate: {$this->licensePlate}\n";
      }
  
      public function applyAirStatus() {
          echo "New Speed: {$this->speed}\n";
      }
  
      public function setTires($tireNum) {
          $this->tireNum = $tireNum;
      }
  }
?>
