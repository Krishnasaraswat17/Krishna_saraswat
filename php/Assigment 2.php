<?php
$traffic_light="green";
if($traffic_light=="red"){
    echo"<B> STOP</B>";
}
elseif ($traffic_light=="yellow") {
   echo "<b> CAUTION </b>"; 
}
else{
    echo "<b> GO AHEAD </b>"; 
}
?>