<?php

class Node 
{

    private $parent = null;
    private $index = 0;
    private $left = null;
    private $right = null;
    private $data = null;

    public function __construct($parent, $index, $left=null, $right = null, $value=null) {
        $this->parent = null;
        $this->index = 0;
        $this->left = null;
        $this->right = null;
        $this->data = null;
    }

    public function SearchNode($index) {
        // 待实现
    }
}
