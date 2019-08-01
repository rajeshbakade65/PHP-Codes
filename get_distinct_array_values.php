<?php

// count distinct element in an array

function getDistinctValueCount($arr, $count) {
    $result = array();
    for($i=0;$i<$count;$i++){
        if(!in_array($arr[$i], $result)){
            array_push($result, $arr[$i]);
        }
    }
    return implode(',', $result);
}
$arr = array(10,20,30,10,10,20,40);
$count = count($arr);
echo getDistinctValueCount($arr, $count);
