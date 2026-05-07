<?php
require "config.php";

// destruir todas as variáveis de sessão
session_unset();

// destruir a sessão
session_destroy();

// redirecionar para a página inicial
header("Location: index.php");
exit;
?>