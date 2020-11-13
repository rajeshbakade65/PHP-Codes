Following function will reverse the words in the string.

This is very basic example where we can use for `explode()` function to split string based on spaces in it. Then using `for(){}` loop to reverse the string.

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

There are another ways as which can be useful to shorter the lines of code. 

- [Using array_reverse() and implode()](https://github.com/rajeshbakade65/PHP-Codes/blob/master/reverse-words-in-string.md#using-array_reverse-and-implode)
- [Using array_reverse() and join()](https://github.com/rajeshbakade65/PHP-Codes/blob/master/reverse-words-in-string.md#using-array_reverse-and-join)
- [Using array_reverse() and krsort()](https://github.com/rajeshbakade65/PHP-Codes/blob/master/reverse-words-in-string.md#using-array_reverse-and-krsort)

### Using array_reverse() and implode()
```php
<?php

$str = implode(' ',array_reverse(explode(' ',$str)));

```
### Using array_reverse() and join()
```php
<?php

$str = join(' ', array_reverse(explode(' ', $str)));

```
### Using array_reverse() and krsort()
```php
<?php

$st_exp = explode(' ', $str);
krsort($st);
$str = implode(' ', $st);

```
---

We can also split the string using regular expression using `preg_split()` function instead of `explode()` and then using any way mentioned above we can reverse the words in string.

```php
$st_exp = preg_split('/\s/', $str);
```
