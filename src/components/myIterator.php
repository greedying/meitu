<?php

require_once('../base/base.php');

class MyIterator extends Base implements Iterator {

    private $position = 0;
    private $items = [];

    public function __construct($data) {
        $this->position = 0;
        foreach($data as $k => $v) {
            $this->items[$this->position] = [
                'key' => $k,
                'value' => $v,
             ];
            $this->position++;
        }
    }

    public function rewind() {
        $this->position = 0;
    }

    public function current() {
       return $this->items[$this->position]['value'];
    }

    public function key() {
       return $this->items[$this->position]['key'];
    }

    public function next() {
        $this->position++;
    }

    public function valid() {
        return isset($this->items[$this->position]);
    }

}
