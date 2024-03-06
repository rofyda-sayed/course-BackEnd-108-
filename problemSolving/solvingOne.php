<?php
//Q1:
$name ="Programmer";
echo "Hello ,". " " .$name ."<br>";
echo "<br>";
echo "<br>";
echo "//////////////////////////////////////////////////// <br>";


//Q2:
function calculation($num1, $num2 , $opperator){
    if($opperator== "+"){
        echo $num1 + $num2 ;
    }elseif($opperator== "-"){
        echo $num1 - $num2 ;
    }elseif($opperator== "*"){
        echo $num1 * $num2 ;
}else{
    echo " No Mathematicl opperation";
}
}
calculation(2,6,"/") ;
echo "<br>";
echo "<br>";
echo "<br>";
echo "//////////////////////////////////////////////////// <br>";


//Q3:

$A=5;
$B=10;
$C=15;
$D=7;
$calc= $A * $B - $C * $D;

echo "Difference = " .$calc;
echo "<br>";
echo "<br>";
echo "<br>";
echo "//////////////////////////////////////////////////// <br>";
 function calculations($S,$J,$P,$Q){
    $results =$S * $J - $P * $Q;
    echo "the difference = $results";
 }

 calculations(5,10,15,7);
//Q4:

$M=12;
$N=13;
$lastDigitN= $N % 10;
$lastDigitM= $M %10;
$sum = $lastDigitN + $lastDigitM;

echo $sum;

echo "<br>";
echo "<br>";
echo "<br>";
echo "//////////////////////////////////////////////////// <br>";


// ////////////////// second sheet /////////////////////////////////////////////////////////////////////////////////////////////


//Q1:
$number =4569;
$firstDigit =substr($number, 0, 1);
if($firstDigit % 2 ==0){ 
echo "EVEN";
}else{
    echo"ODD";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "//////////////////////////////////////////////////// <br>";


//Q2:

function winner($a,$b,$k)
{
    $a && $b >= 0;
    if($a && $b % $k ==0){
        echo "Both";
    }elseif($a % $k ==0)
    {
        echo "Memo";
    }elseif($b % $k ==0)
    {
        echo "Momo";
    }
}
winner(22,10,2);

echo "<br>";
echo "<br>";
echo "<br>";
echo "//////////////////////////////////////////////////// <br>";


//Q4:

function lucky($luckyNum){

    $tens = intval($luckyNum /10);
    $ones = $luckyNum % 10 ;

if(($luckyNum ==10) || ($luckyNum <=99) ){

    if((($luckyNum % $ones == 0) || ($luckyNum % $tens == 0) )){


        echo " YES the Number $luckyNum is Lucky";
            }else {
                 echo " No the Number $luckyNum is Not Lucky";;
             }
    }
    else {
        echo "the number is outside the range ";
    }
}
lucky(745);

echo "<br>";
echo "<br>";
echo "<br>";
echo "//////////////////////////////////////////////////// <br>";


//Q3:




?>