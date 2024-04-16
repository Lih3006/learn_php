<?php

//echo "Meu formulário de contato";
//
//echo "Nome: {$_POST['name']}";
//echo "<br>";
//echo "Email: {$_POST['email']}";
//echo "<br>";
//echo "Senha: {$_POST['password']}";
//echo "<br>";
//echo "Sexo: {$_POST['sexo']}";
//echo "<br>";
//echo "Estado: {$_POST['estado']}";
//echo "<br>";
//echo "Descricao: {$_POST['descricao']}";
//echo "<br>";
//echo "Concorda:" . isset($_POST['concordo']) && $_POST['concordo'] !== '' ? 'Sim' : 'Não';

// ? o request nao tem uma requisicao especifica, ele pega tanto o post quanto o get

if ($_REQUEST['name'] !== '' && strlen($_REQUEST['name']) < 3) {
    echo "Nome inválido";
    // exit();
    // die();
    // return;

}else{
echo "Nome: {$_REQUEST['name']}";
echo "<br>";
echo "Email: {$_REQUEST['email']}";
echo "<br>";
echo "Senha: {$_REQUEST['password']}";
echo "<br>";
echo "Sexo: {$_REQUEST['sexo']}";
echo "<br>";
echo "Estado: {$_REQUEST['estado']}";
echo "<br>";
echo "Descricao: {$_REQUEST['descricao']}";
echo "<br>";
echo "Concorda:" . isset($_REQUEST['concordo']) && $_REQUEST['concordo'] !== '' ? 'Sim' : 'Não';
}
