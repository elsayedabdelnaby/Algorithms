<?php

require_once ('./Sorting/BubbleSort.php');

$random_number_array = range(0, 100);
shuffle($random_number_array );
$array = array_slice($random_number_array ,0,10);

echo "<h3> Before Sort </h3>";
print_r($array);
$array = BubbleSort::sort($array);
echo "<h3> After Sort </h3>";
print_r($array);