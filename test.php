<?php

$myfile = fopen("newfile.txt", "w");
static $string = "";

for($i = 2; $i < 5003; $i++){
    echo " ".$i+rand(1,300)." ";
    $string = $string." ".$i+rand(1,300)." ";
}

fwrite($myfile, $string);

?>