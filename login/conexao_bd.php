<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$bancoDados = 'cadastro_php';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bancoDados) or die(mysqli_error());

if (mysqli_connect_errno()) {
    echo "Problemas para conectar. Verifique seus dados.";
} else {
    echo "Conexão realizada com sucesso";
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$selecao = mysqli_query($conexao, "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha' ");

if (mysqli_num_rows($selecao) == 0) {
    header('location: erro.php');
    exit;
} else {
    header('location: ../home/script.php');
}
?>

