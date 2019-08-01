<?php
$number = 5;
for($i=0;$i<=$number;$i++) {
    for($j=$number;$j>=1;$j--) {
        if($i != $j)
            echo $j.' ';
        else
            break;
    }
    echo PHP_EOL;
}
?>

// output
5 4 3 2 1
5 4 3 2
5 4 3
5 4
5
