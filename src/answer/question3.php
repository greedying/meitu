<?php

date_default_timezone_set('Asia/Shanghai');

$a = 1;
function func($a){
    echo $a . "\n"; 
    $a = 100;
}
func($a); // 输出 1
echo $a . "\n"; // 输出1



class A{
    public $a = 10;
}
$obj = new A();
func($obj->a); // 输出10
echo $obj->a . "\n"; //输出10
