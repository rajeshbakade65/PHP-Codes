<?php

/* 
Your task is to write a function which returns the sum of following series upto nth term(parameter).

Series: 1 + 1/4 + 1/7 + 1/10 + 1/13 + 1/16 +...
Rules:
You need to round the answer to 2 decimal places and return it as String.

If the given value is 0 then it should return 0.00

You will only be given Natural Numbers as arguments.

Examples:
SeriesSum(1) => 1 = "1.00"
SeriesSum(2) => 1 + 1/4 = "1.25"
SeriesSum(5) => 1 + 1/4 + 1/7 + 1/10 + 1/13 = "1.57"
*/


function series_sum($n)
{
    if (empty($n)) {
        return "0.00";
    }
    if ($n == 1) {
        return "1.00";
    }
    $quotient = 1;
    $divident = 1;
    $increment_num = 3;
    $sum = 1;
    for ($i = 1; $i < $n; $i++) {
        $divident += $increment_num;
        $sum += ($quotient / ($divident));
    }
    return (string) number_format($sum, 2);
}

echo series_sum(3);
