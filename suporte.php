<?php
require "config.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    body {
        background-image: url("img/background.img.png");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .big-navbar {
        height: 120px;
        background-color: #111;
        color: white;
    }

    .navbar-title {
        font-size: 32px;
        font-weight: bold;
        text-align: center;
    }

    .unity-logo {
        height: 120px;
    }
</style>

<body class="bg-light">
<nav class="navbar big-navbar d-flex align-items-center">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <img src="img/unity.img.png" alt="Unity" class="unity-logo">

        <div class="text-center flex-grow-1">
            <span class="navbar-title">CHERNO PROTOCOL</span>
        </div>
        <a href="index.php" class="btn btn-light">Voltar</a>
    </div>
</nav>

<div class="container my-5">
    <div class="p-4 bg-white rounded-5 shadow mb-5">                                                    <!-- INTRODUÇÃO -->
        <h3 class="mb-3">Central de Suporte</h3>
        <p>
            Nesta página você pode encontrar ajuda para os problemas mais comuns,
            tirar dúvidas sobre o jogo ou entrar em contacto com a equipa de desenvolvimento.
        </p>
    </div>
    <div class="p-4 bg-white rounded-5 shadow mb-5">
        <h4 class="mb-3">Perguntas Frequentes</h4>
        <div class="accordion" id="faq">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        O jogo não abre, o que faço?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        Verifique se o seu computador cumpre os requisitos mínimos
                        e se possui o Unity instalado corretamente.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Não consigo fazer login
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Confirme se o email e a senha estão corretos.
                        Caso tenha esquecido a senha, contacte o suporte.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">
                        O download não funciona
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Tente usar outro navegador ou verifique se o seu antivírus
                        não está a bloquear o ficheiro.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-4 bg-white rounded-5 shadow mb-5">                                                            <!-- FORMULÁRIO DE CONTACTO -->
        <h4 class="mb-3">Contactar Suporte</h4>
        <form action="enviar_suporte.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" value="<?php echo isset($_SESSION['user_nome']) ? $_SESSION['user_nome'] : ''; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo isset($_SESSION['user_email']) ? $_SESSION['user_email'] : ''; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Mensagem</label>
                <textarea name="mensagem" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-success">
                Enviar Mensagem
            </button>
        </form>
    </div>
    
    <div class="p-4 bg-white rounded-5 shadow">                                                               <!-- INFO EXTRA -->
        <h5>Outros contactos</h5>
        <p>Email: <strong>suporte@chernoprotocol.pt</strong></p>
        <p>Horário: <strong>Segunda a Sexta - 9h às 18h</strong></p>
    </div>
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">                                                   <!-- RODAPÉ -->
    <p class="mb-2">Desenvolvido por: <strong>Diogo Miranda e Yago Santos</strong></p>
    <p class="mb-2">Turma: <strong>12ºL</strong></p>
</footer>

</body>
</html>