<?php

class BinTree 
{
    public $head = null;
    public $end = null;

    public $current = null;


    // position head or end
    public function add($key, $value, $position="head") {
      $node = new Node($key, $value);
      if (!$this->head && !$this->end) {
          $this->head = $this->end = $node;
          return;
      }

      if ($position == 'head') {
          $head = $this->head;
          $this->head = $node;
          $node->next = $head;
          $head->pre = $node;
      } else if ($position == 'end') {
          $end = $this->end;
          $end->next = $node;
          $this->end = $node;
          $node->pre = $end;
      }
    }

    public function del($key) {
        $node = $this->selectNode($key);

        if ($node) {
            $pre = $node->pre;
            $next = $node->next;
            $pre && $pre->next = $next;
            $next && $next->pre = $pre;
            unset($node);
            return true;
        } else {
            return false;
        }
    }
    public function select($key) {
        $node = $this->selectNode($key);
        if ($node) {
            return $node->value;
        } else {
            return false;
        }
    }


    public function modify($key, $value) {
        $node = $this->selectNode($key);
        if ($node) {
            $node->value = $value;
            return true;
        } else {
            return false;
        }
    }

    public function __toString() {
        $node = $this->head;
        $string = "";
        while(true) {
           if ($node) {
               if ($string) {
                   $string .= " => (" . $node->name . ":" . $node->value . ")";
               } else {
                   $string .= " (" . $node->name . ":" . $node->value . ")";
               }
               $node = $node->next;
           } else {
               break;
           }
        }
        return  $string;
    }

    public function selectNode($key) {
        $node = $this->head;
        if (!$node) {
            return false;
        }
        while(true) {
            if ($node->name == $key) {
                return $node;
            } else {
                if ($node->next) {
                    $node = $node->next;
                } else {
                    return false;
                }
            }
        }
    }

}
