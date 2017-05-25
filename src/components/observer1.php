<?php

require_once('../interface/interfaceObserver.php');

class Observer1 implements InterfaceObserver
{
     public function update($name, $newValue, $oldValue) {
         echo "observer 1, {$name}'s old value is {$oldValue}, new value is {$newValue}\n";
     }

}
