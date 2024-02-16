<?php
$string = "ten";
switch ($string) {
  case "one":
    echo "1";
    break;
  case "two":
   echo  "2";
    break;
  case "three":
    echo "3";
    case "four":
        echo "4";
        break;
      case "five":
       echo  "5";
        break;
      case "six":
        echo "6";
         break;
         case "seven":
            echo "7";
            break;
          case "eight":
           echo  "8";
            break;
          case "nine":
            echo "9";
			break;
  default:
    echo "invalid number";
}
?>