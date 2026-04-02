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

<hr>

<?php
echo "<h1>Tópico 6</h1>";
//2 coisas iguais não nescessariamente são identicas, mas 2 coisas identicas certeza que são iguais
$a=10;          //a=10 string
$b="10";        //b="10" string
echo "Igualdade = ".($a==$b)."<br>"; //igualdade tem o mesmo valor ,não precisa ser mesmo tipo 
echo "Idêntico = ".($a===$b)."<br>"; //false
echo "Não igual = ".($a!=$b)."<br>";//false
echo "Não Idêntico = ".($a!==$b)."<br>";//false

echo "<hr>";

$c=20;
$d=40;
$e=500;
$f=($c>$d);//false
var_dump($f);
echo "<hr>";
$g=($c<$e) && ($e>1000);// false
var_dump($g);
/*

= Atribuir ou Receber

== Igualdade 

=== Idêntico 

*/
?>

<hr>

<?php
$a=10;
$b=10;
$c=11;
echo "Menor: ".($a<$b)."<br>";
echo "Menor ou igual: ".($a<=$b)."<br>";
echo "Maior: ".($c>$b)."<br>";
echo "Maior ou igual: ".($c>=$b)."<br>";
?>

<HR>

<?php 
echo "<h1>Tópico 6 Operadores Lógicos</h1>";
$a=50;
$b=120;
$c= ($a<=$b);
$d= !($a<=$b);
var_dump($c);
echo "<br>";
var_dump($d);
?>
<hr>
<?php
echo "<h1>Tópico 7 E , AND e &&</h1>";
$a=50;
$b=120;
$c=200;
$d=(($a<=$b) and ($a<=$c));
$e=(($a<=$b) &&  ($a>=$c));
var_dump($d);
echo "<br>";
var_dump($e);
//Toda validaçõa que você faz no acesso é Usuário E Senha
?>

<hr>

<?php
echo "<h1>Xor</h1>"; 
$a=50;
$b=120;
$c=200;
$d=(($a<=$b) xor ($c<=$a));
$e=(($a>=$b) xor ($a>=$c));
var_dump($d);
echo "<br>";
var_dump($e);
?>

<hr>

<?php 
echo "<hr>Operador ternário</h1><br>";
$a=50;
$b=120;
$c=200;
$d=($a<=$b) ? "Ok" : "olcoo <br>"; //true
$e=($a>=$c) ? "Blz" : "Ai não paizão"; //false
echo "d = $d<br>e = $e";
?>