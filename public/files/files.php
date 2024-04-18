<?php

////  * cria um arquivo
//
//touch('arquivo.txt');
//
//// * rebomeia um arquivo
//
//rename('arquivo.txt', 'arquivo2.txt');
//
//// * confirma se um arquivo existe
//
//echo file_exists('arquivo2.txt') ? 'Existe' : 'Não existe';
//
//// * copia um arquivo
//
//copy('arquivo2.txt', 'arquivo3.txt');
//
//// * deleta um arquivo
//
//unlink('arquivo3.txt');
//
//// * escreve dentro de um arquivo
//
//file_put_contents('arquivo.txt', ' Olá mundo!');
//
//// * lê o conteúdo de um arquivo
//
//echo file_get_contents('arquivo.txt');
//
//// * abre um arquivo
//
//$file = fopen('novo_arquivo.txt', 'a+');
//
//fwrite($file, "Testando a escrita!\r\n");
//
//// * fecha um arquivo
//fclose($file);
//echo file_get_contents('novo_arquivo.txt');
//
//// * pode ser usado para salvar logs de erro por exemplo

// * leitura de arquivos
echo 'Lendo o arquivo:';
$file = fopen('log.txt', 'a+');
fwrite($file, "Testando a escrita!\r\n");
while (!feof($file)){
    echo 'Lendo linha por linha:';
    echo fgets($file, 4096);
}


fclose($file);