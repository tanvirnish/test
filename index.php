<?php 
//which number is the largest ? starts ....

// $a = 500;
// $b = 80;
// $c = 100;
// $d = 700;
// if ( $a > $b && $a > $c && $a > $d) {
//   echo " $a is a greater number ";
// }
// elseif ( $b > $a && $b > $c && $b > $d) {
//     echo " $b is a greater number ";
// }
// elseif ( $c > $a && $c > $b && $c > $d ){
//     echo " $c is a greater number ";
// }
// else{
//     echo " $d is a greater number ";
// }
function greaterNum ( $a,$b,$c,$d) {
    if ( $a > $b && $a > $c && $a > $d) {
        echo " $a is a greater number ";
      }
      elseif ( $b > $a && $b > $c && $b > $d) {
          echo " $b is a greater number ";
      }
      elseif ( $c > $a && $c > $b && $c > $d ){
          echo " $c is a greater number ";
      }
      else{ echo " $d is a greater number <br> ";
      }
}
greaterNum(500,80,100,700); 

//which number is the largest ? ends ....
//  UNIVERSITY PAYMENT SYSTEM  STARTS......
       #4year cost = 104000
       #duration = 48
       #monthly cost ???
      
       function versityFee ($totalCost,$duration) {
        $perMonthFee = ($totalCost/$duration);
        echo  "Total Per Month Fee " . ceil ($perMonthFee);
       } 
       versityFee (104000,48);

    

//  UNIVERSITY PAYMENT SYSTEM  ENDS......


