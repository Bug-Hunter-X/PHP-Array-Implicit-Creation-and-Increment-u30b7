```php
function incrementArrayValue(array &$arr, int $index): void {
  if (array_key_exists($index, $arr)) {
    $arr[$index]++;
  } else {
    //Handle the case where the key doesn't exist
    // You might want to throw an exception or return an error.
    // For this example, we'll just not increment the value
  }
}

$myArray = [];
incrementArrayValue($myArray, 10);
echo $myArray[10]; // Outputs nothing because the key doesn't exist

//Alternative solution: Using isset()
function incrementArrayValue2(array &$arr, int $index): void {
  if (isset($arr[$index])) {
    $arr[$index]++;
  } else {
    //Handle the case where the key doesn't exist
  }
}
$myArray2 = [];
incrementArrayValue2($myArray2,10);
echo $myArray2[10]; // Outputs nothing because the key doesn't exist.
```