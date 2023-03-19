<?php
//for1
//$k = 10;
//for($n=0;$n < $k; $n++){
//    echo $k . "<br>";
//}

//for2
//$a = 10;
//$b = 23;
//for ($i = $a; $i <= $b; $i++){
//    echo $i . "<br>";
//}

//for3
//$a = 23;
//$b = 43;
//for ($i = $b - 1; $i > $a; $i--) {
//    echo $i . "<br>";
//}

//for4
//$kg = 5600;
//for ($i = 1; $i <= 10; $i++){
//    echo "$i kg - " . $i * $kg . "<br>";
//}

//for5
//$priceForKg = 5600;
//for ($i = 0.1; $i <= 0.9; $i += 0.1){
//    $price = $i * $priceForKg;
//    echo "$i kg is $price <br>";
//}

//for6
//$priceForKg = 5600;
//for ($i = 1 + 0.1; $i <= 2; $i += 0.1){
//    $price = $i * $priceForKg;
//    echo "$i kg is $price <br>";
//}

//for7
//$a = 1;
//$b = 10;
//$sum = 0;
//
//for ($i = $a; $i <= $b; $i++){
//    $sum += $i;
//    echo $sum . "<br>";
//}

//for8
//$a = 1;
//$b = 10;
//$sum = 1;
//
//for ($i = $a; $i <= $b; $i++){
//    $sum *= $i;
//}
//echo $sum . "<br>";

//for9
//$a = 1;
//$b = 10;
//$sum = 0;
//
//for ($i = $a; $i <= $b; $i++){
//    $square = $i ** 2;
//    $sum += $square;
//    echo $sum . "<br>";
//}

//for10
//$n = 20;
//$S = 0;
//for ($i = 1; $i <= $n; $i++){
//    $S += $i;
//}
//echo "$S  <br>";

$n = 20;
$s = 0;

for($i=1; $i<=$n; $i++){
    $s+=1/$i;
}
echo "S = ".$s;
echo PHP_EOL;