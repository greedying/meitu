<?php

// 需要改进，有点问题


function quickSort($arr)
{
    if(!is_array($arr)) {
        return false;
    }

    $length=count($arr);
    if($length<=1) {
        return $arr;
    }

    // 多个元素的情况
    $left = $right = [];

    /**
    $sum = array_sum($sum);
    // 取平均值比较
    $average = $sum / $length;
    **/

    for ($i = 1; $i < $length; $i++) {
        //判断当前元素的大小
        if ($arr[$i] < $arr[0]){
            $left[] = $arr[$i];
        }else{
            $right[] = $arr[$i];
        }
    }
    //递归调用
    $left=quickSort($left);
    $right=quickSort($right);
    //将所有的结果合并
    return array_merge($left, [$arr[0]],$right);
}

