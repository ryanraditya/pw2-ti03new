<?php 
$animal = ["kucing","singa","kuda","koala"];
echo $animal[0] . "<br>";
echo $animal[3] . "<br>";
echo "<br>";
//untuk menambah variable
foreach($animal as $key => $value){
    echo $value . "<br>";
}
//untuk merubah nilai variable
$animal[2] = "kukang";
echo $animal[2];