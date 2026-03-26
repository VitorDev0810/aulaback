<?php
$a=10;
$b=2;
echo "Adição:".($a + $b);#Adição: 12
echo "<br>Subtração:".($a - $b);//8
echo "<br>Multiplicação:".($a * $b);//20
echo "<br>Divisão:".($a / $b);//5
echo "<br>Módulo:".($a % $b);//0
echo "<br>Exponenciação:".($a ** $b);//100
?>

<hr>

<?php
echo "<h1>Topico 2</h1>";
$a=10;              //$a=$a+$b//$a=10+2//$a=12
$b=2;               //$b-5//$b=-3
$a+=$b;             //a = 12
$b-=5; 
echo "a = ".$a;     //12
echo "<br>b = ".$b; //-3
$c=11;              
$d=6;
$c%=$d;              //$c=11%6//c = 5
$d+=$a;             //$d=6+12//$d=18
echo "<br>c = ".$c;             //$c=5
echo "<br>d = ".$d;             //$d=18
?>

<hr>

<?php
echo "<h1>Topico 3</h1>";
$a = "Bete ";
echo "$a <br>";
$b = "Leo ";
echo "$b <br>";
echo $a . $b;
$b .= $a;
echo "<br>$b"; 
?>

<hr>

<?php
echo "<h1>Tópico 4</h1>";
$x = 100;
echo "x = ".$x++; //x=100
echo "<br>x final = ".$x; //x=101
?>

<hr>

<?php
echo "<h1>Tópico 5</h1>";
$i=10;
    echo "<br> =$i";//10
$i++;
$i++;
++$i;
    echo "<br>i = $i";//13
$i--;
--$i;
    echo "<br>i = $i"; //11
?>