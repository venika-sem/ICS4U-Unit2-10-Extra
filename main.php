<?php

  require_once 'Truck.php';
  require_once 'Bike.php';
  
  $bmx = new Bike('Red', 40, 0, 0);
  
  echo "Created Bmx bike.\nStatus:\n";
  $bmx->status();
  $bmx->cadenceStatus();
  
  $bigTruck = new Truck('Grey', 0, 200, 'HGC-3456F');
  
  echo "\nCreated a Truck.\nStatus:\n";
  $bigTruck->setTires(6);
  $bigTruck->status();
  $bigTruck->plateStatus();
  
  echo "\nDone.\n";
?>
