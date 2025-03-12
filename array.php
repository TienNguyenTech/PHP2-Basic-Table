<?php
// The $numbers array
$numbers = array(1, 0.2, -1.5, 16, 999, 2020);
// Sort in ascending order
sort($numbers);
// Display the result - students can also use var_dump(), but echo the whole array is not enough
foreach ($numbers as $number) {
    echo $number . "<br />";
}
echo "<br /><br />";
// Sort in descending order
rsort($numbers);
foreach ($numbers as $number) {
    echo $number . "<br />";
}
echo "<br /><br />";
// Average of array
echo "average of array is " . array_sum($numbers) / count($numbers); // sizeof() also works, as it's an alias to count()
echo "<br /><br />";
// Minimum of array
echo "min value in array is " . min($numbers);
echo "<br /><br />";
// Maximum of array
echo "max value in array is " . max($numbers);