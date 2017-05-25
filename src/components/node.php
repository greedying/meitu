<?php

class Node 
{
    public $pre = null;
    public $next = null;

    public $name = null;
    public $value = null;

    public function __construct($name=null, $value=null) {
        if (empty($name) || empty($value)) {
            exit('name value不能为空');
        }
        $this->name = $name;
        $this->value = $value;
    }

}
