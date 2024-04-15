<?php

$name = "Oi meu nome é Aline";

// * funcoes embutias do php

//echo strtoupper($name);
//echo '<br>';
//echo strtolower($name); // OI MEU NOME É ALINE
//echo '<br>';
//echo ucfirst($name); // ! primeira letra pra maiusculo
//echo '<br>';
//echo ucwords($name); // ! primeira letra de cada palavra pra maiusculo
//echo '<br>';
//$resultArray =  explode(" ", $name); // ! transforma em array
//print_r($resultArray);
//echo '<br>';
//echo implode("#", $resultArray); // ! transforma em string
//
//$frase =  "<h2>Funções que removem espacos de strog</h2>";
//echo $frase;
//
//$frase = "   Oi meu nome é Aline   ";

var_dump(ltrim($frase));  // ! remove espacos a esquerda
echo "<br>";
var_dump(rtrim($frase));  // ! remove espacos a direita

$frase =  "<h2>Funcoes que substituem parte da string</h2>";

echo $frase;

$text = "www.eusouemprendedor.com.br";

//echo str_replace("com", "org", $text); // ! substitui a palavra com por org
//echo '<br>';
//echo substr($text, 4, 10); // ! pega parte da string
//echo '<br>';
//echo strlen($text); // ! tamanho da string
//echo '<br>';

// * isset verifica se a variavel existe
if (isset($text)){
    echo $text;
}
else
{
    echo "Variavel não existe";
}
// * unset destroi a variavel

unset($text);
echo '<br>';

if (isset($text)){
    echo $text;
}
else
{
    echo "Variavel não existe";
}

// * funcao date
//$today = date("d/m/Y H:i:s");
//echo '<br>';
//echo $today;
//echo '<br>';
//$today = date("Y i:s");
//echo $today;
//echo '<br>';
//$today = date("Y-m-d");
//echo $today;
//echo '<br>';
//echo 'Timezone:' . date_default_timezone_get();
//echo '<br>';
//echo 'Timezone atual:' . date_default_timezone_set('America/Sao_Paulo');
//echo '<br>';

// * php info util para analisar o ambiente de desenvolvimento

echo '<br>';
//echo phpinfo();

// * funcoes de criptografia

$senha = "123456";

echo '<br>';
// * MD5 é sempre a mesma hash para aumentar a seguranca pode-se concatenar com uma string
$moreSecurity = 'aline';
$password = md5($senha . $moreSecurity);
echo md5($senha);
echo '<br>';
// * SHA1
echo sha1($senha);
echo '<br>';
// * crypt
echo crypt($senha, 'aline');
echo '<br>';
// * base64 encode e decode
$passCr= base64_encode($senha);
echo $passCr;
echo '<br>';
echo base64_decode($passCr);
echo '<br>';
// * hash
echo hash('sha512', $senha);


