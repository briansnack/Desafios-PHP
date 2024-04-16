<?php
include 'funcoes.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Validar os dados
    if (validar_nome_usuario($nome) && validar_email($email) && validar_senha($senha)) {
        header("Location: sucesso.php");
        exit();
    } else { 
        header("Location: erro.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <h2>Registrar Usuário</h2>
    <form action="registro_post.php" method="post">
        Nome de Usuário: <input type="text" name="nome"><br><br>
        Email: <input type="text" name="email"><br><br>
        Senha: <input type="password" name="senha"><br><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
