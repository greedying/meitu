<?php

require_once('../interface/interfaceObserver.php');

class Observer2 implements InterfaceObserver
{
     public function update($name, $newValue, $oldValue) {
         echo "observer 2 do nothing\n";
     }

}
