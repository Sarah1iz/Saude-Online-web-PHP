<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$bancoDados = 'cadastro_php';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bancoDados);

if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$nome = $_POST['user'];
$data_nascimento = $_POST['date'];
$telefone = $_POST['phone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO cadastro (nome, data_nascimento, telefone, email, senha) VALUES ('$nome','$data_nascimento','$telefone', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
    header('location: ../index.html');
} else {
    header('location: erroCadastro.php');
}

mysqli_close($conexao);

?>
