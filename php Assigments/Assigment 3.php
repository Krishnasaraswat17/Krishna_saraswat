<?php
$steps=110000;
if($steps==5000){
    echo"Beginner"."<br>";
}
elseif($steps>=5000 && $steps<=10000){
    echo"Intermediate"."<br>";
}
else{
    echo"Advanced";
}
?>