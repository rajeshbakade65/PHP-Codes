Here, we need to extract each character in sepearate array as key and count as value in front of each key.

<?php

$str   = 'abadsadddkdsadksawpoekwpeqpkpdoksakdsakdsdksa';
$arr   = array();
$str_chr_length = strlen($str);

for ($i = 0; $i < $str_chr_length; $i++) {
    
    if (!array_key_exists($str[$i], $arr)) {
        $arr[$str[$i]] = 1;
    } else {
        $arr[$str[$i]]++;
    }
}
print_r($arr);

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
?>

So, first we've defined a varible <pre>$str</pre> which contains random characters.
Then, in the for loop we've checked if blank array conains that character. If not then add it into an array as key and initialize it to 1
as value initally.
If that character is already exists then it will go inside else block and will increase that characters count by 1.

This way it will loop through all the characters present in the string. And, then it will add all the characters in the blank as key 
and count of that character as value of eack key.
