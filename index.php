<?php
require "config.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site da PAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<style>
    html, body 
    {
      height: 100%;
      margin: 0;
    }
    body  
    {
      background-image: url("img/background.img.png");  /*Define a imagem de fundo*/
      background-size: cover;                       /*Faz a imagem de fundo cobrir todo o elemento*/
      background-position: center;                  /*Centraliza a imagem no elemento*/
      background-repeat: no-repeat;                 /*Não repete a imagem*/
      background-attachment: fixed;                 /*Fixa a imagem no fundo da página*/
      display: flex;
      flex-direction: column;
    }
    .big-navbar 
    {
      height: 120px;                            /*Define a altura fixa do elemento*/
      background-color: #111;                 /*Define a cor de fundo*/
      color: white;                             /*Define a cor do texto*/
    }
    .navbar-title 
    {
      text-align: center;                       /*Centraliza todo o texto*/
      font-size: 32px;                          /*Define o tamanho da fonte*/
      font-weight: bold;                        /*Define a fonte em negrito*/
    }
    .navbar-devs 
    {
      font-size: 14px;           
      text-align: center;
    }
    .unity-logo 
    {
      height: 120px;
    }
    main 
    {
      flex: 1;
    }
</style>

<body class="bg-light"> 
<nav class="navbar big-navbar d-flex align-items-center">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div>
            <img src="img/unity.img.png" alt="Unity" class="unity-logo">                                                     <!-- Imagem Unity -->
        </div>

        <div class="text-center flex-grow-1">                                                                                <!-- Título -->
            <span class="navbar-title">CHERNO PROTOCOL</span>
        </div>

        <div class="d-flex align-items-center">

        <?php if (!isset($_SESSION["user_id"])): ?>

        <!-- Se NÃO estiver logado: mostra login/cadastro -->
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                Conta
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#registerModal">Cadastro</a></li>
            </ul>
        </div>

        <?php else: ?>

        <!-- Se ESTIVER logado: mostra botão com Logout -->
        <div class="dropdown">
            <button class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
                Minha Conta
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Meu Perfil</a></li>
                <li><a class="dropdown-item text-danger" href="logout.php">Sair</a></li>
            </ul>
        </div>

        <?php endif; ?>
    </div>
</nav>
 
<?php if (isset($_GET["erro"]) && $_GET["erro"] == "conta_existe"): ?>
    <div class="container mt-3">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Já existe uma conta registada com esse email.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
<?php endif; ?>

<?php if (isset($_GET["cadastro"]) && $_GET["cadastro"] == "sucesso"): ?>
    <div class="container mt-3">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Conta criada com sucesso! Já pode fazer login.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
<?php endif; ?>

<div class="container mt-4">                                                                                                  <!-- Box de introdução -->
    <div class="p-4 bg-white shadow-lg rounded-5 border">                                                                     
        <h4 class="mb-3">Introdução do Jogo</h4>
        <p>
            Num mundo onde a esperança foi substituída pelo silêncio e pela ruína, nasce Cherno Protocol, uma jornada intensa de sobrevivência, culpa e redenção.<br>
            Uma mutação devastadora espalhou-se pelo mundo, transformando cidades em cemitérios e pessoas em algo irreconhecível.
            Agora, no meio do caos, resta-te uma missão: encontrar a sua família.<br>
            Explora um mundo aberto pós-apocalíptico, enfrenta perigos constantes e descobre os segredos por trás do colapso da civilização. Cada passo é uma luta.
        </p>
    </div>
</div>

<div class="container-fluid my-5">  
  <div class="text-center mt-4">                                                                                          <!-- Botões de Download/Saiba Mais -->
        <a class="btn btn-success btn-lg mx-2" data-bs-toggle="modal" data-bs-target="#downloadModal" style="background-color:#808080; border-color:#808080; color:#ffffff;">Download</a>
        <a href="descricao.html" class="btn btn-primary btn-lg mx-2" style="background-color:#808080; border-color:#808080; color:#ffffff;">Saiba Mais</a>
    </div>         
    <br><br>                                                                                       
    <div class="row text-center justify-content-center">                                                                                         <!-- Imagens ilustrativas -->
        <div class="col-md-3 mb-3" style="color: #ffffff;">
            <img src="img/capajogo.img.png" class="img-fluid rounded shadow" alt="Capa do Jogo">
            <h5 class="mt-3">Capa do Jogo</h5>
    </div>
</div>

<br><br><br>
<footer class="bg-dark text-white text-center py-3 mt-auto">                                              <!-- Rodapé -->
    <p class="mb-2">Desenvolvido por: <strong>Diogo Miranda e Yago Santos</strong></p>
    <p class="mb-2">Turma: <strong>12ºL</strong></p>
    <a href="suporte.php" class="text-white text-decoration-underline">Suporte</a>
</footer>

<div class="modal fade" id="loginModal" tabindex="-1">                                                                      <!-- Configuração do Login -->
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form action="login.php" method="POST">
          <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Senha:</label>
            <input type="password" name="senha" class="form-control" required>
          </div>
          <button class="btn btn-primary" type="submit">Entrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="registerModal" tabindex="-1">                                                                  <!-- Configuração do Cadastro -->
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cadastro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form action="register.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label class="form-label">Nome Completo:</label>
            <input type="text" name="nome" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Senha:</label>
            <input type="password" name="senha" class="form-control" required>
          </div>
          <button class="btn btn-success" type="submit">Criar Conta</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">         <!-- Configuração do botão de Download -->
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="downloadModalLabel">Antes de fazer download...</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <p>Deseja continuar para o download agora?</p>
        <p>Ou quer saber mais sobre o jogo antes de baixar?</p>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button id="btnProximo" class="btn btn-success px-4">Próximo</button>
        <a href="descricao.html" class="btn btn-secondary px-4">Saber Mais</a>
      </div>
    </div>
  </div>
</div>

<script>                                                                                                                  // Configuração do Download do jogo //
document.getElementById("btnProximo").addEventListener("click", function () 
{
    const link = document.createElement("a");
    link.href = "CHERNOPROTOCOL.exe";
    link.download = "CHERNOPROTOCOL.exe";
    link.click();
});
</script>
</body>
</html>