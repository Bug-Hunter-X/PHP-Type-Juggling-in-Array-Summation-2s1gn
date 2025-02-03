```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      //Handle non-numeric values appropriately
      //For example, you can throw an exception or skip the element
      trigger_error('Non-numeric value encountered in array', E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; //Corrected output
```