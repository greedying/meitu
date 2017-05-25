<?php

date_default_timezone_set('Asia/Shanghai');

require '../components/doubleList.php';
require '../components/node.php';

$list = new DoubleList();

$list->add('first', 'firstvalue', "head");
echo $list . "\n";

$list->add('beforeFirst', 'beforeFirstValue', "head");
echo $list . "\n";

$list->add('third', 'thirdValue', "end");
$list->add('fourth', 'fourthValue', "end");
$list->add('addhead', 'headalue', "head");
echo $list . "\n";

$value = $list->select("fourth");
echo "key fourth has a value: " . $value . "\n";


$list->modify("fourth", "newfourthvalue");
$value = $list->select("fourth");
echo "key fourth has a new value: " . $value . "\n";


$list->del("fourth");
$value = $list->select("fourth");
if ($value === false) {
    echo "now no key fourth\n";
}  
