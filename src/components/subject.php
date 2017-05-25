<?php

require_once('../interface/interfaceSubject.php');
require_once('../base/base.php');

class Subject extends Base Implements InterfaceSubject
{

    private $_observers = [];

    public function __set($name,$value) {
        $oldValue = $this->{$name};
        parent::__set($name, $value);
        $this->notify($name, $value, $oldValue);
    }

    public function register($observer) {
        $this->_observers[] = $observer;
    }

    public function notify($name, $newValue, $oldValue) {
        foreach ($this->_observers as $observer) {
            $observer->update($name, $newValue, $oldValue);
        }
    }


}
