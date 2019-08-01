<?php
$test = 'abadsadddkdsadksawpoekwpeqpkpdoksakdsakdsdksa';
$array = array();
for($i=0;$i<strlen($test);$i++){
    if(!array_key_exists($test[$i],$array)){
        $array[$test[$i]]=1;
    } else {
        $array[$test[$i]]++;
    }
}
print_r($array);

//output
Array
(
    [a] => 8
    [b] => 1
    [d] => 10
    [s] => 7
    [k] => 8
    [w] => 2
    [p] => 4
    [o] => 2
    [e] => 2
    [q] => 1
)
