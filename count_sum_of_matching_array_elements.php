<?php

function sumValue($arr, $sum)
{
    // Initialize result 
    $count  = 0;
    $n      = count($arr);
    $result = array();
    // Consider all possible pairs  
    // and check their sums 
    for ($i = 0; $i < $n; $i++)
        for ($j = $i + 1; $j < $n; $j++)
            if (!array_key_exists('{ '.$arr[$i] . '+' . $arr[$j].' }', $result) && !array_key_exists('{ '.$arr[$j] . '+' . $arr[$i].' }', $result)) {
                if ($arr[$i] + $arr[$j] == $sum) {
                    $result['{ '.$arr[$i] . '+' . $arr[$j].' }'] = array(
                        $arr[$i],
                        $arr[$j]
                    );
                }
            }
    
    return [count($result), implode(', ',array_keys($result))];
}

// Driver code to test above 
$arr = array(0,1,2,3,4,5,6,7,8,9,0,9,8,7,6,5,4,3,3,2,1);

$len = sizeof($arr);
$result = sumValue($arr, 6);
echo "Total number of matching sum elements: ".$result[0].PHP_EOL;
echo "Elements: ".$result[1];

// output:
Total number of matching sum elements: 4
Elements: { 0+6 }, { 1+5 }, { 2+4 }, { 3+3 }
