<?php 
//array is a collection of similar data types
//In php there are multiple types of array 
//1. Indexed array 2. Associative 3. Multidimensional  4.Sorting
//The indexed array is a normal array
echo "***Indexed Array***";
echo "<br>";
$cars = array("Volvo" , "BMW" , "Mercedies");
print_r($cars);
echo "<br>";
echo "<br>";
echo "***Associative array***";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

?>