<?php
require "config.php";
require "conexao.php";

$email = $_POST["email"];
$senha = $_POST["senha"];
$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) 
{
    $user = $result->fetch_assoc();

    if (password_verify($senha, $user["senha"])) 
    {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_nome"] = $user["nome"];
        $_SESSION["user_email"] = $user["email"];

        header("Location: index.php");
        exit;
    }
}
header("Location: index.php?erro=1");
?>