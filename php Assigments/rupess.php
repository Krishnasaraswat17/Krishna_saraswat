<?php
$money=388;
if(500<=$money){
    echo "500 Notes"."=".intval($money/500);
    echo "<br>";
    $remaining = $money%500;
    echo "200 Notes"."=".intval($remaining/200);
    echo "<br>";
    $remaining = $remaining%200;
    echo "100 Notes"."=".intval($remaining/100);
    echo "<br>";
    $remaining = $remaining%100;
    echo "50 Notes"."=".intval($remaining/50);
    echo "<br>";
    $remaining = $remaining%50;
    echo "20 Notes"."=".intval($remaining/20);
    echo "<br>";
    $remaining = $remaining%20;
    echo "10 Notes"."=".intval($remaining/10);
    echo "<br>";
    $remaining = $remaining%10;
    echo "5 Notes"."=".intval($remaining/5);
    echo "<br>";
    $remaining = $remaining%5;
    echo "2 Notes"."=".intval($remaining/2);
    echo "<br>";
    $remaining = $remaining%2;
    echo "1 Notes"."=".$remaining;
}
elseif(200<=$money){
    echo "The Number of 200 Notes"." = ".intval($money/200);
    echo "<br>";
    $remaining = $money%200;
    echo "The Number of 100 Notes"." = ".intval($remaining/100);
    echo "<br>";
    $remaining = $remaining%100;
    echo "The Number of 50 Notes"." = ".intval($remaining/50);
    echo "<br>";
    $remaining = $remaining%50;
    echo "The Number of 20 Notes"." = ".intval($remaining/20);
    echo "<br>";
    $remaining = $remaining%20;
    echo "The Number of 10 Notes"." = ".intval($remaining/10);
    echo "<br>";
    $remaining = $remaining%10;
    echo "The Number of 5 Notes"." = ".intval($remaining/5);
    echo "<br";
    $remaining = $remaining%5;
    echo "The Number of 2 Notes"." = ".intval($remaining/2);
    echo "<br>";
    $remaining = $remaining%2;
    echo "The Number of 1 Notes"." = ".intval($remaining/1);
}
elseif(100<=$money){
    echo "The Number of 100 Notes"." = ".intval($money/100);
    echo "<br>";
    $remaining = $money%100;
    echo "The Number of 50 Notes"." = ".intval($remaining/50);
    echo "<br>";
    $remaining = $remaining%50;
    echo "The Number of 20 Notes"." = ".intval($remaining/20);
    echo "<br>";
    $remaining = $remaining%20;
    echo "The Number of 10 Notes"." = ".intval($remaining/10);
    echo "<br>";
    $remaining = $remaining%10;
    echo "The Number of 5 Notes"." = ".intval($remaining/5);
    echo "<br";
    $remaining = $remaining%5;
    echo "The Number of 2 Notes"." = ".intval($remaining/2);
    echo "<br>";
    $remaining = $remaining%2;
    echo "The Number of 1 Notes"." = ".intval($remaining/1);
}
elseif(50<=$money){
    echo "The Number of 50 Notes"." = ".intval($money/50);
    echo "<br>";
    $remaining = $money%50;
    echo "The Number of 20 Notes"." = ".intval($remaining/20);
    echo "<br>";
    $remaining = $remaining%20;
    echo "The Number of 10 Notes"." = ".intval($remaining/10);
    echo "<br>";
    $remaining = $remaining%10;
    echo "The Number of 5 Notes"." = ".intval($remaining/5);
    echo "<br";
    $remaining = $remaining%5;
    echo "The Number of 2 Notes"." = ".intval($remaining/2);
    echo "<br>";
    $remaining = $remaining%2;
    echo "The Number of 1 Notes"." = ".intval($remaining/1);
}
elseif(20<=$money){
    echo "The Number of 20 Notes"." = ".intval($money/20);
    echo "<br>";
    $remaining = $money%20;
    echo "The Number of 10 Notes"." = ".intval($remaining/10);
    echo "<br>";
    $remaining = $remaining%10;
    echo "The Number of 5 Notes"." = ".intval($remaining/5);
    echo "<br";
    $remaining = $remaining%5;
    echo "The Number of 2 Notes"." = ".intval($remaining/2);
    echo "<br>";
    $remaining = $remaining%2;
    echo "The Number of 1 Notes"." = ".intval($remaining/1);
}
elseif(10<=$money){
    echo "The Number of 10 Notes"." = ".intval($money/10);
    echo "<br>";
    $remaining = $money%10;
    echo "The Number of 5 Notes"." = ".intval($remaining/5);
    echo "<br";
    $remaining = $remaining%5;
    echo "The Number of 2 Notes"." = ".intval($remaining/2);
    echo "<br>";
    $remaining = $remaining%2;
    echo "The Number of 1 Notes"." = ".intval($remaining/1);
}
elseif(5<=$money){
    echo "The Number of 5 Notes"." = ".intval($money/5);
    echo "<br";
    $remaining = $money%5;
    echo "The Number of 2 Notes"." = ".intval($remaining/2);
    echo "<br>";
    $remaining = $remaining%2;
    echo "The Number of 1 Notes"." = ".intval($remaining/1);
}
elseif(2<=$money){
    echo "The Number of 2 Notes"." = ".intval($money/2);
    echo "<br>";
    $remaining = $money%2;
    echo "The Number of 1 Notes"." = ".intval($remaining/1);
}
else{
    echo "The Number of 1 Notes"." = ".intval($remaining/1);
}
?>