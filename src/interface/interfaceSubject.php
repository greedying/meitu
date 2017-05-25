<?php 

interface interfaceSubject
{
    public function register($observer); //增加观察者
    public function notify($name, $newValue, $oldValue); //满足条件时通知观察者
}
