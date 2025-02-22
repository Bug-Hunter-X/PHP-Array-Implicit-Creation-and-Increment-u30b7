```php
function incrementArrayValue(array &$arr, int $index): void {
  if (!isset($arr[$index])) {
    $arr[$index] = 0; // Initialize if not set
  }
  $arr[$index]++;
}

$myArray = [];
incrementArrayValue($myArray, 10); // Accessing a non-existent index
echo $myArray[10]; // Outputs 1
```