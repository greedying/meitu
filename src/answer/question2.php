<?php

date_default_timezone_set('Asia/Shanghai');

require '../components/myIterator.php';

class CateData extends MyIterator{
}

$data = array(
    'a'=>'分类1',
    'b'=>'分类2',
    'c'=>'分类3',
    'd'=>'分类4',
);

$cate = new CateData($data);
foreach($cate as $key => $val){
    echo "$key : ". $val . "\n";
}
