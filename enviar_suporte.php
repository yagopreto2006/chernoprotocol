<?php
require "config.php";
require "conexao.php";
if ($_SERVER["REQUEST_METHOD"] == "POST")                                                           // Verifica se veio do formulário
    {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];

        $user_id = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : NULL;                       // Se estiver logado, usa o ID do utilizador

        $sql = "INSERT INTO suporte (user_id, nome, email, mensagem) VALUES (?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isss", $user_id, $nome, $email, $mensagem);
        $stmt->execute();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Suporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="height:100vh">

    <div class="bg-white p-5 rounded shadow text-center">
        <h3>Mensagem enviada com sucesso!</h3>
        <p>A nossa equipa irá responder o mais breve possível.</p>
        <a href="suporte.php" class="btn btn-success mt-3">Voltar ao Suporte</a>
    </div>

</body>
</html>