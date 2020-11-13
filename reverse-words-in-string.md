Following function will reverse the words in the string. 

Following example is very basic example where we can use for `explode()` function to split string based on spaces in it.
Then `using for(){}` loop reverse the string.

```php
<?php
$str = "This is string!";
$split = explode(" ", $str);
$count = count($split);

$fn_string = '';

for($i=$count;$i>0; $i--) {
    $fn_string .= $split[$i-1]. ' ';
}
echo trim($fn_string);
```

There is another ways as which can be useful to shorter the lines of code. 
<ul>
  <li> Using array_reverse() and implode()
  </li>
   <li> Using array_reverse() and join()
  </li>
   <li> Using array_reverse() and krsort()
  </li>
  
