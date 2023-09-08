<?php 
//if else statement is used for condition check if the if stament is true then it will execute
//the if statement or else it will execute else statement.

$a = 20 ;
if($a>20){
    echo "Number is Greater than 20";
}
else{
    echo "Entered number is 20";
}
echo "<br>";
$t = date("h");
if($t<12){
    echo "Good Morning";
}else if($t>12){
    echo "Good aternoon";
}
else{
    echo "Good evening";
}
?>