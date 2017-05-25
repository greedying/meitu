<?php

date_default_timezone_set('Asia/Shanghai');

require '../components/subject.php';
require '../components/observer1.php';
require '../components/observer2.php';


$subject = new Subject;

$subject->test = 'test1';

$subject->register(new Observer1);
$subject->test = 'test2';


$subject->register(new Observer2);
$subject->test = 'test3';
