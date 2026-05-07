<?php
require "config.php";
require "conexao.php";

$nome  = $_POST["nome"];
$email = $_POST["email"];
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

$check = "SELECT id FROM usuarios WHERE email = ?";                             // Verificar se o email já existe
$stmt = $conn->prepare($check);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0)                                                      // Email já registado
{
    header("Location: index.php?erro=conta_existe");
    exit;
}

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";            // Cria a conta
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nome, $email, $senha);

if ($stmt->execute()) {
    header("Location: index.php?cadastro=sucesso");
    exit;
}
                   
header("Location: index.php?erro=geral");                                      // Erro genérico
exit;
?>