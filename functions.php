<?php 
//Function is a block of code that can perform a task repetative time.
//there are more than 1000 inbuilt function are present in php for specific task.
//without calling function it has no use we have to call the function if we had created.

function writemessage() {
    echo "Hello world";

}
writemessage();
echo "<br>";
echo "<br>";
function familyname($name , $year){
    echo "$name $year <br>";
}
familyname("Shaaz", 20);
familyname("Shams", 19);
familyname("Abdul" , 14);
familyname("Hayya" , 16);
?>