```php
<?php
function increment_array_value(array &$arr, int $index, int $increment = 1): void {
  if (!array_key_exists($index, $arr)) {
    return; // Do nothing if index doesn't exist
  }
  $arr[$index] += $increment;
}

$myArray = [1, 2, 3];
increment_array_value($myArray, 5, 10);
print_r($myArray); //This will output: Array ( [0] => 1 [1] => 2 [2] => 3 )
increment_array_value($myArray, 3, 2);
print_r($myArray); // This will output: Array ( [0] => 1 [1] => 2 [2] => 3 )
?>
```