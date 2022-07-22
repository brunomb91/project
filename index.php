<!DOCTYPE html>
<html lang="pt-BR">
<meta charset="UTF-8">

<html>

<title>
Projeto
</title>

<body>

<?php
//declare(strict_types=1);

define("PI", pi());

function myTest() {
    echo "<p>Escopo da função myTest().</p>";
}

$txt = "Hello world!";
$txt1 = "PHP";

$x = 4;
$y = 5;

echo "<p><b>Variáveis</b></p>";

echo "<p>$txt</p>";
echo "<p>I love $txt1</p>";
echo "<p>$x + $y</p>";

echo "<p><b>Função print.</b></p>";

print "Dá pra escrever com essa função também.";
print "<br>";

echo "<p><b>Função para verificar tipo de dados.</b></p>";
echo var_dump($x);
echo var_dump($txt);
mytest();

echo "<p><b>String</b></p>";

echo "<p>strlen</p>";
echo strlen($txt);

echo "<p>str_word_count</p>";
echo str_word_count($txt);

echo "<p>strrev</p>";
echo strrev($txt);

echo "<p>strpos</p>";
echo strpos($txt, "world");

echo "<p>str_replace</p>";
echo str_replace(" ", "_", $txt);

echo "<p>";
echo PI;
echo "</p>";

echo "<p><b>Operadores</b></p>";

echo "<p>$x + $y = ";
echo $x + $y;
echo "</p>";

echo "<p>$x - $y = ";
echo $x - $y;
echo "</p>";

echo "<p>$x * $y = ";
echo $x * $y;
echo "</p>";

echo "<p>$x / $y = ";
echo $x / $y;
echo "</p>";

echo "<p>$x ** $y = ";
echo $x ** $y;
echo "</p>";

echo "<p>$x % $y = ";
echo $x % $y;
echo "</p>";

$x1 = "4";

echo "<p>";
echo var_dump($x == $x1);
echo "</p>";

echo "<p>";
echo var_dump($x === $x1);
echo "</p>";

echo "<p>";
echo var_dump($x <=> $y);
echo "</p>";


$array = array("Volvo", "Scania", "DAF");
//$array = array(1, 2, 3);

echo "<p>";
echo var_dump($array);
echo "</p>";

echo "<p><b>Funções</b></p>";

function addNumbers(int $a=0, int $b=0) {
    return (int) $a + $b;
}

echo "<p>";
echo addNumbers(5, 5)."<br>";
echo addNumbers();
echo "</p>";

echo '<a href="/project/math.html">Calcule uma soma aqui.</a>';

?>

</body>

</html>
