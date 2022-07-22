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

echo "<h3>Como enviar código para um repositório Github:</h3>
      <p>Criar repositório no Github.</p>
      <p>Instalar o Git no seu computador.</p>
      <p>Abra um terminal e digite:</p>
      <p>git clone [<i>Link do repositório</i>].</p>
      <p>Acesse o diretório onde estão contidos os arquivos do repositório e digite:</p>
      <p>git add [nome do(s) arquivo(s)]</p>
      <p>Se quiser enviar todos os arquivos, digite:</p>
      <p>git add .</p>
      <p>Fazer o <i>commit</i>, que é especificar a mudança nos arquivos do repositório. Você o faz com o seguinte comando:</p>
      <p>git commit -m 'Mensagem'</p>
      <p>E por último, selecionar a <i>branch</i> para onde vão os arquivos:</p>
      <p>git push -u origin [noem da branch]</p>
";

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

foreach ($array as $truck) {
    print "<br>".$truck."<br>";
}

for ($i=0; $i< count($array); $i++) {
    print "<br>".$array[$i]."<br>";
}

class Extintor {
    public $tamanho;
    public $capacidade;
    public $cor;
    public $peso;
    public $conteudo;

    function __construct($tamanho, $capacidade, $cor, $peso, $conteudo) {
        //$this->tamanho = $tamanho;
        $this->tamanho = $tamanho;
        $this->capacidade = $capacidade;
        $this->cor = $cor;
        $this->peso = $peso;
        $this->conteudo = $conteudo;
    }

    public function apaga_fogo() {
        echo "<br>Fogo apagado.<br>";
    }

    public function vistoria() {
        echo "<br>Vistoriado<br>";
    }

    public function carregar() {
        echo "<br>Extintor carregado.<br>";
    }

    public function info() {
        return "<p>Tamanho: </p>".$this->tamanho.
               "<p>Capacidade: </p>".$this->capacidade.
               "<p>Cor: </p>".$this->cor.
               "<p>Peso: </p>".$this->peso.
               "<p>Conteudo: </p>".$this->conteudo;
    }

}

$obj = new Extintor(50, 10, "Vermelha", 6, "Bicarbonato de Sódio");

$obj->apaga_fogo();
$obj->vistoria();
$obj->carregar();
$obj->info();

?>

</body>

</html>
