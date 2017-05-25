<?php

class Base 
{

    private $_attributes;

    public function __get($name) {
        if(isset($this->_attributes[$name])) {
            return $this->_attributes[$name];
        } else {
            return false;
        }
    }

    public function __set($name,$value) {
        $this->_attributes[$name] = $value;
    }

}
