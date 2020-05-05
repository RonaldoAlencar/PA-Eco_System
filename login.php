
<?php
session_start();
include('conexao.php');
 
if(empty($_POST['login']) || empty($_POST['senha'])) {
	header('Location: login.html');
	exit();
}
 
$usuario = mysqli_real_escape_string($conn, $_POST['login']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);
 
$query = "select login, senha from usuarios where login = '{$usuario}' and senha = '{$senha}'";
 
$result = mysqli_query($conn, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['login'] = $usuario;
	header('Location: cad_usuario.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
    header('Location: login.php');
    echo  "<script>alert('Email enviado com Sucesso!);</script>";
	exit();
}

?>