<?php
if( empty ($_POST['numberA']) ){
    echo 'не введено поле 1!';
       }
if( empty ($_POST['numberB']) ){
    echo 'не введено поле 2!';
}
if( empty ($_POST['numberC']) ){
    echo 'не введено поле 3!';
}
foreach ($_POST as $key => $value)
echo $key."= ".$value."<br>";
$a = $_POST['numberA'];
$b = $_POST['numberB'];
$c = $_POST['numberC'];
if ($a < $b & $a < $c){
    echo 'Минимальное значение:'.$a."<br>";
    }
else {
    if ($b<$c){
        echo 'Минимальное значение:'.$b."<br>";
    }
    else {
        echo 'Минимальное значение:'.$c."<br>";
    }
}
if ($a > $b & $a > $c){
    echo 'Максимальное значение:'.$a."<br>";
}
else {
    if ($b<$c){
        echo 'Максимальное значение:'.$c."<br>";
    }
    else {
        echo 'Максимальное значение:'.$b."<br>";
    }
}
$i = 0;
if ($b > $a){
    $i =1;
}
if ($c > $a){
    $i++;
}
echo "Чисел больше числа А:  $i"."<br>";
echo "Сумма чисел равна = ".($a+$b+$c)."<br>";
echo "Среднее арифметическое чисел: ".($a+$b+$c)/3;
$i = 0;
if ($a % 2 == 0){
$i++;
}
if ($b % 2 == 0){
    $i++;
}
if ($c % 2 == 0){
    $i++;
}
echo "<br> Количество четных чисел равно: $i";
$i = 0;
if ($a % 2 == 0 & $a % 3 == 0){
    $i++;
}
if ($b % 2 == 0 & $b % 3 == 0){
    $i++;
}
if ($c % 2 == 0 & $c % 3 == 0){
    $i++;
}
echo "<br> Количество чисел, которые делятся на 2 и 3: $i";